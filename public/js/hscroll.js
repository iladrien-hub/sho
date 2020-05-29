$(".vertical_grid").on("touchstart",".item",function(event){
	start =  event.originalEvent.touches[0].pageX;
	finish = ($(this).width() + 30) * $(this).parent(".vertical_grid").find(".item").length - 30 - $(".section_content").width()

}).on("touchmove",".item",function(event){
	$cur = event.originalEvent.touches[0].pageX

	$par = $(this).parent(".vertical_grid")

	$delta = $cur - start
	start = $cur
	$margin = parseInt($par.css("margin-left"))

	if ($margin+$delta > 0){
		$par.css("margin-left","0px")
		return;
	}
	if ($margin+$delta < -finish) {
		$par.css("margin-left",-finish+"px")
		return;
	}

	$par.css("margin-left",$margin+$delta+"px")
})