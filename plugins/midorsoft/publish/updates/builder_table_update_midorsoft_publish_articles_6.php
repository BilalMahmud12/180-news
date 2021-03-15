<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishArticles6 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_articles', function($table)
        {
            $table->integer('category_id')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_articles', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
