// Scrolling animation
// ======================================
AOS.init({
    easing: 'ease-in-out-sine'
  });

  setInterval(addItem, 300);

  var itemsCounter = 1;
  var container = document.getElementById('aos-demo');

  function addItem () {
    if (itemsCounter > 42) return;
    var item = document.createElement('div');
    item.classList.add('aos-item');
    item.setAttribute('data-aos', 'fade-up');
    item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
    container.appendChild(item);
    itemsCounter++;
  }


// Push Menu
// ======================================
  $(".button-collapse").sideNav();


// slider
// ======================================
  $(document).ready(function(){
    $('.slider').slider();
  });

// Select Box
// ======================================
  $(document).ready(function() {
    $('select').material_select();
  });


// hide-show (all screen)
// ======================================
  $(document).ready(function(){
      $(".all-screen").click(function(){
          $("#all-screen").fadeIn(500);
          $("#proto-type").fadeOut(500);
      });
  });
  $(document).ready(function(){
      $(".live-prt").click(function(){
          $("#all-screen").fadeOut(500);
          $("#proto-type").fadeIn(500);
      });
  });



// Header apperance change scrolling page
// ======================================
  $(window).scroll(function() {
      if ($(this).scrollTop() > 1){  
          $('#detail-header').addClass("sticky");
      }
      else{
          $('#detail-header').removeClass("sticky");
      }
  });

   $(window).scroll(function() {
      if ($(this).scrollTop() > 1){  
          $('header').addClass("sticky-head");
      }
      else{
          $('header').removeClass("sticky-head");
      }
  });


  

// tab
// ======================================
 $(document).ready(function(){
    $('ul.tabs').tabs();
  });

