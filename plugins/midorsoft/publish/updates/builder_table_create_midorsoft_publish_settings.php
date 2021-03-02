<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMidorsoftPublishSettings extends Migration
{
    public function up()
    {
        Schema::create('midorsoft_publish_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('site_name');
            $table->text('site_image');
            $table->text('site_meta_description')->nullable();
            $table->text('site_search_keywords')->nullable();
            $table->text('site_logo_dark')->nullable();
            $table->text('site_logo_light')->nullable();
            $table->text('privacy_policy')->nullable();
            $table->text('about')->nullable();
            $table->text('advertising')->nullable();
            $table->text('services')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('midorsoft_publish_settings');
    }
}
