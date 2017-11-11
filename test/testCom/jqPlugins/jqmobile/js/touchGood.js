function touchGood(selectorAim){
	/*
	e.originalEvent.touches[0]
	e.originalEvent.changedTouches[0]
	*/
	var arrClientY=[];
	$(selectorAim).on('touchstart',function(e){
	arrClientY.push(e.originalEvent.changedTouches[0].clientY);
	});
	$(selectorAim).on('touchend',function(e){
		arrClientY=[];
	});
	$(selectorAim).on('touchmove',function(e){
		//console.log(e);
		e.preventDefault();
		arrClientY.push(e.originalEvent.changedTouches[0].clientY);
		$(document).scrollTop($(document).scrollTop()-(arrClientY[arrClientY.length-1]-arrClientY[arrClientY.length-2]));
	});
}