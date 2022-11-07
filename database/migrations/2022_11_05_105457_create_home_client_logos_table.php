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
        Schema::create('home_client_logos', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('buton')->nullable();
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
        Schema::dropIfExists('home_client_logos');
    }
};
