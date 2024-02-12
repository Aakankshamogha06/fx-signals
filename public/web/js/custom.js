$(window).scroll(function () {
  300 < $(this).scrollTop()
    ? ($(".back-to-top").addClass("active"), $("#header").addClass("fixed"))
    : ($(".back-to-top").removeClass("active"),
      $("#header").removeClass("fixed"));
}),
  $(".back-to-top").on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, 100);
  }),
  $(".awards-slider").slick({
    dots: !1,
    arrows: !1,
    infinite: !0,
    speed: 300,
    autoplay: !0,
    autoplaySpeed: 1e3,
    slidesToShow: 7,
    slidesToScroll: 1,
    cssEase: "linear",
    pauseOnHover: !1,
    responsive: [
      { breakpoint: 1024, settings: { slidesToShow: 5, infinite: !0 } },
      { breakpoint: 600, settings: { slidesToShow: 4 } },
      { breakpoint: 480, settings: { slidesToShow: 2 } },
    ],
  }),
  $(".timeline-slider").slick({
    infinite: !1,
    speed: 300,
    autoplay: !1,
    autoplaySpeed: 1e3,
    slidesToShow: 3,
    slidesToScroll: 1,
    pauseOnHover: !1,
    prevArrow: ".prev-arr",
    nextArrow: ".next-arr",
    responsive: [
      { breakpoint: 1199, settings: { slidesToShow: 2 } },
      { breakpoint: 768, settings: { slidesToShow: 1 } },
    ],
  }),
  $(".related-blog-slider").slick({
    infinite: !1,
    speed: 500,
    autoplay: !1,
    autoplaySpeed: 2e3,
    slidesToShow: 3,
    slidesToScroll: 1,
    pauseOnHover: !1,
    prevArrow: ".prev-arr",
    nextArrow: ".next-arr",
    responsive: [
      { breakpoint: 1199, settings: { slidesToShow: 2 } },
      { breakpoint: 768, settings: { slidesToShow: 1 } },
    ],
  }),
  $(".edu1-slider").slick({
    infinite: !1,
    speed: 500,
    autoplay: !1,
    autoplaySpeed: 2e3,
    slidesToShow: 3,
    slidesToScroll: 1,
    pauseOnHover: !1,
    prevArrow: ".prev-arr1",
    nextArrow: ".next-arr1",
    responsive: [
      { breakpoint: 1199, settings: { slidesToShow: 2 } },
      { breakpoint: 768, settings: { slidesToShow: 1 } },
    ],
  }),
  $(".edu2-slider").slick({
    infinite: !1,
    speed: 500,
    autoplay: !1,
    autoplaySpeed: 2e3,
    slidesToShow: 3,
    slidesToScroll: 1,
    pauseOnHover: !1,
    prevArrow: ".prev-arr2",
    nextArrow: ".next-arr2",
    responsive: [
      { breakpoint: 1199, settings: { slidesToShow: 2 } },
      { breakpoint: 768, settings: { slidesToShow: 1 } },
    ],
  }),
  $(".edu3-slider").slick({
    infinite: !1,
    speed: 500,
    autoplay: !1,
    autoplaySpeed: 2e3,
    slidesToShow: 3,
    slidesToScroll: 1,
    pauseOnHover: !1,
    prevArrow: ".prev-arr3",
    nextArrow: ".next-arr3",
    responsive: [
      { breakpoint: 1199, settings: { slidesToShow: 2 } },
      { breakpoint: 768, settings: { slidesToShow: 1 } },
    ],
  }),
  $(".hero-slider").slick({
    dots: !1,
    arrows: !1,
    infinite: !0,
    speed: 1e3,
    autoplay: !0,
    autoplaySpeed: 2e3,
    slidesToShow: 1,
    slidesToScroll: 1,
    cssEase: "linear",
    pauseOnHover: !1,
  }),
  $(".testimonial-slider").slick({
    infinite: !1,
    speed: 300,
    autoplay: !1,
    autoplaySpeed: 1e3,
    slidesToShow: 2,
    slidesToScroll: 1,
    pauseOnHover: !1,
    prevArrow: ".prev-arr",
    nextArrow: ".next-arr",
    responsive: [{ breakpoint: 992, settings: { slidesToShow: 1 } }],
  }),
  $("input[type=tel]").keydown(function (e) {
    46 == e.keyCode ||
      8 == e.keyCode ||
      9 == e.keyCode ||
      27 == e.keyCode ||
      13 == e.keyCode ||
      (65 == e.keyCode && !0 === e.ctrlKey) ||
      (35 <= e.keyCode && e.keyCode <= 39) ||
      ((e.shiftKey ||
        ((e.keyCode < 48 || 57 < e.keyCode) &&
          (e.keyCode < 96 || 105 < e.keyCode))) &&
        e.preventDefault());
  }),
  $(".youtube-btn").grtyoutube({ autoPlay: !0 }),
  768 < screen.width && new WOW().init();
