<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishArticles8 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_articles', function($table)
        {
            $table->boolean('with_caution')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_articles', function($table)
        {
            $table->dropColumn('with_caution');
        });
    }
}
