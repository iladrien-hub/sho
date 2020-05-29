function runAnimation(el, animation) {
	newone = el.clone(true);
	newone.css("animation",animation)
	// newone.removeAttr('style')
	el.before(newone);
	el.remove();
}

$(".slider_right").click(function(event) {

	var $prev = $(this).parent().find(".prev")
	$prev.removeClass('prev')
	runAnimation($prev,"left_fade_down 1s ease-in-out 1")

	var $active = $(this).parent().find(".active")
	$active.removeClass('active').addClass('prev')
	runAnimation($active,"fade_center_left 1s ease-in-out 1")

	var $next = $(this).parent().find(".next")

	if ($next.next().hasClass('item')) {
		$next.next().addClass('next')
		runAnimation($next.next(),"left_fade_up 1s ease-in-out 1")
	} else {
		$nxt = $(this).parent().find(".item:first")
		$nxt.addClass('next')
		runAnimation($nxt,"left_fade_up 1s ease-in-out 1")
	}


	$next.removeClass('next').addClass('active')
	runAnimation($next,"fade_right_center 1s ease-in-out 1")


});

$(".slider_left").click(function(event) {

	var $next = $(this).parent().find(".next")
	$next.removeClass('next')
	runAnimation($next,"left_fade_up reverse 1s ease-in-out 1")


	var $active = $(this).parent().find(".active")
	$active.removeClass('active').addClass('next')
	runAnimation($active,"fade_right_center reverse 1s ease-in-out 1")


	var $prev = $(this).parent().find(".prev")

	if ($prev.prev().hasClass('item')) {
		$prev.prev().addClass('prev')
		runAnimation($prev.prev(),"left_fade_down reverse 1s ease-in-out 1")
	} else {
		$prv = $(this).parent().find(".item:last")
		$prv.addClass('prev')
		runAnimation($prv,"left_fade_down reverse 1s ease-in-out 1")
	}

	$prev.removeClass('prev').addClass('active')
	runAnimation($prev,"fade_center_left reverse 1s ease 1")

});

$(document).ready(function () {
    $(".slider").find(".item:nth-child(1)").addClass('active');
    $(".slider").find(".item:nth-child(2)").addClass('next');
    $(".slider").find(".item:last-child").addClass('prev');
})
