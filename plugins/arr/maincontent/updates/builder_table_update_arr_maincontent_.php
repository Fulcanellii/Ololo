<?php namespace Arr\MainContent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArrMaincontent extends Migration
{
    public function up()
    {
        Schema::table('arr_maincontent_', function($table)
        {
            $table->string('image')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('arr_maincontent_', function($table)
        {
            $table->text('image')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
