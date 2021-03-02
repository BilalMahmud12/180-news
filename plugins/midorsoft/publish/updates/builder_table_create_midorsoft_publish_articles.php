<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMidorsoftPublishArticles extends Migration
{
    public function up()
    {
        Schema::create('midorsoft_publish_articles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('active');
            $table->string('title');
            $table->string('slug');
            $table->text('intro')->nullable();
            $table->text('content')->nullable();
            $table->text('image')->nullable();
            $table->text('video_source')->nullable();
            $table->text('video_url')->nullable();
            $table->integer('category_id')->default(0);
            $table->integer('author_id')->default(0);
            $table->boolean('is_video_post')->default(0);
            $table->boolean('is_vip_post')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('references')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('midorsoft_publish_articles');
    }
}
