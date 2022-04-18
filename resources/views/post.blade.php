@extends('layout.welcome')

@section('content')
@if (count($postnewbyid))
    @foreach ($postnewbyid as $postnew)
        <div class="container-location">
            <a href="/"><p>Trang chủ</p></a>
            <p>	&gt;</p>
            @if (count($categorynewbyid))
                @foreach ($categorynewbyid as $categorynew)
                    <a href={{'/tin-tuc/'.$categorynew->id}}><p>{{$categorynew->name_categorynew}}</p></a>
                @endforeach
            @endif
            <p>	&gt;</p>
            <a href={{'/tin-tuc/'.$categorynew->id.'/'.$postnew->id}}><p>{{$postnew->title_postnews}}</p></a>
        </div>
        <div class="box-product-post">
            <div class="product-new">
                <div class="news-title">
                    <h2>{{$postnew->title_postnews}}</h2>
                </div>
                <div class="news-time">
                    <p><i class="fas fa-circle"></i> Tin tức </p>
                    <p> lúc <span>{{$postnew->created_at}}</span></p>
                    <p> bởi <span>An Alex Nguyễn</span></p>
                </div>
                <div class="news-share">
                    <a href="#"><p id="facebook-share"><i class="fab fa-facebook-f"></i> Facebook</p></a>
                    <a href="#"><p id="instagram-share"><i class="fab fa-instagram"></i> Instagram</p></a>
                    <a href="#"><p id="twitter-share"><i class="fab fa-twitter"></i> Twiter</p></a>
                    <a href="#"><p id="google-plus-share"><i class="fab fa-google-plus-g"></i> Google+</p></a>
                    <a href="#"><p id="linkedin-share"><i class="fab fa-linkedin"></i> Linkedin</p></a>
                </div>
                <div class="news-content">
                    {!!htmlspecialchars_decode($postnew->description_postnews)!!}
                </div>
            </div>
            <div class="product-right">
                <div class="right-ads">
                    <div class="ads-box">
                        <a href="#"><img src="./image/sidebar_Form3.jpg"></a>
                    </div>
                    <div class="ads-box">
                        <a href="#"><img src="./image/Banenr_Pro-HD_400x333px.jpg"></a>
                    </div>
                    <div class="ads-box">
                        <a href="#"><img src="./image/Banner_Slide_Mastercam.jpg"></a>
                    </div>
                    <div class="ads-box">
                        <a href="#"><img src="./image/tJh5xLe.gif"></a>
                    </div>
                </div>
                <div class="right-service">
                    <div class="news-heading1-title">
                        <h3>Dịch vụ</h3>
                    </div>
                    <div class="service-box">
                        <p><a href="#">Tạo mẫu nhanh</a></p>
                    </div>
                    <div class="service-box">
                        <p><a href="#">DỊCH VỤ Laptop</a></p>
                    </div>
                    <div class="service-box">
                        <p><a href="#">THIẾT KẾ KIỂU DÁNG</a></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach 
@endif
@endsection