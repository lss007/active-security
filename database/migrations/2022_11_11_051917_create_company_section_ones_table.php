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
        Schema::create('company_section_ones', function (Blueprint $table) {
            $table->id();
            $table->text('heading')->nullable();
            $table->text('title')->nullable();
            $table->longText('para1')->nullable();
            $table->text('title2')->nullable();
            $table->longText('para2')->nullable();
            $table->longText('para3')->nullable();
            $table->longText('para4')->nullable();
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
        Schema::dropIfExists('company_section_ones');
    }
};
