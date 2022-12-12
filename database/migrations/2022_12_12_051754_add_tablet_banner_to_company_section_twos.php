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
        Schema::table('company_section_twos', function (Blueprint $table) {
            //
                   $table->string('tablet_banner')->after('profile_img')->nullable();
                   $table->string('mobile_banner')->after('tablet_banner')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_section_twos', function (Blueprint $table) {
            //
                     $table->dropColumn('tablet_banner');
                     $table->dropColumn('mobile_banner');
        });
    }
};
