(function ($) {
  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
  }

  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1);
      if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
  }
  var cookie = getCookie('shown_ad');
  if (!cookie) {
    showPopup();
  }

  function showPopup() {
    setCookie('shown_ad', 'true', 365);
    jQuery('#popup').modal('show');
  }
  jQuery(document).on('click','#popup .close',function(e){
    jQuery('#popup').modal('hide');
  });
$(document).on('click','.category',function() {
 	$('.videos-section').addClass('d-none');
	$("."+$(this).attr('id')).removeClass('d-none');
});
$("ul li.upsc").hover(function () {
    $(this).children("ul.upscd").slideDown('fast');
}, function () {
    $(this).children("ul.upscd").slideUp('slow');
});

$(document).on('click','.chap',function() {
  $(this).parents('.videos-contwrap').find('.sub-categories').addClass('d-none');
	$("."+$(this).attr('id')).removeClass("d-none");
  $(this).parents('.videos-contwrap').find(".active").removeClass("active");
  $(this).parents('li').addClass("active");
  $(this).addClass("active");
});

// .chapter ul li:after

	$(window).on('load', function () {
	  if ($('.loader').length) {
	    $('.loader').delay(100).fadeOut('slow', function () {
	      // $(this).remove();
	    });
	  }
	});
	$(document).on('click','.nav-item a',function() {
    $('html,body').animate({scrollTop: $($(this).attr('href')).offset().top},'slow');
    return false;
	});
	function validate_email(email){
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 		if (re.test(String(email).toLowerCase())){
    	return (false)
  	}
    return (true)
	}

	$(document).on('click','#contact_submit',function() {
		var contact_name = $('#contact_name').val();
		var phone =  $('#phone').val();
		var email = $('#email').val();
		var message = $('#message').val();
		var error = false;
		if (contact_name.length<3) {
			$('#contact_name_error').show();
			error = true;
		}else{
			$('#contact_name_error').hide();
		}
		if (phone.length!=10 ) {
			$('#phone_error').show();
			error = true;
		}else{
			$('#phone_error').hide();
		}
		if (email.length<3 || validate_email(email) ) {
			$('#mail_error').show();
			error = true;
		}else{
			$('#mail_error').hide();
		}
		if (message.length<3) {
			$('#message_error').show();
			error = true;
		}else{
			$('#message_error').hide();
		}
		var _wpnonce= $("form #home_contact_nonce").val(); 
    var _wp_http_referer= $("form input[name=_wp_http_referer").val(); 
    if (!error) {
    	$('.loader').delay(100).fadeIn('slow');
	    $.ajax({
		    type: "POST",
		    url: base_url+'ajax',
		    data:{
		      action:'contact',
		      contact_name:contact_name,
		      email :email,
		      phone:phone,
		      message:message,
		      _wpnonce:_wpnonce,
		      _wp_http_referer:_wp_http_referer,
		    },
		    success : function(response) {
		    	$('.loader').delay(100).fadeOut('slow');
		      if (response == 'success') {
		        $(".loader").fadeOut("slow");
		        $("form #contact_name").val(''); 
		        $("form #email").val(''); 
		        $("form #phone").val(''); 
		        $("form #message").val('');
		        $("#toast").text("Thank you for contacting us.").addClass('show');
		        setTimeout(function(){ $('#toast').removeClass('show').text(''); }, 3000);
		      }
		    },
		    error : function(jqXHR, textStatus, errorThrown){
		    	$('.loader').delay(100).fadeOut('slow');
		      console.log(errorThrown);
		    }
		  });
	  }
	  return false;
	});
	$(document).on('click','#register_submit',function() {
		var contact_name = $('#contact_name').val();
		var phone =  $('#phone').val();
		var email = $('#email').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
		var error = false;
		if (contact_name.length<3) {
			$('#contact_name_error').show();
			error = true;
		}else{
			$('#contact_name_error').hide();
		}
		if (phone.length!=10 ) {
			$('#phone_error').show();
			error = true;
		}else{
			$('#phone_error').hide();
		}
		if (subject.length<3 ) {
			$('#subject_error').show();
			error = true;
		}else{
			$('#subject_error').hide();
		}
		if (email.length<3 || validate_email(email) ) {
			$('#mail_error').show();
			error = true;
		}else{
			$('#mail_error').hide();
		}
		if (message.length<3) {
			$('#message_error').show();
			error = true;
		}else{
			$('#message_error').hide();
		}
		var _wpnonce= $("form #home_contact_nonce").val(); 
    var _wp_http_referer= $("form input[name=_wp_http_referer").val(); 
    if (!error) {
    	$('.loader').delay(100).fadeIn('slow');
	    $.ajax({
		    type: "POST",
		    url: base_url+'ajax',
		    data:{
		      action:'register',
		      contact_name:contact_name,
		      email :email,
		      subject :subject,
		      phone:phone,
		      message:message,
		      _wpnonce:_wpnonce,
		      _wp_http_referer:_wp_http_referer,
		    },
		    success : function(response) {
		    	$('.loader').delay(100).fadeOut('slow');
		      if (response == 'success') {
		        $(".loader").fadeOut("slow");
		        $("form #contact_name").val(''); 
		        $("form #email").val(''); 
		        $("form #phone").val(''); 
		        $("form #subject").val(''); 
		        $("form #message").val('');
		        $("#toast").text("Thanks for registering with us.").addClass('show');
		        setTimeout(function(){ $('#toast').removeClass('show').text(''); }, 3000);
		      }
		    },
		    error : function(jqXHR, textStatus, errorThrown){
		    	$('.loader').delay(100).fadeOut('slow');
		      console.log(errorThrown);
		    }
		  });
	  }
	  return false;
	});
	$(document).on('click','#product_submit',function() {
		var contact_name = $('#contact_name').val();
		var phone =  $('#phone').val();
		var email = $('#email').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
		var error = false;
		if (contact_name.length<3) {
			$('#contact_name_error').show();
			error = true;
		}else{
			$('#contact_name_error').hide();
		}
		if (phone.length!=10 ) {
			$('#phone_error').show();
			error = true;
		}else{
			$('#phone_error').hide();
		}
		if (email.length<3 || validate_email(email) ) {
			$('#mail_error').show();
			error = true;
		}else{
			$('#mail_error').hide();
		}
		if (message.length<3) {
			$('#message_error').show();
			error = true;
		}else{
			$('#message_error').hide();
		}
		var _wpnonce= $("form #home_contact_nonce").val(); 
    var _wp_http_referer= $("form input[name=_wp_http_referer").val(); 
    if (!error) {
    	$('.loader').delay(100).fadeIn('slow');
	    $.ajax({
		    type: "POST",
		    url: base_url+'ajax',
		    data:{
		      action:'product',
		      contact_name:contact_name,
		      email :email,
		      subject :subject,
		      phone:phone,
		      message:message,
		      _wpnonce:_wpnonce,
		      _wp_http_referer:_wp_http_referer,
		    },
		    success : function(response) {
		    	$('.loader').delay(100).fadeOut('slow');
		      if (response == 'success') {
		        $(".loader").fadeOut("slow");
		        $("form #contact_name").val(''); 
		        $("form #email").val(''); 
		        $("form #phone").val(''); 
		        $("form #subject").val(''); 
		        $("form #message").val('');
		        $("#toast").text("Thanks for your interest in our product. We will get back to you soon.").addClass('show');
		        setTimeout(function(){ $('#toast').removeClass('show').text(''); }, 3000);
		      }
		    },
		    error : function(jqXHR, textStatus, errorThrown){
		    	$('.loader').delay(100).fadeOut('slow');
		      console.log(errorThrown);
		    }
		  });
	  }
	  return false;
	});
	$('.owl-carousel-event').owlCarousel({
		loop:true,
		lazyLoad:true,
		margin:0,
		autoplay:true,
		autoplayTimeout:5000,
		smartSpeed: 2000,
		touchDrag  : true,
		mouseDrag  : true,
		dots: false,
		nav: true,
		responsiveClass:true,
		responsive:{
			1366:{
				items:1,
			},
			1024:{
				items:1,
			},
			768:{
				items:1,
			},
			0:{
				items:1,
			}
		}
	})
})(jQuery);
