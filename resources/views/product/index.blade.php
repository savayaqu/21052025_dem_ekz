@extends('layout.layout')
@section('title', 'Продукты')
@section('main')
    <a class="btn" href="{{route('product.create')}}"> Создать продукт</a>
    <div class="border">
        @foreach($products as $product)
            <a href="products/{{$product->id}}/update">
                <div class="border flex" style="font-size: 20px">
                    <div style="width: 80%; padding: 10px">
                        <p>{{$product->productType->type}}</p>
                        <p>Название: {{$product->name}}</p>
                        <p>Артикль: {{$product->article}}</p>
                        <p>Минимальная цена: {{$product->minimum_price}}</p>
                    </div>
                </div>
            </a>

        @endforeach
    </div>
@endsection
