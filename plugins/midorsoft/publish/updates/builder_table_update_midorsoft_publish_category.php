<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishCategory extends Migration
{
    public function up()
    {
        Schema::rename('midorsoft_publish_article_category', 'midorsoft_publish_category');
    }
    
    public function down()
    {
        Schema::rename('midorsoft_publish_category', 'midorsoft_publish_article_category');
    }
}
