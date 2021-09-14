@extends('base')
@section('content')

  @foreach($purchases as $purchase)
  <div>
    {{$purchase->purchase_id}}
    {{$purchase->purchase_date}}
    {{$purchase->supplier_name}}
    {{$purchase->product_name}}
    {{$purchase->quantity}}
    {{$purchase->stock}}
    {{$purchase->price}}
    {{$purchase->total_price}}
    {{$purchase->status}}
    {{$purchase->memo}}
  </div>
  @endforeach
@endsection
