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
        Schema::create('services_page_sections', function (Blueprint $table) {
            $table->id();
            $table->string('page_cat_id');
            $table->longText('heading');
            $table->longText('title');
            $table->string('sec_image')->nullable();
            $table->string('link')->nullable();
            $table->longText('para1')->nullable();
            $table->longText('para2')->nullable();
            $table->longText('para3')->nullable();
            $table->longText('para4')->nullable();
            $table->longText('para5')->nullable();
            $table->longText('para6')->nullable();
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
        Schema::dropIfExists('services_page_sections');
    }
};
