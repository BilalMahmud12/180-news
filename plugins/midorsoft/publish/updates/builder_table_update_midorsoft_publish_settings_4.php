<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishSettings4 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_settings', function($table)
        {
            $table->text('live_stream_link');
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_settings', function($table)
        {
            $table->dropColumn('live_stream_link');
        });
    }
}
