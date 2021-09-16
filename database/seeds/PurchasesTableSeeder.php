<?php

use Illuminate\Database\Seeder;

class PurchasesTableSeeder extends Seeder
{
    public function run()
    {

        $data = [];
        // 適当な１０の販売データ
        for($i=1;$i<=30;$i++){
            $qty = random_int(1,10);
            $price = 1000;
            $total_price = $qty * $price;

            $data[] = [
                'purchase_id'     => $i,
                'purchase_date' => '2020-02-20 00:00:00',
                'supplier_name' => '店舗番号:No' . $i,
                'product_name'  => '商品:No' . $i,
                'quantity'  => $qty,
                'stock'  => $qty - random_int(0,1),
                'unit_price'  => $price,
                'purchase_amount'  => $total_price,
                'status'    => random_int(0,5),
                'memo'  => '仕入メモ' . $i,
                'created_at' => '2020-02-20 00:00:00',
                'updated_at' => '2020-02-20 00:00:00',

            ];
        }
        DB::table('purchases')->delete(); //最初にdrop Table
        DB::table('purchases')->insert($data);
    }
}
