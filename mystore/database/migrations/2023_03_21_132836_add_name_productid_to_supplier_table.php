<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameProductidToSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('supplier', function (Blueprint $table) {
            //
            $table->string('name');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supplier', function (Blueprint $table) {
            //
            $table->dropForeign(['product_id']);
            $table->dropColumn('product_id');
            $table->dropColumn('name');
        });
    }
}
