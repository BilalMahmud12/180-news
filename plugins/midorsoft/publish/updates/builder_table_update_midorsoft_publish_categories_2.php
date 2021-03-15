<?php namespace Midorsoft\Publish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMidorsoftPublishCategories2 extends Migration
{
    public function up()
    {
        Schema::table('midorsoft_publish_categories', function($table)
        {
            $table->boolean('is_featured')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('midorsoft_publish_categories', function($table)
        {
            $table->dropColumn('is_featured');
        });
    }
}
