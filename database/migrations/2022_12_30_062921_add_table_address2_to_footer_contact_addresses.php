<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('footer_contact_addresses', function (Blueprint $table) {
            $table->string('address2')->after('Whatsapp_to')->nullable();
            $table->text('telefon2')->after('address2')->nullable();
            $table->text('fax2')->after('telefon2')->nullable();
            $table->text('email2')->after('fax2')->nullable();
            $table->text('permit')->after('email2')->nullable();
            $table->text('local')->after('permit')->nullable();
            $table->text('source')->after('local')->nullable();
        });
    }
    public function down()
    {
        Schema::table('footer_contact_addresses', function (Blueprint $table) {
            $table->dropColumn('address2');
            $table->dropColumn('telefon2');
            $table->dropColumn('fax2');
            $table->dropColumn('email2');
            $table->dropColumn('permit');
            $table->dropColumn('local');
            $table->dropColumn('source');
        });
    }
};
