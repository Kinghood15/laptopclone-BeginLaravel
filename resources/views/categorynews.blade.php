@extends('layout.welcome')
@section('content')

<div class="Title-container">
    @if (count($categorynewbyid))
        @foreach ($categorynewbyid as $categorynew)
             <p style="color: black; width:100%;height:100px;text-align:center; display:flex; justify-content:center; align-items:center; font-weight:bold; font-size:40px;">{{$categorynew->name_categorynew}}</p>
        @endforeach
    @endif
</div>
<br>
<div class="box-list-news">
    @if (count($postnewbyid))
        @foreach ($postnewbyid as $postnewskip)
            <div class="box-news">
                <a href={{'/tin-tuc/'.$postnewskip->id_categorynews.'/bai-viet/'.$postnewskip->id}}>
                    <div class="box-news-left">
                        <img src={{$postnewskip->Image_postnew}} style="width:100%; height:100%;">
                    </div>
                    <div class="box-news-right">
                        <div class="box-title-newspaper">
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