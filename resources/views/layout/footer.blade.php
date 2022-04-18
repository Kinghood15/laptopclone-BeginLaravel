<div class="footer">
    <div class="footer-box">
        <div class="footer-left">
            <div class="left-logo">
                @if (count($postnewslimitoneLogo))
                    @foreach ($postnewslimitoneLogo as $logo)
                        <a href="/"><img src={{$logo->Image_postnew}}></a>
                    @endforeach                        
                @endif
            </div>
            <div class="left-contract">
                <h4>CÔNG TY TNHH ACODERN</h4>
                <p>Địa chỉ: 256 Hoàng Quốc Việt</p>
                <p>Tel: 19001001</p>
            </div>
        </div>
        <div class="footer-center">
            <div class="center-box-left">
                <h4>Sản phẩm</h4>
                <br>
                <p><a href="#">Tìm Nhanh</a></p>
                
            </div>
        </div>
        <div class="footer-right">
            <h4>Kết nối với chúng tôi</h4>
            <p><a href="#"><i class="fab fa-facebook"></i></a></p>
            <p><a href="#"><i class="fab fa-facebook-messenger"></i></a></p>
            <p><a href="#"><i class="fab fa-twitter"></i></a></p>
            <p><a href="#"><i class="fab fa-whatsapp"></i></a></p>
        </div>
        
    </div>
</div>