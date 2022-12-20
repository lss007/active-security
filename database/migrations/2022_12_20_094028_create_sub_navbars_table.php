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
        Schema::create('sub_navbars', function (Blueprint $table) {
            $table->id();
            $table->string('navbar_id')->nullable();
            $table->string('route_name')->nullable();
            $table->string('route_link')->nullable()->unique();
            $table->integer('ordering')->default(0);
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
        Schema::dropIfExists('sub_navbars');
    }
};
