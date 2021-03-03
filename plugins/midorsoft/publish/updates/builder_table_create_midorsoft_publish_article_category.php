<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMidorsoftPublishArticleCategory extends Migration
{
    public function up()
    {
        Schema::create('midorsoft_publish_article_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('article_id');
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('midorsoft_publish_article_category');
    }
}
