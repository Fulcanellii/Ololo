<?php namespace Arr\MainContent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArrMaincontent2 extends Migration
{
    public function up()
    {
        Schema::table('arr_maincontent_', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('arr_maincontent_', function($table)
        {
            $table->string('image', 191);
        });
    }
}
