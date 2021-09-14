<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Purchase extends Model
{
    // 明示的に指定
    protected $table = 'purchases';

    public function getPurcahse(){

        $query = self::ShowPurcahse()
        ->limit(5)
        ->get();

        return $query;
    }


    // 有効な仕入データを取得
    public function scopeShowPurcahse($query){
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
