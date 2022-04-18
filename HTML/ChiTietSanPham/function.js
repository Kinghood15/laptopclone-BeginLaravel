// JavaScript Document
var _down=document.getElementById("btnDown");
var _up=document.getElementById("btnUp");
var _Soluong=document.getElementById("txtSoLuong");
function getClickUp(){
	if(_Soluong.value>=50){
		_Soluong.value=50;
	}
	else{
		_Soluong.value++;
	}
}
function getClickDown(){
	if(_Soluong.value<2){
		_Soluong.value=1;
	}
	else{
		_Soluong.value--;
	}
}
var _GioHang=document.getElementById("txtGioHang");
var _totalGioHang=0;
function getClickGioHang(){
	_totalGioHang=parseInt(parseInt(_GioHang.innerHTML)+parseInt(_Soluong.value));
	_GioHang.innerHTML=_totalGioHang
}