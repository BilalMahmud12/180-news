<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishAuthors2 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_authors', function($table)
        {
            $table->string('slug');
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_authors', function($table)
        {
            $table->dropColumn('slug');
            $table->dropColumn('email');
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
        });
    }
}
