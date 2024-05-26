<?php namespace Irina\Gaming\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIrinaGamingReviews extends Migration
{
    public function up()
    {
        Schema::table('irina_gaming_reviews', function($table)
        {
            $table->boolean('is_published');
        });
    }
    
    public function down()
    {
        Schema::table('irina_gaming_reviews', function($table)
        {
            $table->dropColumn('is_published');
        });
    }
}
