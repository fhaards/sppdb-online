$('.openProsedur').on('click', function() {
    $('#section2').addClass('active');
    $('.section2 .section-prosedur .card-prosedur .card-body').addClass('active');
    $('#navWebapps').hide();
    $('.openProsedur').hide();
    $('.closeProsedur').show();
});
$('.closeProsedur').on('click', function() {
    $('#section2').removeClass('active');
    $('.section2 .section-prosedur .card-prosedur .card-body').removeClass('active');
    $('#navWebapps').show();
    $('.openProsedur').show();
    $('.closeProsedur').hide();
});

$('.navbar-link').on('click', function() {
    var scrollAnchor = $(this).attr('data-scroll'),
        scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 0;
    $('body,html').animate({
        scrollTop: scrollPoint
    }, 500);
    return false;
});

$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 128) {
		$("#navWebapps").addClass("bgWhite fixed header-shadow");
        $('.wrapper section').each(function(i) {
            if ($(this).position().top <= windscroll - -50) {
                $('.navbar-link').removeClass('active');
                $('.navbar-link').eq(i).addClass('active');
            }
        });
    } else {
		$("#navWebapps").removeClass("bgWhite header-shadow");
        $('.navbar-link').removeClass('active');
        $('.navbar-link:first').addClass('active');
    }
}).scroll();



// $(document).ready(function () {
// 	var prevScrollpos = window.pageYOffset;
// 	window.onscroll = function () {
// 		var currentScrollPos = window.pageYOffset;
// 		if (prevScrollpos > currentScrollPos) {
// 			$("#navWebapps").css("margin-top", 0);
// 		} else {
// 			$("#navWebapps").css("margin-top", -150);
// 		}
// 		prevScrollpos = currentScrollPos;
// 	};
// });


///////////////////////// NAV BACKGROUND SHOWING AFTER SCROLL

// $(document).ready(function () {
// 	$(window).on("scroll", function () {
// 	if ($(document).scrollTop() > 150) {
//       $("#navWebapps").addClass("bgWhite header-shadow");
//     }
//     else{ 
//       $("#navWebapps").removeClass("bgWhite header-shadow");
//     }
// 	});
// 	$(".navbar-link").click(function () {
// 		$("html, body").animate(
// 			{
// 				scrollTop: $($(this).attr("href")).offset().top,
// 			},
// 			500
// 		);
// 		return false;
// 	});
// });

///////////////////////// ACTIVATE NAV LINK

// $('a[href^="#section"]').on('click', function (e) {
// 	e.preventDefault();
// 	$(document).off("scroll");
// 	$('.navbar-link').each(function () {
// 		$(this).removeClass('active');
// 	})
// 	$(this).addClass('active');
//   });
  









