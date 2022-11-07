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
        Schema::create('home_section_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('text')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_section_sliders');
    }
};
