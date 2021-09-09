<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Sale;
use App\Model\Purchase;

class IndexController extends Controller
{

    public function __construct(){
    }

    public function index()
    {
        $sale = (new Sale)->get()->all();
        dd($sale);
        // $purchase = (new Purchase)->get()->all();
        // dd($purchase);
        // abort(403);

        return view('index.index',compact('sales', $sales));
    }

    public function param($param)
    {
        dd($param);
    }

}
