<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';

    public function getPurcahse(){

        $query = self::ShowSale()
        ->limit(5)
        ->get();

        return $query;
    }

    // 有効な販売データを取得
    public function scopeShowSale($query){
        return $query->addselect(
            [
                $this->getTable() . '.purchase_id',
                $this->getTable() . '.purchase_date',
                $this->getTable() . '.product_name',
                $this->getTable() . '.quantity',
                $this->getTable() . '.stock',
                $this->getTable() . '.price',
                $this->getTable() . '.total_price',
                $this->getTable() . '.memo',
            ]
            )->whereNotIn('status', [config('const.STATUS.HIDE')]);
    }
}
