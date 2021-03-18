<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishSettings2 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_settings', function($table)
        {
            $table->text('production')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_settings', function($table)
        {
            $table->dropColumn('production');
        });
    }
}
