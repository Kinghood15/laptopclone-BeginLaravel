@extends('layout.welcome')

@section('content')
@if (count($productsbyid))
    @foreach ($productsbyid as $product)
        @if (count($categoryproductall))
            @foreach ($categoryproductall as $category)
                @if ($category->id == $product->id_categoryproducts)
                    <div class="container-location">
                        <a href="/">
                            <p>Trang chủ</p>
                        </a>
                        <p> &gt;</p>
                        <a href={{'/san-pham/'.$product->id_categoryproducts}}>
                            <p>{{$category->name_categoryproduct}}</p>
                        </a>
                        <p> &gt;</p>
                        <a href={{'/san-pham/'.$product->id_categoryproducts.'/chi-tiet-san-pham/'.$product->id}}>
                            <p>{{$product->name_product}}</p>
                        </a>
                    </div>
                    @if (count($imageproduct))
                        @foreach ($imageproduct as $imageproductitem)
                            @if ($imageproductitem->id_products = $product->id)
                                <div class="box-product-details">
                                    <div class="box-product-details-img">
                                        <img class="box-item-active-image-product-details" src={{$imageproductitem->image_product1}}>
                                        <div class="box-list-item-product-details">
                                            @if ($imageproductitem->image_product2)
                                                <img class="box-item-image-product-details" src={{$imageproductitem->image_product2}}>
                                            @endif
                                            @if ($imageproductitem->image_product3)
                                                <img class="box-item-image-product-details" src={{$imageproductitem->image_product3}}>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="box-product-details-content">
                                        <div class="product-details-content-title">
                                            <h1>{{$product->name_product}}</h1>
                                            <p style="padding:10px 0;color:gray;font-size:16px;font-weight:200;text-decoration:line-through;">Giá niêm yết: {{$product->quotedprice}} VNĐ</p>
                                            <p style="padding:10px 0;color:#BB0000;font-size:20px;font-weight:bold;">Giá bán: {{$product->price}} VNĐ</p>
                                        </div>
                                        <div class="product-details-content-menucontrols">
                                            <p>Số lượng:</p>
                                            <button id="btnDown" onClick="getClickDown()">&#45;</button>
                                            <input type="text" value="1" name="numberSoluong" id="txtSoLuong">
                                            <button id="btnUp" onClick="getClickUp()">&#43;</button>
                                            <script type="text/javascript" src="/js/function.js"></script>
                                        </div>
                                        <div class="product-details-content-menubuy">
                                            <a onClick="getClickGioHang()">
                                                <div class="menubuy-buynow">
                                                    <i class="fas fa-cart-arrow-down"></i>
                                                    <p>Thêm vào giỏ hàng</p>
                                                </div>
                                            </a>
                                            <a href="/giohang">
                                                <div class="menubuy-buynow">
                                                    <i class="fas fa-credit-card"></i>
                                                    <p>Mua hàng ngay</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="box-specification">
                                    <div class="specification-title">
                                        <h3>Thông số kỹ thuật</h3>
                                    </div>
                                    <div class="specification-content">
                                        <table>
                                            <tr>
                                                <th>CPU</th>
                                                <td>{{$product->cpu}}</td>
                                            </tr>
                                            <tr>
                                                <th>GPU</th>
                                                <td>{{$product->gpu}}</td>
                                            </tr>
                                            <tr>
                                                <th>Bộ nhớ</th>
                                                <td>{{$product->memory}}</td>
                                            </tr>
                                            <tr>
                                                <th>Ram</th>
                                                <td>{{$product->ram}}</td>
                                            </tr>
                                            <tr>
                                                <th>Màn hình</th>
                                                <td>{{$product->display}}</td>
                                            </tr>
                                            <tr>
                                                <th>Màu</th>
                                                <td>{{$product->color}}</td>
                                            </tr>
                                            <tr>
                                                <th>Khối lượng</th>
                                                <td>{{$product->weight}}</td>
                                            </tr>
                                            <tr>
                                                <th>Số lượng</th>
                                                <td>{{$product->quanlity}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>                                
                            @endif
                        @endforeach
                    @endif
                    @if (count($postproductall))
                        <div class="box-post-product-details">
                        @foreach ($postproductall as $postproduct)
                            @if ($postproduct->id_products == $product->id)
                                <h1>Đặc điểm laptop:</h1>
                                <div class="box-title-post-product-details">
                                    {{$postproduct->title_postproduct}}
                                </div>
                                <div class="box-content-post-product-details">
                                    {!!htmlspecialchars_decode($postproduct->description_postproduct)!!}
                                </div>
                            @endif
                        @endforeach
                        </div>
                    @endif
                @endif
            @endforeach
        @endif
    @endforeach
@endif
@endsection