(function ($) {
  ("use strict");

  // Navbar on scrolling
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".navbar").fadeIn("slow").css("display", "flex");
    } else {
      $(".navbar").fadeOut("slow").css("display", "none");
    }
  });

  // Smooth scrolling on the navbar links
  $(".navbar-nav a").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();

      $("html, body").animate(
        {
          scrollTop: $(this.hash).offset().top - 45,
        },
        1500,
        "easeInOutExpo"
      );

      if ($(this).parents(".navbar-nav").length) {
        $(".navbar-nav .active").removeClass("active");
        $(this).closest("a").addClass("active");
      }
    }
  });

  // Typed Initiate
  if ($(".typed-text-output").length == 1) {
    var typed_strings = $(".typed-text").text();
    var typed = new Typed(".typed-text-output", {
      strings: typed_strings.split(", "),
      typeSpeed: 100,
      backSpeed: 20,
      smartBackspace: false,
      loop: true,
      startDelay: 1300, // 1.3 seconds delay (in milliseconds)
    });
  }

  // Modal Video
  $(document).ready(function () {
    var $videoSrc;
    $(".btn-play").click(function () {
      $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);

    $("#videoModal").on("shown.bs.modal", function (e) {
      $("#video").attr(
        "src",
        $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
      );
    });

    $("#videoModal").on("hide.bs.modal", function (e) {
      $("#video").attr("src", $videoSrc);
    });
  });

  // Scroll to Bottom
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".scroll-to-bottom").fadeOut("slow");
    } else {
      $(".scroll-to-bottom").fadeIn("slow");
    }
  });

  // Skills
  $(".skill").waypoint(
    function () {
      $(".progress .progress-bar").each(function () {
        $(this).css("width", $(this).attr("aria-valuenow") + "%");
      });
    },
    { offset: "80%" }
  );

  // Portfolio isotope and filter
  var portfolioIsotope = $(".portfolio-container").isotope({
    itemSelector: ".portfolio-item",
    layoutMode: "fitRows",
  });
  $("#portfolio-flters li").on("click", function () {
    $("#portfolio-flters li").removeClass("active");
    $(this).addClass("active");

    portfolioIsotope.isotope({ filter: $(this).data("filter") });
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    dots: true,
    loop: true,
    items: 1,
  });
})(jQuery);

//PORTFOLIO GALLERY

//Gallery-1
const button1 = document.getElementById("popup-button-1");
const overlay1 = document.getElementById("overlay-1");
const popup1 = document.getElementById("popup-1");

button1.addEventListener("click", function () {
  overlay1.style.display = "block";
  popup1.style.display = "block";
});

overlay1.addEventListener("click", function () {
  overlay1.style.display = "none";
  popup1.style.display = "none";
});

//Gallery-2
const button2 = document.getElementById("popup-button-2");
const overlay2 = document.getElementById("overlay-2");
const popup2 = document.getElementById("popup-2");

button2.addEventListener("click", function () {
  overlay2.style.display = "block";
  popup2.style.display = "block";
});

overlay2.addEventListener("click", function () {
  overlay2.style.display = "none";
  popup2.style.display = "none";
});

//Gallery-3
const button3 = document.getElementById("popup-button-3");
const overlay3 = document.getElementById("overlay-3");
const popup3 = document.getElementById("popup-3");

button3.addEventListener("click", function () {
  overlay3.style.display = "block";
  popup3.style.display = "block";
});

overlay3.addEventListener("click", function () {
  overlay3.style.display = "none";
  popup3.style.display = "none";
});

//Gallery-4
const button4 = document.getElementById("popup-button-4");
const overlay4 = document.getElementById("overlay-4");
const popup4 = document.getElementById("popup-4");

button4.addEventListener("click", function () {
  overlay4.style.display = "block";
  popup4.style.display = "block";
});

overlay4.addEventListener("click", function () {
  overlay4.style.display = "none";
  popup4.style.display = "none";
});

//Gallery-5
const button5 = document.getElementById("popup-button-5");
const overlay5 = document.getElementById("overlay-5");
const popup5 = document.getElementById("popup-5");

button5.addEventListener("click", function () {
  overlay5.style.display = "block";
  popup5.style.display = "block";
});

overlay5.addEventListener("click", function () {
  overlay5.style.display = "none";
  popup5.style.display = "none";
});

//Gallery-6
const button6 = document.getElementById("popup-button-6");
const overlay6 = document.getElementById("overlay-6");
const popup6 = document.getElementById("popup-6");

button6.addEventListener("click", function () {
  overlay6.style.display = "block";
  popup6.style.display = "block";
});

overlay6.addEventListener("click", function () {
  overlay6.style.display = "none";
  popup6.style.display = "none";
});

//Gallery-7
const button7 = document.getElementById("popup-button-7");
const overlay7 = document.getElementById("overlay-7");
const popup7 = document.getElementById("popup-7");

button7.addEventListener("click", function () {
  overlay7.style.display = "block";
  popup7.style.display = "block";
});

overlay7.addEventListener("click", function () {
  overlay7.style.display = "none";
  popup7.style.display = "none";
});

//Gallery-8
const button8 = document.getElementById("popup-button-8");
const overlay8 = document.getElementById("overlay-8");
const popup8 = document.getElementById("popup-8");

button8.addEventListener("click", function () {
  overlay8.style.display = "block";
  popup8.style.display = "block";
});

overlay8.addEventListener("click", function () {
  overlay8.style.display = "none";
  popup8.style.display = "none";
});

//Gallery-9
const button9 = document.getElementById("popup-button-9");
const overlay9 = document.getElementById("overlay-9");
const popup9 = document.getElementById("popup-9");

button9.addEventListener("click", function () {
  overlay9.style.display = "block";
  popup9.style.display = "block";
});

overlay9.addEventListener("click", function () {
  overlay9.style.display = "none";
  popup9.style.display = "none";
});
