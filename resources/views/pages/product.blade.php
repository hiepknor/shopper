@extends('app')

@section('pageTitle', 'Sản phẩm')

@section('content')
    <div class="main-content-title">
        <h1>
            <span>Tất cả sản phẩm</span>
        </h1>
    </div>
    <div class="grid-products all-products">
        @foreach($product as $item)
            <div class="grid-item">
                <a class="item-link" href="" title="{{ $item->name }}">
                    <div class="item-thumb">
                        <img src="{{ asset('storage/uploads/public/'.$item->previewImage->disk_name) }}">
                        <div class="sale-sticker"><img src="{{ asset('lacoviet/images/icon_giamgia.png') }}" alt="icon giảm giá"><span class="sale-percent">11%</span></div>
                    </div>
                    <div class="item-name center">{{ $item->name }}</div>
                    <div class="item-price">
                        <span class="unit-price center"></span>
                        <span class="promotion-price center">{{ $item->price }}</span>
                    </div>
                </a>
                <button class="add-to-cart center">Đặt mua ngay</button>
            </div>
        @endforeach
    </div>
{{--    {!! $products->links() !!}--}}
@endsection
