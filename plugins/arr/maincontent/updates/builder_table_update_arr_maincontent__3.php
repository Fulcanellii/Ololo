<?php namespace Arr\MainContent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArrMaincontent3 extends Migration
{
    public function up()
    {
        Schema::table('arr_maincontent_', function($table)
        {
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::table('arr_maincontent_', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
