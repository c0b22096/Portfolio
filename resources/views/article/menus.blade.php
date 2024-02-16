@extends('layout.app')
@section('content')
    <ul>
        @foreach ($menus as $menu)
        <div class="container">
            <li><img src="{{ url('storage/images', $menu->filename) }}" alt=""></li>
            <li><h2>{{ $menu->name }}　{{ $menu->price }}円</h2></li>
        </div>
    @endforeach
    </ul>
@endsection