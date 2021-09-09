<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Purchase extends Model
{
    // 明示的に指定
    protected $table = 'purchases';

    public function getPurchaseList(){
        return $this->whereNotIn('status', config('const.STATUS.HIDE'))
        ->get();
    }

    // 有効な仕入データを取得
    public function scopeGetShowPurcahse($query){
        return $query->addselect(
            [
                $this->getTable() . '.purchase_id',
                $this->getTable() . '.product_name',
                $this->getTable() . '.quantity',
                $this->getTable() . '.stock',
            ]
            )->whereNotIn('status', [config('const.STATUS.HIDE')])
            ->get();
    }


}
