

(function($){$.fn.aliziScroll=function(options){var defaults={speed:40,rowHeight:24};var opts=$.extend({},defaults,options),intId=[];function marquee(obj,step){obj.find("ul").animate({marginTop:"-=1"},0,function(){var s=Math.abs(parseInt($(this).css("margin-top")));if(s>=step){$(this).find("li").slice(0,1).appendTo($(this));$(this).css("margin-top",0)}})}this.each(function(i){var sh=opts["rowHeight"],speed=opts["speed"],_this=$(this);intId[i]=setInterval(function(){if(_this.find("ul").height()<=_this.height()){clearInterval(intId[i])}else{marquee(_this,sh)}},speed);_this.hover(function(){clearInterval(intId[i])},function(){intId[i]=setInterval(function(){if(_this.find("ul").height()<=_this.height()){clearInterval(intId[i])}else{marquee(_this,sh)}},speed)})})}})(jQuery);
function alizibdnum(amount){
	var quantiryInput = $("input[name=bdnum]");
	var num   = parseInt(quantiryInput.val());
	var price = parseFloat($('input[name=item_price]').val());
	var shippingPrice = parseFloat($('input[name=shipping_price]').val());
	shippingPrice = isNaN(shippingPrice)?0:shippingPrice;
	
	num = (isNaN(num) || num<0)?1:num;
	var totalNum = (amount+num)<1?1:(amount+num);
	var totalPrice = price*totalNum*100/100+shippingPrice;
	$("input[name=bdprice]").val(totalPrice);
	quantiryInput.val(totalNum);
	$(".alizi-total-price").html(totalPrice);
}
function aliziCart(id){
	var bdnum = parseInt($('input[name=bdnum]').val()),shoppingCart=$('.shoppingcart-num');
	shoppingCart.text(parseInt(shoppingCart.text())+bdnum);
}
$(function(){
	$('.alizi-clproduct-params').bind('click', function() {
	  var _this=$(this),price = _this.attr('alizi-price'),params = _this.attr('alizi-title'),cls='active';
	  _this.addClass(cls).siblings().removeClass(cls);
	  $("input[name=item_price]").val(price);
	  $("input[name=bdproduct]").val(params);
	  alizibdnum(0)
	});
	$('.alizi-product-params').bind('click', function() {
	  var _this=$(this),params = _this.attr('alizi-title'),cls='active';
	  _this.addClass(cls).siblings().removeClass(cls);
	  	  $("input[name=bdproducta]").val(params);
	  alizibdnum(0)
	});
	$('.search_button').click(function(){
		$('.search_submit').show();
		$('.search_input').show().animate({width:'100%'}).focus();
	})
	$('.search_input').blur(function(){
		$(this).animate({width:'0'},500,function(){ $(this).hide();$('.search_submit').hide();});
	})
})