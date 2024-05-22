<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clase', function (Blueprint $table) {
            $table->bigInteger('codclase')->primary();
            $table->string('nombre', 255);
            $table->integer('credito')->unsigned();
        });
        
        Schema::create('profesor', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('nombre', 255);
            $table->string('apellido', 255);
            $table->enum('titulo', ['lic', 'ing', 'msc', 'doc']);
        });
        
        Schema::create('aula', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->primary();
            $table->string('nombre', 255);
            $table->text('ubicacion');
        });
        
        Schema::create('imparte', function (Blueprint $table) {
            $table->string('c_codclase', 5);
            $table->string('p_idprofesor', 10);
            $table->bigInteger('a_idaula')->unsigned();
            $table->primary(['c_codclase', 'p_idprofesor', 'a_idaula']);
            $table->foreign('c_codclase')->references('codclase')->on('clase');
            
            $table->foreign('p_idprofesor')->references('id')->on('profesor')->onDelete('cascade');
;
            $table->foreign('a_idaula')->references('id')->on('aula');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clase');
        Schema::dropIfExists('profesor');
        Schema::dropIfExists('aula');
        Schema::dropIfExists('imparte');
        Schema::dropIfExists('migracion');
    }
};  