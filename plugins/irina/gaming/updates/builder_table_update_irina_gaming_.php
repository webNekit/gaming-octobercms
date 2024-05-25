<?php namespace Irina\Gaming\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIrinaGaming extends Migration
{
    public function up()
    {
        Schema::table('irina_gaming_', function($table)
        {
            $table->string('platform');
        });
    }
    
    public function down()
    {
        Schema::table('irina_gaming_', function($table)
        {
            $table->dropColumn('platform');
        });
    }
}
