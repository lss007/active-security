<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::table('home_section_fives', function (Blueprint $table) {
            //
            $table->string('tablet_img')->after('image')->nullable();
            $table->string('mobile_img')->after('tablet_img')->nullable();
        });
    }

    public function down()
    {
        Schema::table('home_section_fives', function (Blueprint $table) {
            //
            $table->dropColumn('tablet_img');
            $table->dropColumn('mobile_img');
        });
    }
};
