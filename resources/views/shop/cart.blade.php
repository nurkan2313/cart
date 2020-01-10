@extends('layouts.master')

@section('title')
    Корзина
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{ $product['title'] }}</a>
                                </h4>
                                <h5>${{ $product['price'] }}</h5>
                                <p class="card-text">
                                    {{ $product['description'] }}
                                </p>
                                <a class="btn btn-success pull-right"
                                   role="button"
                                   id="removeFromCart"
                                   data-id="{{ $product['id'] }}"
                                   data-price="{{ $product['firstPrice'] }}"
                                   onclick="remove(this);"
                                >удалить из корзины</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{ $product['qty'] }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-12 -->

    </div>

@endsection