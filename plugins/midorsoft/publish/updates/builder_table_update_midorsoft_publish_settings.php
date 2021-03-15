<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishSettings extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_settings', function($table)
        {
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('telegram_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_settings', function($table)
        {
            $table->dropColumn('facebook_link');
            $table->dropColumn('twitter_link');
            $table->dropColumn('youtube_link');
            $table->dropColumn('telegram_link');
        });
    }
}
