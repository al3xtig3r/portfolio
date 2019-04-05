<?php namespace Al3xTig3r\Portfolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('al3xtig3r_portfolio_customers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 128);
            $table->string('email', 64)->nullable();
            $table->string('phone', 32)->nullable();
            $table->boolean('public')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('al3xtig3r_portfolio_customers');
    }
}
