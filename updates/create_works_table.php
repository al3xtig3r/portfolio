<?php namespace Al3xTig3r\Portfolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateWorksTable extends Migration
{
    public function up()
    {
        Schema::create('al3xtig3r_portfolio_works', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 128);
            $table->string('description', 512)->nullable();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->foreign('customer_id')
                ->references('id')
                ->on('al3xtig3r_portfolio_customers')
                ->onDelete('set null');
            $table->integer('service_id')->unsigned()->nullable();
            $table->foreign('service_id')
                ->references('id')
                ->on('al3xtig3r_portfolio_services')
                ->onDelete('set null');
            $table->string('link', 256)->nullable();
            $table->float('gross_price')->nullable();
            $table->integer('likes')->default(0);
            $table->integer('vote')->nullable();
            $table->string('comment', 1024)->nullable();
            $table->boolean('public')->default(false);
            $table->date('release_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->boolean('reminder')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('al3xtig3r_portfolio_works');
    }
}
