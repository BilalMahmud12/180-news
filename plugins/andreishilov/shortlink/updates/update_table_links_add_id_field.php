<?php

namespace AndreiShilov\ShortLink\Updates;

use Illuminate\Support\Facades\DB;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateTableLinksAddIdField extends Migration
{
    /**
     * Apply migration
     */
    public function up()
    {
        Schema::table('andreishilov_shortlink_links', function ($table) {
            $table->dropPrimary();
        });

        Schema::table('andreishilov_shortlink_links', function ($table) {
            $table->increments('id')->first();
            $table->unique('code');
        });
    }

    /**
     * Rollback migration
     */
    public function down()
    {
        Schema::table('andreishilov_shortlink_links', function ($table) {
            $table->dropColumn('id');
            $table->primary('code');
        });
    }
}
