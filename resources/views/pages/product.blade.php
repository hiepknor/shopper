@extends('app')

@section('pageTitle', 'Sản phẩm')

@section('content')
    <div class="main-content-title">
        <h1>
            <span>Sản phẩm</span>
        </h1>
    </div>

    <div class="grid-products">
{{--        @foreach($products as $item)--}}
{{--            <div class="grid-item">--}}
{{--                <a class="item-link" href="/{{ $item->categories()->first()->slug .'/'. $item->id}}" title="{{ $item->name }}">--}}
{{--                    <div class="item-thumb">--}}
{{--                        <img src="uploads/products/{{ $item->images()->first()->name }}" alt="{{ $item->name }}">--}}
{{--                        <div class="sale-sticker"><img src="images/icon_giamgia.png" alt="icon giảm giá"><span class="sale-percent">11%</span></div>--}}
{{--                    </div>--}}
{{--                    <div class="item-name center">{{ $item->name }}</div>--}}
{{--                    <div class="item-price">--}}
{{--                        <span class="unit-price center"></span>--}}
{{--                        <span class="promotion-price center">{{ $item->price }}</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <button class="add-to-cart center">Đặt mua ngay</button>--}}
{{--            </div>--}}
{{--        @endforeach--}}
    </div>
{{--    {!! $products->links() !!}--}}
@endsection