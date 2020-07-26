<?php namespace Arr\MainContent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArrMaincontent extends Migration
{
    public function up()
    {
        Schema::create('arr_maincontent_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arr_maincontent_');
    }
}
