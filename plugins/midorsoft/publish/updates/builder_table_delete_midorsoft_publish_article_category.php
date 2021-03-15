<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMidorsoftPublishArticleCategory extends Migration
{
    public function up()
    {
        Schema::dropIfExists('midorsoft_publish_article_category');
    }
    
    public function down()
    {
        Schema::create('midorsoft_publish_article_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('article_id');
            $table->integer('category_id');
        });
    }
}
