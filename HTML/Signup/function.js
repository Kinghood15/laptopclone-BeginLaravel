// JavaScript Document
var _check=document.getElementById("checkbox_pass");
var _checkPass=document.getElementById("txtPass");
var _checkComfirmPass=document.getElementById("txtConfirmPass");
function getCheck(){
	if(_check.checked==true){
		
		_checkPass.setAttribute("type","text");
		_checkComfirmPass.setAttribute("type","text");
		
	}
	else{
		_checkPass.setAttribute("type","password");
		_checkComfirmPass.setAttribute("type","password");
	}
}