@extends('layout.layout')
@section('title', 'Создание продукта')
@section('main')
    <a class="btn" href="{{ url()->previous() }}">Назад</a>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @if($errors->any())
            <script>
                alert('Ошибка валидации данных. Исправьте ошибки')
            </script>
        @endif
        <div>
            <label>Тип продукции</label>
            <select name="product_type_id">
                @foreach($types as $type)
                    <option value="{{old($type->id)}}">{{$type->name}} | {{$type->coefficient}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Название</label>
            <input value="{{old('name')}}" required name="name" placeholder="Название">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Артикль</label>
            <input value="{{old('article')}}" required name="article" placeholder="Артикль">
            @error('article')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Минимальная цена</label>
            <input value="{{old('minimum_price')}}" required name="minimum_price" placeholder="Минимальная цена">
            @error('minimum_price')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Создать продукт</button>
    </form>
@endsection
