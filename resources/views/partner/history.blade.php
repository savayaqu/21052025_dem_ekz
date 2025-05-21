@extends('layout.layout')
@section('title', 'История партнера')

@section('main')
    <a class="btn" href="{{ url()->previous() }}">Назад</a>
    <div>
        <h2>История реализации товаров {{$partner->partnerType->name}}</h2>
        @foreach($partner_products as $partner_product)
            <div class="flex">
                <div class="div15">Дата: {{$partner_product->date}}</div>
                <div class="div15">Количество: {{$partner_product->count}}</div>
                <div class="div70">Наименование товара: {{$partner_product->product->name}}</div>            </div>
        @endforeach
    </div>
@endsection
