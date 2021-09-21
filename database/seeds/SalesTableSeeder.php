<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    public function run()
    {

        $data = [];
        // 適当な１０の販売データ
        for($i=1;$i<=30;$i++){
            $sale_volume = random_int(1,3);
            $data[] = [
                'sale_date' => '2020-02-20 00:00:00',
                'market' => $i,
                'product_name' => '商品:No' . $i,
                'sale_volume' => $sale_volume,
                'unit_price' => 10000,
                'market_fee' => 1000,
                'shipping_fee' => 485,
                'sale_amount' => $sale_volume * 10000,
                'purchase_amount' => $sale_volume * 100,
                'profit_amount' => $sale_volume * 100,
                'status'    => random_int(0,2),
                'created_at' => '2020-02-20 00:00:00',
                'updated_at' => '2020-02-20 00:00:00',
            ];
        }
        DB::table('sales')->delete(); //最初にdrop Table
        
        DB::table('sales')->insert($data);
    }
}
