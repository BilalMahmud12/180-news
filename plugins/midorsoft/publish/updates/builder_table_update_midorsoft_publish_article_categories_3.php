<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishArticleCategories3 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_article_categories', function($table)
        {
            $table->renameColumn('active', 'is_active');
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_article_categories', function($table)
        {
            $table->renameColumn('is_active', 'active');
        });
    }
}
