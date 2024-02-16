@extends('layout.app')
@section('content')
    <div class="container">
        <h1>メニュー登録</h1>
        <form action="{{ route("store") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-item">
                <input type="text" name="name"  placeholder="メニュー名">
            </div>
            <div class="select-box">
                <select name="category_id" id="category-id">
                    <option value="" hidden>カテゴリを選択してください</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-item">
                <input type="number" name="price"  placeholder="値段">
            </div>
            <div class="form-item">
                <input type="number" name="stock"  placeholder="在庫数">
            </div>
            <input type="file" name="file">
            <div class="button-panel">
                <input type="submit" title="register" value="Register">
            </div>
        </form>
    </div>
@endsection