<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('id_category')->unsigned()->nullable();
            $table->string('price');
            $table->string('description')->nullable();
            $table->string('thumb_url')->nullable();
            $table->timestamps();

            $table->foreign('id_category', 'id_category_fk')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('id_category_fk');
        });
        Schema::dropIfExists('products');
    }
}
