@extends('layout.layout')
@section('title', 'Партнеры')
@section('main')
    <a class="btn" href="{{route('partner.create')}}"> Создать партнера</a>
<div class="border">
    @foreach($partners as $partner)
        <a href="partners/{{$partner->id}}/history">История: {{$partner->partnerType->name}} | {{$partner->name}}</a>
        <a href="partners/{{$partner->id}}/update">
            <div class="border flex" style="font-size: 20px">
                <div style="width: 80%; padding: 10px">
                    <p class="bigFont">{{$partner->partnerType->name}} | {{$partner->name}}</p>
                    <p>{{$partner->director}}</p>
                    <p>+7 {{$partner->phone}}</p>
                    <p>Рейтинг: {{$partner->rating}}</p>
                </div>
                <div style="width: 20%; padding: 10px;">
                    <p class="bigFont">{{$partner->discount}}</p>
                </div>
            </div>
        </a>

    @endforeach
</div>
@endsection
