// JavaScript Document
var products=[
	{
		id: 1,
		name: "Máy in 3DCUBE CAMRY E600",
		content: "Máy in 3DCUBE CAMRY E600 dòng máy in 3D được thiết kế riêng dành cho doanh nghiệp, khả năng tạo mẫu vật thể chuyên nghiệp có kích thước lớn lên đến 600mm x 600mm x 600mm.",
		img: "./image/CUBE CAMRY 600.png"	
	},
	{
		id: 2,
		name: "Máy in 3DCUBE ALTIS 500",
		content: "Máy in 3DCUBE ALTIS 500 dòng máy in 3D được thiết kế riêng dành cho doanh nghiệp, khả năng tạo mẫu vật thể chuyên nghiệp có kích thước lớn lên đến 500mm x 500mm x 500mm.",
		img: "./image/CUBE ALTIS 500.png"
		
	},
	{
		id: 3,
		name: "Máy in 3DCUBE VIOS E400",
		content: "Máy in 3DCUBE VIOS E400 dòng máy in 3D được thiết kế riêng dành cho doanh nghiệp, khả năng tạo mẫu vật thể chuyên nghiệp có kích thước lớn lên đến 400mm x 400mm x 400mm.",
		img: "./image/CUBE ALTIS 500.png"
		
	},
	{
		id: 4,
		name: "Máy in 3DCUBE WIGO 300",
		content: "Máy in 3DCUBE WIGO 300 dòng máy in 3D được thiết kế dành cho người dùng cá nhân, gia đình và trường học. Khả năng tạo mẫu vật thể chuyên nghiệp có kích thước 300mm x 300mm x 300mm.",
		img: "./image/CUBE WIGO 300.png"
		
	}
			];

function getName(index){
	var _NameProduct=document.getElementById("txtNameProduct");
	_NameProduct.innerHTML='<h3>' + products[index].name + '</h3>';
	var _ImgProduct=document.getElementById("imageProduct");
	_ImgProduct.setAttribute('src',products[index].img);
	var _ContentProduct=document.getElementById("contentProduct");
	_ContentProduct.innerHTML= products[index].content ;
	console.log("Check");
}
document.getElementById("video").play();
var _GioHang=document.getElementById("txtGioHang");
var _totalGioHang=0;
function getClickGioHang(){
	_totalGioHang=parseInt(_GioHang.innerHTML)+1;
	_GioHang.innerHTML=_totalGioHang;
}