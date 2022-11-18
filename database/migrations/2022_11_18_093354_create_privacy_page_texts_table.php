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
        Schema::create('privacy_page_texts', function (Blueprint $table) {
            $table->id();
            $table->text('heading');
            $table->longText('title')->nullable();
            $table->longText('para1')->nullable();
            $table->longText('para2')->nullable();
            $table->longText('para3')->nullable();
            $table->longText('para4')->nullable();
            $table->longText('para5')->nullable();
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
        Schema::dropIfExists('privacy_page_texts');
    }
};
