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

	$('#submit_comments').click(function(e){
		e.preventDefault();

		var params = $('.comment-form').serializeArray();	

		var formIsValid = validateFormElements(params);

		if (formIsValid)
		{
			$.ajax({
			  type: "POST",
			  url: "/assets/php/comments.php",
			  data: params  
			}).done(function(data){
				
			});
		}		
	});

	function validateFormElements (params) {

		var validation = [];

		for (var i in params)
		{
			if (params[i].name == "email")
			{
				if (!validateEmail(params[i].value))
				{
					validation.push($('#'+params[i].name));
				}
			}
			else
			{
				if (!validateText(params[i].value))
				{
					validation.push($('#'+params[i].name));	
				}
			}			
		}

		if (validation.length > 0)
		{
			highlightErrors(validation);
			return false;
		}

		return true;
	}

	function highlightErrors(elements) {

		for (var i in elements)
		{	
			console.log(elements[i].parent());
			elements[i].parent().addClass('has-error');
		}
	}

	function validateEmail (email) {

		var rE = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$");

		return rE.test(email);
	}

	function validateText (value) {
		console.log(value);
		if (value.length > 0)
		{
			return true;
		}

		return false;
	}

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
			$(this).removeClass('diamond-active');
		});

		tooltipToggle(val);
	}

	function tooltipToggle(value) {

		var element = "[data-target='"+ value.element +"']";
		$(element+' > .diamond-nav').addClass('diamond-active');			
	}


});