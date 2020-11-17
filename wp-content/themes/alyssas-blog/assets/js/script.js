jQuery(document).ready(function ($) {
  "use strict";
 

  var winwidth = $(window).width();

  
  var $grid = $('.grid').masonry({
    itemSelector: '.masonry-post', 
    percentPosition: true
  });

  // trigger after images loaded
  $grid.imagesLoaded( function() {
    $grid.masonry();
  });

  /*==================================
	  Toggle Button
  ==================================*/
  $('.open-button').on('click', function () {
    $('body').addClass('Is-toggle');
    
  }).focus(function () {
    $('body').addClass('Is-toggle');
  });

  function mainnavButton(){
    $('.open-button').clone().appendTo('.main-navigation');
    $('.main-navigation .open-button').addClass('active');
    $('.active').on('click',function(){
      $('body').removeClass('Is-toggle');
    }).focus(function () {
      $('body').removeClass('Is-toggle');
    });

  }
  mainnavButton();
  
 

  /*==================================
	  Responsive menu
  ==================================*/

  if (winwidth <= 991) {
    $('.menu li.menu-item-has-children,.menu li.page_item_has_children').append('<span class="dropdown-icon"><i class="fas fa-caret-down"><i></span>');

    $('.menu li.menu-item-has-children span.dropdown-icon,.menu li.page_item_has_children span.dropdown-icon').on('click', function (e) {
      e.preventDefault();
      $(this).siblings('.menu li.menu-item-has-children ul.sub-menu,.menu li.page_item_has_children ul.children').slideToggle(300);
    });
    
  } else {
    $('.menu li.menu-item-has-children, .menu li.page_item_has_children').find('span').css('display', 'none');
  };


});





