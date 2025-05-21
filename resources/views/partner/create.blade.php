@extends('layout.layout')
@section('title', 'Создание партнера')
@section('main')
    <a class="btn" href="{{ url()->previous() }}">Назад</a>
    <form action="{{route('partner.store')}}" method="post">
        @csrf
        @if($errors->any())
            <script>
                alert('Ошибка валидации данных. Исправьте ошибки')
            </script>
        @endif
        <div>
            <label>Тип организации</label>
            <select name="partner_type_id">
                @foreach($types as $type)
                    <option value="{{old($type->id)}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Имя</label>
            <input value="{{old('name')}}" required name="name" placeholder="Имя">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Директор</label>
            <input value="{{old('director')}}" required name="director" placeholder="Директор">
            @error('director')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Эл. почта</label>
            <input value="{{old('email')}}" required name="email" placeholder="Электронная почта">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Номер телефона</label>
            <input value="{{old('phone')}}" required name="phone" placeholder="Номер телефона">
            @error('phone')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Адрес</label>
            <input value="{{old('address')}}" required name="address" placeholder="Адрес">
            @error('address')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Рейтинг</label>
            <input value="1" type="number" min="1" max="10" required name="rating" placeholder="Рейтинг">
            @error('rating')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Создать партнера</button>
    </form>
@endsection
