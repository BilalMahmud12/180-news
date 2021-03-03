<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishCategories extends Migration
{
    public function up()
    {
        Schema::rename('midorsoft_publish_article_categories', 'midorsoft_publish_categories');
    }
    
    public function down()
    {
        Schema::rename('midorsoft_publish_categories', 'midorsoft_publish_article_categories');
    }
}
