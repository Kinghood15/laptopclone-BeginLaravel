<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" charset="width=device-width;initial-scale=1.0;">
<title>Đăng ký</title>
<link type="text/css" rel="stylesheet" href="./style.css">
<link rel="stylesheet" type="text/css" href="./fontawesome-free-5.15.2-web/css/all.css">
</head>
<body>
	<!--Header--->
	<div class="header">
		<div class="header-container">
			<div class="header-list-menu">
				<div class="header-menu-items">
					<div class="header-logo">
						<a href="../Trangchu/index.html">
							<img src="./image/LOGO-Ngang.png">
							<p>Đăng ký</p>
						</a>
					</div>
					<div class="header-cart">
						<div class="header-cart-box">
							<div class="header-box-title"><a href="#">Cần trợ giúp <i class="far fa-question-circle"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!---Container--->
	<div class="container">
		<div class="container_box">
			<div class="container_box_left">
				<div class="container-logo">
					<img src="image/Asset 2.png">
				</div>
				<div class="container-form">
					<form>
						<input type="text" name="firstname" placeholder="Họ" id="firstname">
						<input type="text" name="lastname" placeholder="Tên" id="lastname">
						<input type="text" name="username" placeholder="Tên người dùng" id="username">
						<input type="text" name="numberphone" placeholder="Số điện thoại" id="phone">
						<input type="password" name="password" placeholder="Mật khẩu" id="txtPass">
						<input type="password" name="confirmpassword" placeholder="Xác nhận mật khẩu" id="txtConfirmPass">
						<input type="checkbox" name="showpass" id="checkbox_pass" onClick="getCheck()">
						<label >Hiện thị mật khẩu</label>
						<script type="application/javascript" src="./function.js"></script>
						<input type="submit" value="Đăng ký" name="submit" id="submit-signup">
					</form>
					<div class="clear"></div>
				</div>
			</div>
			<div class="container_box_right">
				<img src="image/account.svg">
			</div>

		</div>
	</div>
	<!--Footer-->
	<div class="footer">
		<div class="footer-box">
			<div class="footer-left">
				<div class="left-logo">
					<img src="image/LOGO-Ngang.png">
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
