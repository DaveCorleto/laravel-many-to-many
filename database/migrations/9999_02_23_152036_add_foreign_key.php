<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->foreignId('type_id')->constrained();
        });
        Schema::table('projects_technology', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained();
            $table->foreignId('technology_id')->constrained();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('projects', function (Blueprint $table) {
        $table->dropForeign(['type_id']);
        //per sicurezza puoi anche droppare la colonna, in questo modo:
        $table->dropColumn('type_id'); 
        });
    }
};
