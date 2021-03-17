<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishArticles7 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_articles', function($table)
        {
            $table->string('short_code')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_articles', function($table)
        {
            $table->dropColumn('short_code');
        });
    }
}
