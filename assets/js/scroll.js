$(function() {

	var elArray = new Array();

	$('.sidebar-breadcrumb').tooltip();

	getElementPositions();

	$(window).scroll(function(e){

		var currentPos = $(this).scrollTop();

		$.each(elArray, function(i, value){

			if ((currentPos >= value.offset - 50) && (currentPos <= value.offset + 50))
			{
				hideVisibleTooltips(value);
			}
		});
	});

	$('.cover-arrow').click(function(e){
		$('html, body').animate({
			scrollTop: $("#gallery-container").offset().top
		}, 500);
	});

	$('.sidebar-breadcrumb').click(function(e){

		e.preventDefault();
		var container = $(this).attr('data-target');
		var timer = getTimer(container);

		$('html,body').animate({
			scrollTop: $(container).offset().top
		}, timer);
	});

	function getElementPositions() {

		elArray = [];

		$("[data-nav='scrollElement']").each(function(){
			elArray.push({
				element:'#'+$(this).attr('id'),
				offset: $(this).offset().top
			});
		});
	}

	function getTimer(selector){

		var currentScroll = $('body').scrollTop();
		var scrollingTo = $(selector).offset().top;
		var timer = (currentScroll - scrollingTo);

		if(timer < 0)
		{
			timer = timer * -1;
		}

		if(timer > 1000)
		{
			timer = 1000;
		}

		return timer;
	}

	function hideVisibleTooltips(value) {

		var val = value;

		$('.sidebar-breadcrumb > .diamond-nav').each(function(i, value){
			//var toHide = $(this).attr('data-target');
			//if (toHide !== val.element)
			//{
				//$("[data-target='"+ toHide +"']").tooltip('hide');
			//}
			$(this).removeClass('diamond-active');
		});

		tooltipToggle(val);
	}

	function tooltipToggle(value) {

		var element = "[data-target='"+ value.element +"']";

		//if (! $('.sidebar-breadcrumb').next().hasClass('tooltip'))
		//{
			$(element+' > .diamond-nav').addClass('diamond-active');
			/*element.tooltip('show');

			setTimeout(function(){
				element.tooltip('hide');
			}, 1000);*/
		//}
	}
});