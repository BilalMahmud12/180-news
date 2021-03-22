<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMidorsoftPublishSearchTerms extends Migration
{
    public function up()
    {
        Schema::create('midorsoft_publish_search_terms', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('search_term');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('midorsoft_publish_search_terms');
    }
}
