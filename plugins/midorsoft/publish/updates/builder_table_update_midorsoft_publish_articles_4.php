<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishArticles4 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_articles', function($table)
        {
            $table->boolean('in_slider')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_articles', function($table)
        {
            $table->dropColumn('in_slider');
        });
    }
}
