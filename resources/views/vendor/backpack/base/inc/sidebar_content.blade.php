<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item nav-dropdown open'>
    <a class='nav-link nav-dropdown-toggle' href='{{ backpack_url('categorynews') }}'>Danh mục tin tức</a>
    <ul class='nav-dropdown-items'>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('categorynews') }}'><i class="nav-icon  la la-newspaper-o"></i></i>Thêm danh mục tin tức</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('postnews') }}'><i class="nav-icon  la la-gift"></i></i>Bài viết về tin tức, khuyến mại</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('postproducts') }}'><i class="nav-icon  la la-newspaper-o"></i></i>Bài viết về sản phẩm</a></li>
    </ul>
</li>
<li class='nav-item nav-dropdown open'>
    <a class='nav-link nav-dropdown-toggle' href='{{ backpack_url('categoryproducts') }}'>Danh mục sản phẩm</a>
    <ul class='nav-dropdown-items'>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('categoryproducts') }}'><i class='nav-icon la la-laptop'></i>Thêm danh mục sản phẩm</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('categorylaptops') }}'><i class='nav-icon la la-laptop'></i>Danh mục laptop</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('categorysuppliers') }}'><i class='nav-icon la la-laptop'></i>Danh mục đối tác</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('products') }}'><i class='nav-icon la la-laptop'></i>Sản phẩm</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('imageproducts') }}'><i class='nav-icon la la-image'></i>Hình ảnh sản phẩm</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('orderproducts') }}'><i class='nav-icon la la-shopping-cart'></i>Sản phẩm đặt hàng</a></li>
    </ul>
</li>
{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('categorylaptop') }}'><i class='nav-icon la la-laptop'></i> Danh mục laptop </a></li> --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>

