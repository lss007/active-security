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
        Schema::create('all_pages_banners', function (Blueprint $table) {
            $table->id();
            $table->string('cat_id');
            $table->text('heading')->nullable();
            $table->text('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('banner_paragaph')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('side_img')->nullable();
            $table->text('button_text')->nullable();
            $table->text('button_link')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('all_pages_banners');
    }
};
