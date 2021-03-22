<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMidorsoftPublishPostVisits extends Migration
{
    public function up()
    {
        Schema::create('midorsoft_publish_post_visits', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('visit_count')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('midorsoft_publish_post_visits');
    }
}
