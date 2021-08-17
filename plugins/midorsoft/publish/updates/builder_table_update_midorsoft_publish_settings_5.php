<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishSettings5 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_settings', function($table)
        {
            $table->string('ads_contact_phone')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_settings', function($table)
        {
            $table->dropColumn('ads_contact_phone');
        });
    }
}
