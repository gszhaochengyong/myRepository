(function($){
	console.log($.fn);
	$.fn.extend({
		//鼠标指向li和移出li的颜色变化方法 参数color代表移出时的颜色，如未设置就按默认cUn
		liColor:function(color){
			var cDefault="#cccccc";//鼠标不指向的默认色
			var cOn="red";//鼠标指向时
			var cUn=(color==undefined)?cDefault:color;
			$(this).find("li").each(function(){
				$(this).on("mouseover",function(){
					$(this).css("color",cOn);
				}).on("mouseout",function(){
					$(this).css("color",cUn);
				})
			});
			return $(this);

		}
	});
	$.extend({
		add:function(ele1,ele2){
			return parseInt(ele1)+parseInt(ele2);
		},
		subtract:function(ele1,ele2){
			return parseInt(ele1)-parseInt(ele2);
		}
	})
})(jQuery)