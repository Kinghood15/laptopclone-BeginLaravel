
<div class="header">
    <div class="header-container">
        @include('layout.topheader')
        <div class="header-list-menu">
            <div class="header-menu-items">
                <div class="header-logo">
                    @if (count($postnewslimitoneLogo))
                        @foreach ($postnewslimitoneLogo as $logo)
                            <a href="/"><img src={{$logo->Image_postnew}}></a>
                        @endforeach                        
                    @endif
                </div>
                <div class="header-list-items">
                    <div class="list-items-search">
                        <div class="search-in-btn">
                            <input type="text" name="search" placeholder="Search">
                            <button id="btn-search" href="/">Tìm kiếm</button>
                        </div>	
                  </div>
                @include('layout.navbar')
                </div>
                <div class="header-cart">
                    <div class="header-cart-box">
                        <a href="#">
                            <div class="header-box-item-logo"><i style="font-size: 15px; padding: 6px; color: white;" class="fas fa-shopping-cart"></i></div>
                            <div class="header-box-title">
                                <p>Giỏ hàng</p>
                                <p>0</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
