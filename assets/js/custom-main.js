//home ban slider
var owl = jQuery('#srhbanslider');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:20,
    autoplay:false,
    autoplayTimeout:1900, 
    autoplayHoverPause:true,
    navText: ["<img src='./assets/images/banner-left.svg'>","<img src='./assets/images/banner-right.svg'>"],
     dots:true,
     nav: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
			loop:true
        },
        600:{
            items:1,
            nav:false,
			loop:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }

})

//choose a doctor
var owl = jQuery('#Chooseadoctorsec');
owl.owlCarousel({  
    loop:true,
    margin:10,
    autoplay:false,
    autoplayTimeout:1900,
    autoplayHoverPause:true,
    navText: [""],
     dots:true,
     nav: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1.2,   
			loop:true
        },
        600:{
            items:1,
            nav:false,
			loop:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }

})

//choose a doctorlist
var owl = jQuery('#Chooseadoctorsec-list');
owl.owlCarousel({  
    loop:false,
    margin:10,
    autoplay:false,
    autoplayTimeout:1900,
    autoplayHoverPause:true,
    navText: [""],
     dots:true,
     nav: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,   
			loop:false
        },
        600:{
            items:1,
            nav:false,
			loop:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }

})
//cardiologyslider
var owl = jQuery('#cardiologyslider');
owl.owlCarousel({loop:false,margin:10,autoplay:false,autoplayTimeout:1900,
autoplayHoverPause:true,navText: [""],dots:true,nav: true,responsiveClass:true,
responsive:{
0:{items:1, loop:false},
600:{items:1, nav:false, loop:false},
1000:{items:1, nav:true, loop:false}}})

//docexpspfee-slider
var owl = jQuery('#docexpspfee-slider');
owl.owlCarousel({loop:false,margin:10,autoplay:false,autoplayTimeout:1900,
autoplayHoverPause:true,navText: [""],dots:false,nav: false,responsiveClass:true,
responsive:{
0:{items:2.3, loop:false, margin:20},
400:{items:2.3, loop:false, margin:10},
600:{items:1, nav:false, loop:false},
1000:{items:1, nav:true, loop:false}}})


//Review Slider
var owl = jQuery('#reviewslider');
owl.owlCarousel({
    loop:false,
    margin:10,
    autoplay:false,
    autoplayTimeout:1900,
    autoplayHoverPause:true,
    navText: ["<img src='./assets/images/banner-left.svg'>","<img src='./assets/images/banner-right.svg'>"],
     dots:false,
     nav: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:4.5, 
            nav:false,
			loop:false
        },
        600:{
            items:1,
            nav:false,
			loop:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }

})
//contact Slider
var owl = jQuery('#contactussldr');
owl.owlCarousel({
    loop:false,
    margin:10,
    autoplay:false,
    autoplayTimeout:1900,
    autoplayHoverPause:true,
    navText: ["<img src='./assets/images/banner-left.svg'>","<img src='./assets/images/banner-right.svg'>"],
     dots:false,
     nav: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2.5, 
            nav:false,
			loop:false
        },
        600:{
            items:1,
            nav:false,
			loop:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }

})
//Review Slider individual-doc-slider
var owl = jQuery('#individualdocslider');
owl.owlCarousel({
    items:2,
    loop:true,
    margin:50,
    autoplay:false,
    autoplayTimeout:1900,
    autoplayHoverPause:true,
    navText: ["<img src='./assets/images/banner-left.svg'>","<img src='./assets/images/banner-right.svg'>"],
     dots:true,
     nav: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
			loop:true
        },
        600:{
            items:1,
            nav:false,
			loop:true
        },
        1000:{
            items:2,
            nav:true,
            loop:true
        }
    }

})

//sufferingslider
var owl = jQuery('#sufferingslider');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:50,
    autoplay:true,
    autoplayTimeout:1900,
    autoplayHoverPause:true,
    navText: ["<img src='./assets/images/banner-left.svg'>","<img src='./assets/images/banner-right.svg'>"],
     dots:true,
     nav: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
			loop:true
        },
        600:{
            items:1,
            nav:false,
			loop:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }

})

//video-con-slider
var owl = jQuery('#videoconslider');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1900,
    autoplayHoverPause:true,
    navText: ["<img src='./assets/images/banner-left.svg'>","<img src='./assets/images/banner-right.svg'>"],
     dots:true,
     nav: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            nav:false,
			loop:true
        },
        600:{
            items:1,
            nav:false,
			loop:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }

})

//doctorlist-name
var owl = jQuery('#doctorlist-name');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:false,
    autoplayTimeout:1900,
    autoplayHoverPause:true,
    navText: ["<img src='./assets/images/icons/angle-o-l.svg'>","<img src='./assets/images/icons/angle-o-r.svg'>"],
     dots:true,
     nav: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
			loop:true
        },
        600:{
            items:1,
            nav:false,
			loop:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }

})

var owl = jQuery('#doctorlist-name-cardiology');
owl.owlCarousel({
    items:1,loop:true,margin:10,autoplay:false,autoplayTimeout:1900,autoplayHoverPause:true,
    navText: ["<img src='./assets/images/icons/angle-o-l.svg'>","<img src='./assets/images/icons/angle-o-r.svg'>"],
     dots:true, nav: true,responsiveClass:true,
    responsive:{0:{items:1,nav:false,loop:true},600:{items:1,nav:false,loop:true},1000:{items:1,nav:true,loop:true}}
})

