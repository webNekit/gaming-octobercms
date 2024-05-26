<?php namespace Irina\Gaming\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateIrinaGamingEquipment extends Migration
{
    public function up()
    {
        Schema::create('irina_gaming_equipment', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('icon');
            $table->boolean('is_published');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('irina_gaming_equipment');
    }
}
