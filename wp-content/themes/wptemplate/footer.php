<?php
get_template_part('/templates/parts/footer');
wp_footer(); ?>
<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
<!-- Initialize Swiper -->
<script>
//Hex color generator
	const colors = [0,1,2,3,4,5,6,7,8,9,"A","B","C","D","E","F"];
  const btncolor = document.getElementById("color-btn");
  const color = document.querySelector('.color');

  btncolor.addEventListener("click", function(){
    let hexColor= "#";

    for( let i = 0; i < 6; i++ ) {
      hexColor += colors[getRandomNumber()];
    }
    const randomNumber = getRandomNumber();
    document.body.style.backgroundColor = hexColor;
    color.textContent = hexColor;
  });

  function getRandomNumber() {
    return Math.floor(Math.random()*colors.length);
  }


  //Counter
  
  
  $(document).ready(function() {
    // menu click event
    $('.menuBtn').click(function() {
      if ($('#menu').hasClass('offcanvas')) {
        $('#menu').removeClass('offcanvas');
      } else {
        $('#menu').addClass('offcanvas');
      }
    });
  });

  var header = $(".site-header");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    // if (scroll >= 100 && $(this).width() > 769) {
    if (scroll >= 10) {
      header.addClass("navbar-fixed-top");
    } else {
      header.removeClass('navbar-fixed-top');
    }
  });

  jQuery('.menu a, a.site-logo').on('click', function(e) {
    e.preventDefault();
    var get_section = jQuery(this).attr('href');
    var hashId = get_section.split('#');
    console.log(hashId);

      if(hashId.length > 1) {
        var section_offset = jQuery(get_section).offset().top;
      } else {
        var section_offset = 0;
      }

    jQuery('body,html').animate({
      scrollTop: section_offset
    }, 1000);

    $('#menu').removeClass('offcanvas');
  });

  // *only* if we have anchor on the url
  if (window.location.hash) {

    // smooth scroll to the anchor id
    $('html, body').animate({
      scrollTop: $(window.location.hash).offset().top + 'px'
    }, 1000, 'swing');
  }

    var btn = $('.totop');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, '300');
    });

    var swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 1,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
</script>
</body>

</html>