@extends('layout.app')
@section('content')
        <div class="menus">
            @foreach ($products as $product)
            <div class="menu-box">
                <img src="{{ url('storage/images', $product->filename) }}" alt="画像が表示されない">
                <div class="menu-text">
                    <h2>{{ $product->name }}　{{ $product->price }}円</h2>
                    @if (!Auth::user()->is_cart($product->id))
                    <form action="{{ route("incart", $product) }}" method="post">
                        @csrf
                        <button>トレイに追加する</button>
                    </form>
                    @else
                    <form action="{{ route("outcart", $product) }}" method="post">
                        @csrf
                        @method("delete")
                        <button>トレイから削除する</button>
                    @endif
                    </form>
                </div>
            </div>
            @endforeach
        </div>
@endsection