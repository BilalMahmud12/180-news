<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishArticleCategories2 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_article_categories', function($table)
        {
            $table->boolean('in_menu')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_article_categories', function($table)
        {
            $table->dropColumn('in_menu');
        });
    }
}
