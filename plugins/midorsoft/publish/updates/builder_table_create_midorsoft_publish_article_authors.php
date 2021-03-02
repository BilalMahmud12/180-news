<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMidorsoftPublishArticleAuthors extends Migration
{
    public function up()
    {
        Schema::create('midorsoft_publish_article_authors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('active')->default(1);
            $table->string('name');
            $table->string('title')->nullable();
            $table->text('bio')->nullable();
            $table->text('photo')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('midorsoft_publish_article_authors');
    }
}
