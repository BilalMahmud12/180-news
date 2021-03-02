<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMidorsoftPublishArticleCategories extends Migration
{
    public function up()
    {
        Schema::create('midorsoft_publish_article_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('active')->default(1);
            $table->string('name');
            $table->string('slug');
            $table->text('content')->nullable();
            $table->text('image')->nullable();
            $table->text('meta_desc')->nullable();
            $table->text('meta_keys')->nullable();
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('midorsoft_publish_article_categories');
    }
}
