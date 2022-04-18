<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" charset="width=device-width,initial-scale=1.0">
<title>Giỏ hàng</title>
<link type="text/css" rel="stylesheet" href="./style.css">
<link rel="stylesheet" type="text/css" href="./fontawesome-free-5.15.2-web/css/all.css">
</head>

<body>
<div class="header">
		<div class="header-container">
			<div class="header-list-menu">
				<div class="header-application">
					<div class="box-application">
						<div class="application-contract">
							<div class="contract-email">
								<i class="fas fa-envelope"></i>
								<p>info@acodern.com</p>
							</div>
							<div class="contract-phone">
								<i class="fas fa-phone-alt"></i>
								<p>0338278163</p>
							</div>
						</div>
						<div class="application-signup">
							<div class="signup-signup">
								<a href="#">Đăng ký </a>
								<p>/</p>
								<a href="#">Đăng nhập</a>
							</div>
							<div class="signup-workingtime">
								<i class="fas fa-clock"></i>
								<p>8:00 - 17:00</p>
							</div>
						</div>
					</div>
				</div>
				<div class="header-menu-items">
					<div class="header-logo">
						<a href="../Trangchu/index.html">
							<img src="./image/LOGO-Ngang.png">
							<p>Giỏ hàng</p>
						</a>
					</div>
					<div class="box-search">
						<div class="search-in-btn">
							<button id="btn-search">Tìm kiếm</button>
							<input type="text" name="search" placeholder="Search">
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--- Container --->
	<div class="container">
		<div class="container-left">
			<div class="left-title">
				<h2>Sản phẩm</h2>
			</div>
			<div class="left-product">
				<div class="product-img">
					<img src="./image/CUBE CAMRY 600.png">
				</div>
				<div class="product-box">
					<h3>Máy in 3DCUBE CAMRY E600</h3>
					<div class="product-quantity">
						<p>Số lượng</p>
						<button id="btnDown" onClick="getClickDown()">&#45;</button>
						<input type="text" value="1" name="numberSoluong" id="txtSoLuong"> 
						<button id="btnUp" onClick="getClickUp()">&#43;</button>
						<span id="txtThanhTien">50,000,000 </span><p>	&ETH;</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-right">
			<div class="box-title">
				<h3>Tổng cộng</h3>
			</div>
			<div class="box-total">
				<div class="box-price">
					<p>Thành tiền</p>
					<p id="txtTotalThanhTien">50,000,000  &ETH;</p>
				</div>
				<div class="box-price">
					<p>Phí vận chuyển</p>
					<p>Free</p>
				</div>
				<div class="box-totalprice">
					<p>Tổng tiền: </p>
					<p id="txtTotalTien">50,000,000  &ETH;</p>
				</div>
				<button id="btnPrice">Thanh toán cho khách hàng</button>
				<button id="btnVipPrice">Thanh toán cho thành viên</button>
			</div>
		</div>
		<script type="application/javascript" src="./function.js"></script>
	</div>
	<!-- Footer -->
	<div class="footer">
		<div class="footer-box">
			<div class="footer-left">
				<div class="left-logo">
					<img src="./image/LOGO-Ngang.png">
				</div>
				<div class="left-contract">
					<h4>CÔNG TY TNHH ACODERN</h4>
					<p>Địa chỉ: 101 W Nueva St, San Antonio, TX 78205, United States</p>
					<p>Tel: 19001001</p>
				</div>
			</div>
			<div class="footer-center">
				<div class="center-box-left">
					<h4>Sản phẩm</h4>
					<br>
					<p><a href="#">Tìm Nhanh</a></p>
					<p><a href="#">Máy Quét 3D</a></p>
					<p><a href="#">Máy In 3D</a></p>
					<p><a href="#">Vật Liệu In 3D</a></p>
					<p><a href="#">Phần Mềm Cơ Khí</a></p>
					<p><a href="#">Thiết bị cho thuê</a></p>
				</div>
				<div class="center-box-right">
					<h4>Dich vụ</h4>
					<br>
					<p><a href="#">Thiết Kế Kiểu Dáng Công Nghiệp</a></p>
					<p><a href="#">In 3D | Mock up</a></p>
					<p><a href="#">Kiểm tra kích thước 2D 3D</a></p>
					<p><a href="#">Dịch vụ Scan 3D – Quét mẫu 3D</a></p>
					<p><a href="#">Dịch Vụ Thiết Kế Ngược</a></p>
					<p><a href="#">Thiết Kế Khuôn Chính Xác</a></p>
				</div>
			</div>
			<div class="footer-right">
				<h4>Kết nối với chúng tôi</h4>
				<p><a href="#"><i class="fab fa-facebook"></i></a></p>
				<p><a href="#"><i class="fab fa-facebook-messenger"></i></a></p>
				<p><a href="#"><i class="fab fa-twitter"></i></a></p>
				<p><a href="#"><i class="fab fa-whatsapp"></i></a></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>
