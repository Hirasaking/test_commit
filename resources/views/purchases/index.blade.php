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
    {{$purchase->unit_price}}
    {{$purchase->purchase_amount}}
    {{$purchase->status}}
    {{$purchase->memo}}
  </div>
  @endforeach
@endsection
