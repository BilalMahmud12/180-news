<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishTags2 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_tags', function($table)
        {
            $table->text('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_tags', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
