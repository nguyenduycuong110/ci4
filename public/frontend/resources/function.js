(function($) {
	"use strict";
	var HT = {}; // Khai báo là 1 đối tượng

	/* MAIN VARIABLE */

	var $window = $(window),
	    $document = $(document),
		$carousel = $(".owl-slide");
	    

	    // FUNCTION DECLARGE
	    $.fn.elExists = function() {
	        return this.length > 0;
	    };
		HT.carousel = () => {
			$carousel.each(function(){
				let _this = $(this);
				let option = _this.find('.owl-carousel').attr('data-owl');
				let owlInit = atob(option);
				owlInit = JSON.parse(owlInit);
				_this.find('.owl-carousel').owlCarousel(owlInit);
			});
			
		} 
		

	    
	    // Document ready functions
	    $document.on('ready', function() {
	    	HT.carousel();
	    });

	})(jQuery);
// form contact
$(document).on('click','.submit-form-contact', function(){
	let _this = $(this)
	let fullname = $('.minh-fullname-contact').val()
	let email = $('.minh-email-contact').val()
	let phone = $('.minh-phone-contact').val()
	let check_phone = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	if (fullname.length == 0) {
		toastr.error('Họ và tên không được để trống!','Xin vui lòng thử lại!');
	} 
	else if(IsEmail(email) == false) {toastr.error('Định dạng Email không hợp lệ!','Xin vui lòng thử lại!')}
	else if(phone.length < 10 || check_phone.test(phone) == false) {
		toastr.error('Số điện thoại không hợp lệ!','Xin vui lòng thử lại!');
	}else{
		let form_URL = 'ajax/frontend/action/contact_full_4';
		$.post(form_URL, {
			fullname : fullname,email : email,phone : phone
		},
		function(data){
			if(data.trim() == 'success'){
				toastr.success('Thành công','Bạn đã gửi yêu cầu thành công, chúng tôi sẽ liên hệ với bạn sớm nhất!');
			}else{
				toastr.error('An error occurred!','Xin vui lòng thử lại!');
			}
		});
	}
	return false;
})
function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!regex.test(email)) {
		return false;
	} else {
		return true;
	}
}
$(window).scroll(function() {
	if($(this).scrollTop() > 50) $('#goTop').stop().animate({ bottom: '100px' }, 200);
	else $('#goTop').stop().animate({ bottom: '-60px' }, 200);
});
$(document).ready(function() {
	$('#goTop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: 0},500);
	});
});
$('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})
