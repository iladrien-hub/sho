function findCommonParent($el,$selector) {
	$par = $el.parent()
	while( $par.find($selector).length == 0 ){
		$par = $par.parent()
	}
	return $par
}

function setTab($tab) {
	$par = findCommonParent($tab,".tabs_items")
	$items = $par.find(".tabs_items")
	$items.find('.active').removeClass('active')
	$items.find('.item:nth-child('+$tab.text()+')').addClass('active')
	$par.find(".right_about").text($items.find('.active').find(".descr").text())
	$par.find(".right_head").find(".name").text($items.find('.active').find(".name").text())
}

$(".tab").click(function() {
	if ($(this).hasClass('active'))
		return;
	setTab($(this))
	$(this).parent().find('.tab').removeClass('active')
	$(this).addClass('active')
});

$('.tabs_right').click(function(){
	$cur = $(this).parent().find('.active')
	if ($cur.next().hasClass('tab')) {
		setTab($cur.next())
		$cur.removeClass('active')
		$cur.next().addClass('active')
	}
});

$('.tabs_left').click(function(){
	$cur = $(this).parent().find('.active')
	if ($cur.prev().hasClass('tab')) {
		setTab($cur.prev())
		$cur.removeClass('active')
		$cur.prev().addClass('active')
	}
});

$(document).ready(function() {
	$elements = $(".tabs_items");
    $elements.find(".item:first-child").addClass("active");
	for (i = 0; i < $elements.length; i += 1) {
		$el = $(".tabs_items:nth-child("+(i+1)+")")
		$par = findCommonParent($el,".right_about")
		$par.find(".right_about").text($el.find(".active").find(".descr").text())
		$par.find(".right_head").find(".name").text($el.find('.active').find(".name").text())
	}
});
