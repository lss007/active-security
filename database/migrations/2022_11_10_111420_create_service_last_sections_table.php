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
        Schema::create('service_last_sections', function (Blueprint $table) {
            $table->id();
            // $table->string('page_cat_id');
            $table->string('heading');
            $table->text('list1')->nullable();
            $table->text('list2')->nullable();
            $table->text('list3')->nullable();
            $table->text('list4')->nullable();
            $table->string('button')->nullable();
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
        Schema::dropIfExists('service_last_sections');
    }
};
