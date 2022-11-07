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
        Schema::create('footer_contact_addresses', function (Blueprint $table) {
            $table->id();
            $table->text('telefon')->nullable();
            $table->text('fax')->nullable();
            $table->text('email')->nullable();
            $table->text('address')->nullable();
            $table->text('logo')->nullable();
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
        Schema::dropIfExists('footer_contact_addresses');
    }
};
