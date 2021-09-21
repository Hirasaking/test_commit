<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';

    public function getSale(){

        $query = self::ShowSale()
        ->limit(5)
        ->get();

        return $query;
    }

    // 有効な販売データを取得
    public function scopeShowSale($query){
        return $query->addselect(
            [
                $this->getTable() . '.sale_id',
                $this->getTable() . '.sale_date',
                $this->getTable() . '.market',
                $this->getTable() . '.product_name',
                $this->getTable() . '.sale_volume',
                $this->getTable() . '.unit_price',
                $this->getTable() . '.market_fee',
                $this->getTable() . '.shipping_fee',
                $this->getTable() . '.sale_amount',
                $this->getTable() . '.purchase_amount',
                $this->getTable() . '.profit_amount',
                $this->getTable() . '.status',
                $this->getTable() . '.memo',
            ]
            )->whereNotIn('status', [config('const.STATUS.HIDE')]);
    }
}
