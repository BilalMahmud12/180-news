<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishArticleTags2 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_article_tags', function($table)
        {
            $table->boolean('is_active')->default(1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_article_tags', function($table)
        {
            $table->boolean('is_active')->default(null)->change();
        });
    }
}
