<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->unsignedBigInteger('purchase_id')->comment('仕入番号')->autoIncrement();
            $table->date('purchase_date')->comment('仕入日');
            $table->string('supplier_name', 128)->comment('仕入先')->nullable();
            $table->string('product_name', 128)->comment('商品名');
            $table->unsignedSmallInteger('quantity')->comment('数量');
            $table->unsignedSmallInteger('stock')->comment('在庫');
            $table->unsignedInteger('price')->comment('金額');
            $table->unsignedInteger('total_price')->comment('金額');
            $table->unsignedTinyInteger('status')->comment('ステータス'); //予約注文返品てーぶるは別に準備
            $table->string('memo', 256)->comment('メモ')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
