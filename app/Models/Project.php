<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Questa funzione descrive la relazione tra Project e Types:
    // Per ogni Project c'è un solo Type 
    public function type()
    {
        return $this -> belongsTo(Type :: class);
    }
    public function technologies()
    {
        return $this -> belongsToMany(Technology :: class);
    }

    }

