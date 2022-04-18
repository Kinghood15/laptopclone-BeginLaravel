// JavaScript Document
var imgList=['./image/may-in-3d-Ultimaker-S5.jpg','./image/Banner_EOS1920x600px-480x150.jpg','./image/Cetus-standard-mkii-make-it-happen-min.png','./image/cong-nghe-in-3d-la-gi.jpg'];
function ClickliEvent(index){
	let it =document.getElementById('imgSlide');
	it.setAttribute('src',imgList[index-1]);
	let _ul = document.getElementsByClassName('list_item_slide');
	let _li = _ul.getElementsByTagName('li');
	console.log(_li.length);
	for(let i=0;i< _li.length;i++){
		if(i==index-1){
			_li[i].setAttribute('id','active_color_slider');
			
		}else{
			_li[i].setAttribute('id','');
		}
	}
}