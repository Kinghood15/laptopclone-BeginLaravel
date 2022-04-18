@extends('layout.welcome')

@section('content')
<div class="slideshow-container">
    @if (count($postnewslimits))
        @foreach ($postnewslimits as $postnewslimititem)
            <div class="mySlides fade">
                <img src={{$postnewslimititem->Image_postnew}} style="width:100%; height:100%;">
                <div class="text">{{$postnewslimititem->title_postnews}}</div>
            </div>
        @endforeach
    @endif
</div>
<br>
<div style="text-align:center">
    @if (count($postnewslimits))
        @foreach ($postnewslimits as $postnewslimititem)
            <span class="dot"></span>
        @endforeach
    @endif
</div>
<script type="text/javascript" src="./js/slide.js"></script>
<div class="box-introduce">
<div class="box_list_items">
    @if (count($categorylaptoplimits))
        @foreach ($categorylaptoplimits as $categorylaptoplimit)
        <div class="box-item">
            <div class="item-title">
                <h3>Laptop dành {{$categorylaptoplimit->name_categorylaptop}}</h3>
            </div>
            <div class="item-img-home">
                <img src={{$categorylaptoplimit->image_categorylaptop}}>
            </div>
            <div class="item-content">
                <p>{{ Str::limit($categorylaptoplimit->description_categorylaptop,150)}}</p>
                <a href="#">Đọc thêm...</a>
            </div>
        </div>
        @endforeach
    @endif
</div>
    {{-- <div class="box-banner">
        
    </div> --}}
    <div class="box-solution">
        <h1>Giải pháp công nghệ laptop smartphone</h1>
        <div class="solution-items-list">
            <div class="solution-list-item">
                <div class="solution-item-box">
                    <h4 style="text-transform: uppercase;">Laptop</h4>
                    <div class="solution-item-content">
                        <p>Laptop ngon bổ rẻ</p>
                        <i class="fas fa-laptop"></i>
                    </div>
                </div>
            </div>
            <div class="solution-list-item">
                <div class="solution-item-box">
                    <h4 style="text-transform: uppercase;">Hình ảnh 2D 3D</h4>
                    <div class="solution-item-content">
                        <p>Hình ảnh đẹp tạo được nhiều chuyên sâu về đồ hoạ, hình ảnh trở nên sống động</p>
                        <i class="far fa-image"></i>
                    </div>
                </div>
            </div>
            <div class="solution-list-item">
                <div class="solution-item-box">
                    <h4 style="text-transform: uppercase;">Thiết KẾ KIỂU DÁNG hiện đại</h4>
                    <div class="solution-item-content">
                        <p>Giúp khách hàng trở nên sang trọng lịch lãm.</p>
                        <i class="fas fa-cogs"></i>
                    </div>
                </div>
            </div>
            <div class="solution-list-item">
                <div class="solution-item-box">
                    <h4 style="text-transform: uppercase;">Giao hành nhanh</h4>
                    <div class="solution-item-content">
                        <p>Giao hàng đến tận nơi bạn ở lắp đặt</p>
                        <i class="fas fa-box-open"></i>
                    </div>
                </div>
            </div>
            <div class="solution-list-item">
                <div class="solution-item-box">
                    <h4 style="text-transform: uppercase;">Nhiều cấu hình cực khủng</h4>
                    <div class="solution-item-content">
                        <p>Công nghệ tạo mẫu nhanh, chế tác Mock-up hoàn thiện</p>
                        <i class="fas fa-keyboard"></i>
                    </div>
                </div>
            </div>
            <div class="solution-list-item">
                <div class="solution-item-box">
                    <h4 style="text-transform: uppercase;">Group Acodern</h4>
                    <div class="solution-item-content">
                        <p>Cộng đồng dành cho những ai yêu công nghệ</p>
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-company">
        <div class="company-title">
            <h1>GIÁ TRỊ CỐT LÕI CỦA 3.D.S</h1>
            <p>Thông điệp của CEO</p>
        </div>
        <div class="box-acodern">
            <div class="acodern-content">
                <img src="./image/gia-tri-cot-loi-Edit-3DS.jpg">
            </div>
        </div>
    </div>
    <div class="box-company-introduce">
        <div class="company-introduce">
            @if (count($postnewslimitone)==1)
                @foreach ($postnewslimitone as $postnewslimitoneitem)
                    <h1>{{$postnewslimitoneitem->title_postnews}}</h1>
                    <br>
                    {!!strip_tags($postnewslimitoneitem->description_postnews)!!}
                @endforeach
            @endif
        </div>
        <div class="company-about">
            <div class="about-title">
                <h4>Trao đổi yêu cầu trực tuyến</h4>
                <p>Hệ thống hỗ trợ khách hàng của chúng tôi sẽ phản hồi thông tin sớm nhất cho khách hàng. Quý khách hàng vui lòng gởi các thông tin cần hỗ trợ theo mẫu sau đây.</p>
            </div>
            <div class="about-form">
                <form>
                    <div class="form-left">
                        <input type="text" placeholder="Thông tin khách hàng" name="People">
                        <input type="text" placeholder="Tiêu đề" name="Subject">
                        <input type="text" placeholder="Email" name="Email">
                        <input type="text" placeholder="Điện thoại" name="PhoneNumber">
                    </div>
                    <div class="form-right">
                        <input type="text" placeholder="Hãy đặt câu hỏi quan tâm đến sản phẩm" name="Question" id="active_inputtext">
                        <input type="submit" name="submit" id="btn_submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="box-partner">
        <div class="partner-title">
            <h2>Đối tác liên kết với ACODERN</h2>
        </div>

        <div class="partner-items-img">
            @if (count($categorysupplierlimits))
            @foreach ($categorysupplierlimits as $categorysupplier)
            <div class="partner-item">
                <img src={{$categorysupplier->image_categorysupplier}}>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</div>
@endsection
    