var owl = jQuery('#doctorlist-name-carsurgery');
owl.owlCarousel({
    items:1,loop:true,margin:10,autoplay:false,autoplayTimeout:1900,autoplayHoverPause:true,
    navText: ["<img src='./assets/images/icons/angle-o-l.svg'>","<img src='./assets/images/icons/angle-o-r.svg'>"],
     dots:true, nav: true,responsiveClass:true,
    responsive:{0:{items:1,nav:false,loop:true},600:{items:1,nav:false,loop:true},1000:{items:1,nav:true,loop:true}}
})

var owl = jQuery('#doctorlist-name-dermatology');
owl.owlCarousel({
    items:1,loop:true,margin:10,autoplay:false,autoplayTimeout:1900,autoplayHoverPause:true,
    navText: ["<img src='./assets/images/icons/angle-o-l.svg'>","<img src='./assets/images/icons/angle-o-r.svg'>"],
     dots:true, nav: true,responsiveClass:true,
    responsive:{0:{items:1,nav:false,loop:true},600:{items:1,nav:false,loop:true},1000:{items:1,nav:true,loop:true}}
})

var owl = jQuery('#doctorlist-name-diabetology');
owl.owlCarousel({
    items:1,loop:true,margin:10,autoplay:false,autoplayTimeout:1900,autoplayHoverPause:true,
    navText: ["<img src='./assets/images/icons/angle-o-l.svg'>","<img src='./assets/images/icons/angle-o-r.svg'>"],
     dots:true, nav: true,responsiveClass:true,
    responsive:{0:{items:1,nav:false,loop:true},600:{items:1,nav:false,loop:true},1000:{items:1,nav:true,loop:true}}
})

var owl = jQuery('#doctorlist-name-endocrinology');
owl.owlCarousel({
    items:1,loop:true,margin:10,autoplay:false,autoplayTimeout:1900,autoplayHoverPause:true,
    navText: ["<img src='./assets/images/icons/angle-o-l.svg'>","<img src='./assets/images/icons/angle-o-r.svg'>"],
     dots:true, nav: true,responsiveClass:true,
    responsive:{0:{items:1,nav:false,loop:true},600:{items:1,nav:false,loop:true},1000:{items:1,nav:true,loop:true}}
})

var owl = jQuery('#bookingtimechoose');
owl.owlCarousel({
    loop:false,margin:5,autoplay:false,autoplayTimeout:1900,autoplayHoverPause:true,
    navText: ["<img src='./assets/images/icons/angle-o-l.svg'>","<img src='./assets/images/icons/angle-o-r.svg'>"],
     dots:false, nav: false,responsiveClass:true,
    responsive:{0:{items:3.3,nav:false,loop:true},600:{items:2.3,nav:false,loop:false},1000:{items:6,nav:false}}
})  

//

//load more dashboard - consulation
$(function () {
		$(".lodrc").slice(0, 2).show();
		$("body").on('click touchstart', '.load-more', function (e) {
			e.preventDefault();
			$(".lodrc:hidden").slice(0, 3).slideDown();
			if ($(".lodrc:hidden").length == 0) {
				$(".load-more").css('visibility', 'hidden');
			}
			$('html,body').animate({
				scrollTop: $(this).offset().top
			}, 1000);
		});
	});
	
//load more dashboard - queries	
$(function () {
		$(".lodr").slice(0, 2).show();
		$("body").on('click touchstart', '.load-moreq', function (e) {
			e.preventDefault();
			$(".lodr:hidden").slice(0, 3).slideDown();
			if ($(".lodr:hidden").length == 0) {
				$(".load-moreq").css('visibility', 'hidden');
			}
			$('html,body').animate({
				scrollTop: $(this).offset().top
			}, 1000);
		});
	});
//load more dashboard - booking upcomming	
$(function () {
		$(".lodru").slice(0, 2).show();
		$("body").on('click touchstart', '.load-moreu', function (e) {
			e.preventDefault();
			$(".lodru:hidden").slice(0, 3).slideDown();
			if ($(".lodru:hidden").length == 0) {
				$(".load-moreu").css('visibility', 'hidden');
			}
			$('html,body').animate({
				scrollTop: $(this).offset().top
			}, 1000);
		});
	});

//load more dashboard - booking complete		
$(function () {
		$(".lodrco").slice(0, 2).show();
		$("body").on('click touchstart', '.load-moreco', function (e) {
			e.preventDefault();
			$(".lodrco:hidden").slice(0, 3).slideDown();
			if ($(".lodrco:hidden").length == 0) {
				$(".load-moreco").css('visibility', 'hidden');
			}
			$('html,body').animate({
				scrollTop: $(this).offset().top
			}, 1000);
		});
	});
//load more dashboard - booking cancel
$(function () {
		$(".lodrca").slice(0, 3).show();
		$("body").on('click touchstart', '.load-moreca', function (e) {
			e.preventDefault();
			$(".lodrca:hidden").slice(0, 3).slideDown();
			if ($(".lodrca:hidden").length == 0) {
				$(".load-moreca").css('visibility', 'hidden');
			}
			$('html,body').animate({
				scrollTop: $(this).offset().top
			}, 1000);
		});
	});	

// eye
$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
















//readmore
function myFunctionm() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("mymBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}