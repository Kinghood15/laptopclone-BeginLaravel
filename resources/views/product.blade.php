@extends('layout.welcome')
@section('content')
@if (count($productall))

    @if (count($postnewslimits))
        <div class="slideshow-container">
            @foreach ($postnewslimits as $postnewslimititem)
                <div class="mySlides fade">
                    <img src={{$postnewslimititem->Image_postnew}} style="width:100%; height:100%;">
                    <div class="text">{{$postnewslimititem->title_postnews}}</div>
                </div>
            @endforeach
        </div>
        <br>
        <div style="text-align:center">
            @foreach ($postnewslimits as $postnewslimititem)
                <span class="dot"></span>
            @endforeach
        </div>
    @endif
    <script type="text/javascript" src="/js/slide.js"></script>
    @if (count($categoryproductall))
        <div class="box-list-items-category-products">
            <h3 style="width:90%;margin:auto;padding:10px;">Danh mục sản phẩm</h3>
            <div class="box-list-category-products">
                @foreach ($categoryproductall as $categoryproductitem)
                    <div class="box-item-category-product">
                        <a href={{'/san-pham/'.$categoryproductitem->id}}>
                            <div class="box-item-title-category-product">
                                <p>{{$categoryproductitem->name_categoryproduct}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    
    <div class="container-productall">
        @foreach ($productall as $product)
        <div class="productall-home">
            @if (count($imageproduct))
                @foreach ($imageproduct as $imageproductitem)
                    @if ($imageproductitem->id_products == $product->id)
                        <div class="box-item-productall">
                            <div class="productall-box">
                                <a href={{'/san-pham/'.$product->id_categoryproducts.'/chi-tiet-san-pham/'.$product->id}} style="text-decoration:none;">
                                    <div class="productall-title" id="txtNameProduct">
                                        <p>{{$product->name_product}}</p>
                                    </div>
                                    <div class="productall-img">
                                        <img id="imageProduct" src={{$imageproductitem->image_product1}}>
                                    </div>
                                    <div class="productall-content">
                                        <p style="font-size:12px;color:gray;text-decoration:line-through;">Giá niêm yết: {{$product->quotedprice}} VNĐ</p>
                                        <p style="font-size:14px; font-weight:600; color:red">Giá sản phẩm: {{$product->price}} VNĐ</p>
                                    </div>
                                </a>
                                <div class="productall-cart">
                                    <a href="/gio-hang/">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>      
                    @endif                                
                @endforeach
            @endif
        </div>
        @endforeach
    </div>
@endif
@endsection