
$(document).ready(function() {
	'use strict';

	new UISearch( document.getElementById( 'sb-search' ) );	


//get the current time in unix timestamp seconds

var seconds = new Date().getTime() / 1000;

// var endTime = 'Your end time';


//Affix Navigation	
if($(".main-header").length > 0){			
	$('.main-header').affix({
		offset: {
			top: 20
		}
	});
}


if($(".tabs").length > 0){
	$(".tabs").tabs();
}

if($("#switch-tabs").length > 0){
	$('#switch-tabs').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true,   // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        activate: function(event) { // Callback function if tab is switched
        	var $tab = $(this);
        	var $info = $('#tabInfo');
        	var $name = $('span', $info);

        	$name.text($tab.text());

        	$info.show();
        }
       
    });
}

if($(".owl-team").length > 0){ 
	$('.owl-team').owlCarousel({
		items:1,
		loop:true,
		margin:20,
		dots:false,
		nav:true,
		navText:['',''],
		navSpeed:600,
		responsive:{
			320:{
				items:1
			},  
			480:{
				items:2
			},
			768:{
				items:3
			},	
			991:{
				items:3
			},
			1170:{
				items:3
			}
		}
	});
}

if($(".owl-sponsored").length > 0){ 
	$('.owl-sponsored').owlCarousel({
		items:1,
		loop:true,
		margin:20,
		dots:false,
		nav:true,
		navText:['',''],
		navSpeed:600,
		responsive:{
			320:{
				items:2
			}, 
			480:{
				items:3
			},
			768:{
				items:4
			},	
			991:{
				items:4
			},

			1170:{
				items:5
			}
		}
	});
}


if($(".owl-testimonial").length > 0){ 
	$('.owl-testimonial').owlCarousel({
		items:1,
		loop:true,
		margin:20,
		dots:false,
		nav:false,
		autoplay:true,
		navSpeed:600,
		responsive:{
			1170:{
				items:1
			}
		}
	});
}


/*serch*/




//Drop-Down Menu
$(".main-nav li,.main-nav .sub-menu li").hover(function (){
	$('a', this).addClass('current');
	$(this).children('ul').css({visibility: "visible", display: "none"}).slideDown(400);
}, function () {
	$('a', this).removeClass('current');
	$('ul', this).css({visibility: "hidden", display: "none"});
});

//moblie menu

$(".mobile-menu-icon").click(function(){

	$('.mobile-menu ul').slideToggle(400);  
});



/*datetimepicker8*/
$('.open').click(function(){
	$('.date_timepicker_start').datetimepicker('show');
})

$('.end').click(function(){
	$('.date_timepicker_end').datetimepicker('show');
})

$(function(){
	$('.date_timepicker_start').datetimepicker({
		format:'d/m/Y',
		onShow:function( ct ){
			this.setOptions({
				maxDate:$('.date_timepicker_end').val()?$('.date_timepicker_end').val():false
			})
		},

		timepicker:false
	});

	$('.date_timepicker_end').datetimepicker({
		format:'d/m/Y',
		onShow:function( ct ){
			this.setOptions({
				minDate:$('.date_timepicker_start').val()?$('.date_timepicker_start').val():false
			})
		},
		timepicker:false
	});
});


/*map*/
if($("#contact-map").length > 0){
	$("#contact-map").gmap3({
		marker:{
			latLng: [28.394857,84.124008],
			options:{
				draggable:true
			},
			events:{
				dragend: function(marker){
					$(this).gmap3({
						getaddress:{
							latLng:marker.getPosition(),
							callback:function(results){
								var map = $(this).gmap3("get"),
								infowindow = $(this).gmap3({get:"infowindow"}),
								content = results && results[1] ? results && results[1].formatted_address : "Nepal";
								if (infowindow){
									infowindow.open(map, marker);
									infowindow.setContent(content);
								} else {
									$(this).gmap3({
										infowindow:{
											anchor:marker, 
											options:{content: content}
										}
									});
								}
							}
						}
					});
				}
			}
		},
		map:{
			options:{
				zoom: 5
			}
		}
	});
}


// validate form on keyup and submit
$("#contactform").validate({
	rules: {
		contactname: {
			required: true,
			minlength: 2
		},
		email: {
			required: true,
			email: true
		},
		subject: {
			required: true,
			minlength: 2
		},
		message: {
			required: true,
			minlength: 10
		}
	},
	messages: {
		contactname: {
			required: "Please enter your name",
			minlength: jQuery.format("Your name needs to be at least {0} characters")
		},
		email: {
			required: "Please enter a valid email address",
			minlength: "Please enter a valid email address"
		},
		subject: {
			required: "You need to enter a subject!",
			minlength: jQuery.format("Enter at least {0} characters")
		},
		message: {
			required: "You need to enter a message!",
			minlength: jQuery.format("Enter at least {0} characters")
		}
	},
// set this class to error-labels to indicate valid fields
success: function(label) {
	label.addClass("checked");
},
submitHandler: function() {
	$('#contactform').prepend('<p class="loaderIcon"><img src="'+$('#base_url').val() +'themes/ipay/img/ajax-loader.gif" alt="Loading..."></p>');
	var name = $('input#contactname').val();
	var email = $('input#email').val();
	var subject = $('input#subject').val();
	var message = $('textarea#message').val();

	$.ajax({
		type: 'post',
		url: $('#base_url').value() + 'public/index.php/department/email',
                dataType : 'html',
		data: $('#form10').serialize(),
		success: function(results) {
			$('#contactform p.loaderIcon').fadeOut(1000);
			$('#contactform div.response').html(results);
		},
                error : function(XMLHttpRequest, textStatus, errorThrown){
                    alert('arror103');
                }
	});	

	$(':input','#contactform').not(':button, :submit, :reset, :hidden').val('');

}
});

/*slider-range*/
if($("#slider-range").length > 0){
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 100000,
		values: [ 20000, 90000],
		slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		" - $" + $( "#slider-range" ).slider( "values", 1 ) );
}

});


//video
if($("audio,video").length > 0){	
	$('audio,video').mediaelementplayer({
	    success: function(player, node) {
	        $('#' + node.id + '-mode').html('mode: ' + player.pluginType);
	    }
	});
}


