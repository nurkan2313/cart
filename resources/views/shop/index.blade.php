@extends('layouts.master')

@section('title')
корзина
@endsection

@section('content')
    @foreach($products->chunk(3) as $product)
        <div class="row">
            @foreach($product as $item)
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="{{ $item->imagePath }}"
                             class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>{{ $item->title }}</h3>
                            <p class="card-text">{{ $item->description }}</p>
                            <div>
                                <div class="pull-left price">${{ $item->price }}</div>
                                <a href="{{ route('detail', $item->id ) }}" class="btn btn-primary pull-right">о продукте</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div style="padding: 20px;"></div>
        </div>
    @endforeach
@endsection

