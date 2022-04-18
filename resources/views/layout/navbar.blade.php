
<div class="list-items-item">
    <ul>
        <li class="box-item-navbar">
            <div class="box-title-item-navbar">
                <a href="/">Trang chủ</a>
            </div>
        </li>
        <li class="box-item-navbar">
            <div class="box-context-item-navbar">
                <div class="box-title-item-navbar">
                    <a href="/tin-tuc">Tin tức </a>
                    <i class="fas fa-sort-down"></i>
                </div>
                <ul id="item-listmenu">
                    @if (count($categorynews))
                        @foreach ($categorynews as $categorynew)
                            <li>
                                <a href={{'/tin-tuc/'.$categorynew->id}}>
                                    <p>{{ $categorynew->name_categorynew }} </p>
                                </a>
                            </li>
                        @endforeach
                    @endif  
                </ul>
            </div>
        </li>
        <li class="box-item-navbar">
            <div class="box-context-item-navbar">
                <div class="box-title-item-navbar">
                    <a href="/san-pham">Sản phẩm</a>
                </div>
            </div>
        </li>
    </ul>
</div>
