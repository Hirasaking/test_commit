<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->unsignedBigInteger('sale_id')->autoIncrement()->comment('販売番号')->autoIncrement();
            $table->date('sale_date')->comment('販売日');
            $table->unsignedTinyInteger('market')->comment('販売先');
            $table->string('product_name', 128)->comment('商品名');
            $table->unsignedSmallInteger('sale_volume')->comment('数量');
            $table->unsignedInteger('unit_price')->comment('単価');
            $table->unsignedInteger('market_fee')->comment('手数料');
            $table->unsignedInteger('shipping_fee')->comment('配送料');
            $table->unsignedInteger('sale_amount')->comment('合計金額');
            $table->unsignedInteger('purchase_amount')->comment('仕入額');
            $table->unsignedInteger('profit_amount')->comment('利益額');
            $table->unsignedTinyInteger('status')->comment('ステータス'); //予約注文返品てーぶるは別に準備
            $table->string('memo', 256)->comment('メモ')->nullable();
            $table->boolean('is_delete')->default(0)->comment('削除対象');
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
        Schema::dropIfExists('sales');
    }
}
