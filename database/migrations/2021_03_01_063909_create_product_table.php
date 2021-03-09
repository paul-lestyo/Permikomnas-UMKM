<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('nama_product',50)->nullable();
            $table->text('text')->nullable();
            $table->string('gambar', 255)->nullable();
            $table->string('harga', 50)->nullable();
            $table->text('shope_link')->nullable();
            $table->text('toped_link')->nullable();
            $table->foreignId('category_id')->nullable()->index();
            $table->foreignId('toko_id')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
