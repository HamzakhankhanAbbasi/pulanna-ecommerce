

// BANNER SLIDER

var swiper = new Swiper(".banner-slider", {
	spaceBetween: 0,
	loop:true,
	pagination: {
		el: ".banner-slider .swiper-pagination",
		clickable: true,
	},
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
});


// INDEX SEC 2 SLIDER

var swiper = new Swiper(".category-slider", {
	slidesPerView: 7,
	spaceBetween: 20,
	freeMode: false,
	loop:true,
	navigation: {
		nextEl: ".slide-mover .next",
		prevEl: ".slide-mover .prev",
	},
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	breakpoints: {
		300: {
			slidesPerView: 1,
		},
		380	: {
			slidesPerView: 2,
		},
		575: {
			slidesPerView: 3,
		},
		991: {
			slidesPerView: 4,
		},
		1160: {
			slidesPerView: 5,
		},
		1600: {
			slidesPerView: 7,
		}
	},
});


var swiper = new Swiper(".sellerSlider", {
	slidesPerView: 4,
	spaceBetween: 25,
	loop:true,
	navigation: {
		nextEl: ".slide-mover .next",
		prevEl: ".slide-mover .prev",
	},
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
		},
		600: {
			slidesPerView: 2,
		},
		800: {
			slidesPerView: 3,
		},
		1600: {
			slidesPerView: 4,
		}
	},
});



// LOGIN SIGNUP FORM
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const login_wrap = document.getElementById('login-modal-wrap');

signUpButton.addEventListener('click', () => {
	login_wrap.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	login_wrap.classList.remove("right-panel-active");
});


// $("#cat-dropdwon").click(function(){
// 	$(".left-cat-list ul").slideToggle("active");
// });





$(document).ready(function(){

	// HEADER CATEGORY BOX
	$(".index-pg-wrap").prev(".gen-banner").addClass("index-nav");


	$(".index-nav .left-cat-list ul").show();
	$("#cat-dropdwon").click(function(){
		$(".left-cat-list ul").slideToggle();
		$(".left-cat-list ul").addClass("add-style");
	});


	//RESPONSIVE TOGGLE

	$(".menu-toggle").click(function(){
		$(".top-navigation-bar").toggleClass("active");
	});
	$("#close-cross").click(function(){
		$(".top-navigation-bar").removeClass("active");
	});

	// SIDE BAR CATEGORY (SUB CATEGORY LIST)

	$(".cat-list-items .list-item").click(function (e) {
		$(this).toggleClass("active");
		$(this).next(".sub-cat-list").slideToggle();
		$(".cat-list-items").toggleClass("remove");
	});

	// SIDE BAR CATEGORY TOGGLE

	$(".filter-toggle").click(function(){
		$(".cat-left-col").toggleClass("active");
		$('body').toggleClass("deactive");
	});

	$(".cat-left-col .close-cross").click(function () {
		$(".cat-left-col").removeClass("active");
		$('body').removeClass("deactive");
	});



	//PRODUCT QUANTITY SELECT INPUT
	$(document).ready(function(){
		$('.count').prop('disabled', false);
		$(document).on('click','.plus',function(){
			$(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
		});
		$(document).on('click','.minus',function(){
			$(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
			if ($(this).siblings('.count').val() == 0) {
				$(this).siblings('.count').val(1);
			}
		});
	});
});


// payments methods 

var selector = '.payment-card';
$(selector).on('click', function(){
	$(selector).removeClass('active');
	$(this).addClass('active');
});

// Product Slider

var swiper = new Swiper(".product-detail-slide", {
	spaceBetween: 10,
	slidesPerView: 4,
	loop: true,
	watchSlidesProgress: true,
});
var swiper2 = new Swiper(".product-detail-slide-2", {
	spaceBetween: 10,
	loop: true,
	thumbs: {
		swiper: swiper,
	},
});




// Related Products Slider
var swiper = new Swiper(".related-product-slider", {
	spaceBetween: 10,
	slidesPerView: 2,
	loop:true,
	navigation: {
		nextEl: ".related-product-slider-wrap .next",
		prevEl: ".related-product-slider-wrap .prev",
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
		},
		600: {
			slidesPerView: 2,
		},
		1250: {
			slidesPerView: 1,
		}
	},
});

// Similar Item Slider
var swiper = new Swiper(".similar-items-slider", {
	spaceBetween: 10,
	slidesPerView: 5,
	loop:true,	
	navigation: {
		nextEl: ".similar-items-slider-wrap .next",
		prevEl: ".similar-items-slider-wrap .prev",
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
		},
		600: {
			slidesPerView: 2,
		},
		800: {
			slidesPerView: 3,
		},
		1160: {
			slidesPerView: 4,
		},
		1600: {
			slidesPerView: 5,
		}
	},
});


// PRODUCT DETAIL PRICE RANGE FILTER

var keypressSlider = document.querySelector(".slider-keypress");
var input0 = document.querySelector(".input-with-keypress-0");
var input1 = document.querySelector(".input-with-keypress-1");
var inputs = [input0, input1];

noUiSlider.create(keypressSlider, {
	start: [1, 50],
	connect: true,
	step: 1,
	range: {
		min: [1],
		max: [50]
	}
});


/* end Inputs  */
keypressSlider.noUiSlider.on("update", function(values, handle) {
	inputs[handle].value = values[handle];

	/* begin Listen to keypress on the input */
	function setSliderHandle(i, value) {
		var r = [null, null];
		r[i] = value;
		keypressSlider.noUiSlider.set(r);
	}

  // Listen to keydown events on the input field.
  inputs.forEach(function(input, handle) {
  	input.addEventListener("change", function() {
  		setSliderHandle(handle, this.value);
  	});

  	input.addEventListener("keydown", function(e) {
  		var values = keypressSlider.noUiSlider.get();
  		var value = Number(values[handle]);

      // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
      var steps = keypressSlider.noUiSlider.steps();

      // [down, up]
      var step = steps[handle];

      var position;

      // 13 is enter,
      // 38 is key up,
      // 40 is key down.
      switch (e.which) {
      	case 13:
      	setSliderHandle(handle, this.value);
      	break;

      	case 38:
          // Get step to go increase slider value (up)
          position = step[1];

          // false = no step is set
          if (position === false) {
          	position = 1;
          }

          // null = edge of slider
          if (position !== null) {
          	setSliderHandle(handle, value + position);
          }

          break;

          case 40:
          position = step[0];

          if (position === false) {
          	position = 1;
          }

          if (position !== null) {
          	setSliderHandle(handle, value - position);
          }

          break;
      }
  });
  });
  /* end Listen to keypress on the input */
});

