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
        Schema::create('jozz', function (Blueprint $table) {
            $table->id(); 
            $table->integer('jozz')->comment('Juzz number'); 
            $table->integer('page')->comment('Page number'); 
            $table->integer('sura_no')->comment('Surah number'); 
            $table->string('sura_name_en')->comment('Surah name in English'); 
            $table->string('sura_name_ar')->comment('Surah name in Arabic'); 
            $table->integer('line_start')->comment('Starting line number'); 
            $table->integer('line_end')->comment('Ending line number'); 
            $table->integer('aya_no')->comment('Ayah number'); 
            $table->text('aya_text')->comment('Ayah text'); 
            $table->integer('text_coloring')->comment('indicator text coloring'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jozz');
    }
};
