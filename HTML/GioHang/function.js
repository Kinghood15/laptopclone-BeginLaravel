// JavaScript Document
var _down=document.getElementById("btnDown");
var _up=document.getElementById("btnUp");
var _Soluong=document.getElementById("txtSoLuong");
var	_Thanhtien=document.getElementById("txtThanhTien").innerHTML;
var _totalPrice=0;
var _totalThanhTien=document.getElementById("txtTotalThanhTien");
var _thanhtient= parseFloat(_Thanhtien);
function getUpdate(){
	_totalPrice=_Soluong.value * parseFloat(_thanhtient);
	txtTotalThanhTien.innerHTML=_totalPrice+",000,000 Đ";
	txtTotalTien.innerHTML=_totalPrice+",000,000 Đ";
	
}
function getClickUp(){
	if(_Soluong.value>=50){
		_Soluong.value=50;
		getUpdate();
	}
	else{
		_Soluong.value++;
		getUpdate();
	}
}
function getClickDown(){
	if(_Soluong.value<2){
		_Soluong.value=1;
		getUpdate();
	}
	else{
		_Soluong.value--;
		getUpdate();
	}
}
