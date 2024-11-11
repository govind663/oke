// stickymenu start
// window.onscroll = function() {myFunction()};

// var header = document.getElementById("myHeader");
// var sticky = header.offsetTop;

// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// }
// stickymenu end






// Banner Slider
  // $(document).ready(function() {
  //   var $carousel = $('.banner-slider').owlCarousel({
  //     loop: true,
  //     margin: 30,
  //     nav: false,
  //     mouseDrag: true,
  //     items: 1,
  //     dots: true,
  //     dotsData: true, // Enable custom dots
  //     autoHeight: true,
  //     autoplay: false,
  //     smartSpeed: 1500,
  //     autoplayHoverPause: true,
  //     navText: [
  //       "<i class='fa fa-angle-left'></i>",
  //       "<i class='fa fa-angle-right'></i>"
  //     ]
  //   });

  //   // Ensure dots are clickable
  //   $(document).on('click', '.owl-dot', function() {
  //     var index = $(this).index();
  //     console.log('Dot clicked, index:', index); // Debug log
  //     $carousel.trigger('to.owl.carousel', [index, 300]); // Navigate to the corresponding slide
  //   });
  // });








// $(function () {

//     const svg = document.getElementById("svg");
//     const tl = gsap.timeline();
//     const curve = "M0 502S175 272 500 272s500 230 500 230V0H0Z";
//     const flat = "M0 2S175 1 500 1s500 1 500 1V0H0Z";

//     tl.to(".loader-wrap-heading .load-text , .loader-wrap-heading .cont", {
//         delay: 1.5,
//         y: -100,
//         opacity: 0,
//     });
//     tl.to(svg, {
//         duration: 0.5,
//         attr: { d: curve },
//         ease: "power2.easeIn",
//     }).to(svg, {
//         duration: 0.5,
//         attr: { d: flat },
//         ease: "power2.easeOut",
//     });
//     tl.to(".loader-wrap", {
//         y: -1500,
//     });
//     tl.to(".loader-wrap", {
//         zIndex: -1,
//         display: "none",
//     });
//     tl.from(
//         "header .container",
//         {
//             y: 100,
//             opacity: 0,
//             delay: 0.3,
//         },
//         "-=1.5"
//     );

// });





// AOS.init({
// once: true
// })

$(document).ready(function() {
    var owl = $('.about-slider');
    owl.owlCarousel({
        margin: 20,
        loop: true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 4500,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1,
                nav: false,
            },
            992: {
                items: 1,
                nav: true,
            },
            1200: {
                items: 1,
                nav: true,
            },
            1440: {
                items: 1,
                nav: true,
            }
        }
    })
})


$(document).ready(function() {
    var owl = $('.client-slider');
    owl.owlCarousel({
        margin: 20,
        loop: true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 4500,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 2,
                nav: false,
            },
            992: {
                items: 3,
                nav: true,
            },
            1200: {
                items: 4,
                nav: true,
            },
            1440: {
                items: 5,
                nav: true,
            }
        }
    })
})


$(document).ready(function() {
    var owl = $('.product-slider');
    owl.owlCarousel({
        margin: 70,
        loop: true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 4500,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2,
                nav: false,
            },
            992: {
                items: 3,
                nav: true,
            },
            1200: {
                items: 3,
                nav: true,
            },
            1440: {
                items: 3,
                nav: true,
            }
        }
    })
})

$(document).ready(function() {
    var owl = $('.industry-served-slider');
    owl.owlCarousel({
        margin: 70,
        loop: true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 4500,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1,
                nav: false,
            },
            992: {
                items: 1,
                nav: true,
            },
            1200: {
                items: 1,
                nav: true,
            },
            1440: {
                items: 1,
                nav: true,
            }
        }
    })
})

// Parallax

$(document).ready(function(){
    //.parallax(xPosition, speedFactor, outerHeight) options:
    //xPosition - Horizontal position of the element
    //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
    //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    var testMobile = isMobile.any();
    
    if (testMobile == null)
    {
        $('.bg1').parallax("50%", 0.3);
        $('.bg2').parallax("50%", 0.3);
        $('.bg3').parallax("50%", 0.3);
        $('.bg4').parallax("50%", 0.3);
    }
})



// $("html").easeScroll({
//   frameRate: 60,
//   animationTime: 2000,
//   stepSize: 80,
//   pulseAlgorithm: !0,
//   pulseScale: 8,
//   pulseNormalize: 1,
//   accelerationDelta: 20,
//   accelerationMax: 1,
//   keyboardSupport: !0,
//   arrowScroll: 50
// });


var $root = $('html, body');

$('a[href^="#"]').click(function () {
    $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);

    return false;
});


 // Page Scroll Percentage
    function scrollTopPercentage() {
        const scrollPercentage = () => {

            // {
            //     var header = document.getElementById("myHeader");
            //     var sticky = header.offsetTop;

            //     function myFunction() {
            //       if (window.pageYOffset > sticky) {
            //         header.classList.add("sticky");
            //       } else {
            //         header.classList.remove("sticky");
            //       }
            //     }

            //     myFunction()
            // }
            const scrollTopPos = document.documentElement.scrollTop;
            const calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrollValue = Math.round((scrollTopPos / calcHeight) * 100);
            const scrollElementWrap = $("#scroll-percentage");

            scrollElementWrap.css("background", `conic-gradient( #111 ${scrollValue}%, #fff ${scrollValue}%)`);
            
            // ScrollProgress
            if ( scrollTopPos > 100 ) {
                scrollElementWrap.addClass("active");
            } else {
                scrollElementWrap.removeClass("active");
            }

            if( scrollValue < 96 ) {
                $("#scroll-percentage-value").text(`${scrollValue}%`);
            } else {
                $("#scroll-percentage-value").html('<i class="fa fa-long-arrow-up"></i>');
            }
        }
        window.onscroll = scrollPercentage;
        window.onload = scrollPercentage;

        // Back to Top
        function scrollToTop() {
            document.documentElement.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
        
        $("#scroll-percentage").on("click", scrollToTop);
    }

    scrollTopPercentage();
    
