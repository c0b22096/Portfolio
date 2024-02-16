@extends('layout.app')
@section('content')
    <div class="container">
        <ul>
            @foreach ($categories as $category)
                <li><a href="{{ route('menus', $category) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection