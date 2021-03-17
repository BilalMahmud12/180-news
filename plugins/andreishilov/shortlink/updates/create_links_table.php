<?php

namespace AndreiShilov\ShortLink\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLinksTable extends Migration
{
    public function up()
    {
        Schema::create('andreishilov_shortlink_links', function ($table) {
            $table->string('code', 7);
            $table->string('link', 511);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->primary('code');
        });
    }

    public function down()
    {
        Schema::dropIfExists('andreishilov_shortlink_links');
    }
}
