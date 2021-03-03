<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishTags extends Migration
{
    public function up()
    {
        Schema::rename('midorsoft_publish_article_tags', 'midorsoft_publish_tags');
    }
    
    public function down()
    {
        Schema::rename('midorsoft_publish_tags', 'midorsoft_publish_article_tags');
    }
}
