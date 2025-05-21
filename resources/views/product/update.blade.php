@extends('layout.layout')
@section('title', 'Редактирование продукта')
@section('main')
    <a class="btn" href="{{ url()->previous() }}">Назад</a>
    <form method="post">
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
                    <option value="{{$type->id}}" @if($type->id === $product->product_type_id) selected @endif>{{$type->type}} </option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Название</label>
            <input value="{{$product->name}}" required name="name" placeholder="Название">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Артикль</label>
            <input value="{{$product->article}}" required name="article" placeholder="Артикль">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Минимальная цена</label>
            <input value="{{$product->minimum_price}}" required name="minimum_price" placeholder="Минимальная цена">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Создать продукт</button>
    </form>
    <a href="products/{{$product->id}}/delete">Удалить продукт</a>
@endsection
