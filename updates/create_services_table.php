<?php namespace Al3xTig3r\Portfolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('al3xtig3r_portfolio_services', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 32);
            $table->string('icon', 16)->nullable();
            // TODO: aggiungere descrizione?
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('al3xtig3r_portfolio_services');
    }
}
