<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up()
    {
        Schema::table('services_page_sections', function (Blueprint $table) {
            //
            $table->string('tablet_banner')->after('sec_image')->nullable();
            $table->string('mobile_banner')->after('tablet_banner')->nullable();
        });
    }


    public function down()
    {
        Schema::table('services_page_sections', function (Blueprint $table) {
            //
                 //
                 $table->dropColumn('tablet_banner');
                 $table->dropColumn('mobile_banner');
        });
    }
};
