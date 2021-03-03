<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishAuthors extends Migration
{
    public function up()
    {
        Schema::rename('midorsoft_publish_article_authors', 'midorsoft_publish_authors');
    }
    
    public function down()
    {
        Schema::rename('midorsoft_publish_authors', 'midorsoft_publish_article_authors');
    }
}
