@extends('base')
@section('content')

  @foreach($sales as $sale)
  <div>
    {{$sale->sale_id}}
    {{$sale->sale_date}}
    {{$sale->supplier_name}}
    {{$sale->product_name}}
    {{$sale->quantity}}
    {{$sale->stock}}
    {{$sale->price}}
    {{$sale->total_price}}
    {{$sale->status}}
    {{$sale->memo}}
  </div>
  @endforeach
@endsection
