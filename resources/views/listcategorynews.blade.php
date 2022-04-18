@extends('layout.welcome')
@section('content')
<div class="slideshow-container">
    @if (count($postnewslimitslides))
        @foreach ($postnewslimitslides as $postnewslimititem)
            <a href={{'/tin-tuc/'.$postnewslimititem->id_categorynews.'/bai-viet/'.$postnewslimititem->id}}>
                <div class="mySlides fade">
                    <img src={{$postnewslimititem->Image_postnew}} style="width:100%; height:100%;">
                    <div class="text">{{$postnewslimititem->title_postnews}}</div>
                </div>
            </a>
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
<div class="box-list-news">
    @if (count($postnewsskip))
        @foreach ($postnewsskip as $postnewskip)
            <div class="box-news">
                <a href={{'/tin-tuc/'.$postnewskip->id_categorynews.'/bai-viet/'.$postnewskip->id}}>
                    <div class="box-news-left">
                        <img src={{$postnewskip->Image_postnew}} style="width:100%; height:100%;">
                    </div>
                    <div class="box-news-right">
                        <div class="box-title">
                            <p class="title-new">{{$postnewskip->title_postnews}}</p>
                        </div>
                        <div class="box-body">
                            <p class="sub-date-new">{{date("d/m/Y", strtotime($postnewskip->updated_at))}}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    @endif
</div>
@endsection