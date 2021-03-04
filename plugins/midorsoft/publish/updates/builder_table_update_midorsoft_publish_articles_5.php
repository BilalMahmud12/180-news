<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishArticles5 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_articles', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_articles', function($table)
        {
            $table->integer('category_id')->default(0);
        });
    }
}
