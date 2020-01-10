@extends('layouts.master')

@section('title')
{{ $product['title'] }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
                <h3 class="card-title">  {{$product['title']}}</h3>
                <h4>$  {{$product['price']}}</h4>
                <p class="card-text">{{$product['description']}}</p>
                <a class="btn btn-success pull-right"
                   role="button"
                   id="addToCart"
                   data-id="{{ $product->id }}"
                >добавить в корзину</a>
            </div>
        </div>
    </div>
</div>

@endsection