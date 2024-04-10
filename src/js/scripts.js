/**
 * GutenDevTheme scripts (footer)
 * This file contains any js scripts you want added to the theme's footer. 
 */

// *********************** START CUSTOM JS *********************************

// // grab element for Headroom
// var headroomElement = document.querySelector("#c-page-header");
// console.log(headroomElement);

// // get height of element for Headroom
// var headerHeight = headroomElement.offsetHeight; 
// console.log(headerHeight);

// // construct an instance of Headroom, passing the element
// var headroom = new Headroom(headroomElement, {
//   "offset": headerHeight,
//   "tolerance": 5,
//   "classes": {
//     "initial": "animate__animated",
//     "pinned": "animate__slideInDown",
//     "unpinned": "animate__slideOutUp"
//   }
// });
// headroom.init();

// *********************** END CUSTOM JS *********************************





// *********************** START CUSTOM JQUERY DOC READY SCRIPTS *******************************
jQuery( document ).ready(function( $ ) {


    $('.c-accordion-filter').on('click', '.maw-accordion-title', function() {
      var wrapper = $(this).next('.maw-accordion-content-wrapper');
      if (wrapper.is(':visible')) {
        wrapper.slideUp(function() {
          $(this).prev().attr('aria-expanded', 'false');
        });
      } else {
        wrapper.slideDown(function() {
          $(this).prev().attr('aria-expanded', 'true');
        });
      }
    });
 

   // Find the label and append the SVG
  //  var familylabel = $('label[data-piotnetgrid-option-label="Family Functioning"]');
  //  var familysvg = '<svg xmlns="http://www.w3.org/2000/svg" width="92" height="61" viewBox="0 0 92 61" fill="none"><g clip-path="url(#clip0_752657_3415)"><path d="M81.1596 20.1207C84.3196 23.3207 84.3196 28.4407 81.1596 31.6407C77.9996 34.6807 72.8796 34.6807 69.7196 31.6407C66.5596 28.4407 66.5596 23.3207 69.7196 20.1207C72.8796 16.9207 77.9996 16.9207 81.1596 20.1207Z" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M54.8202 5.72C59.6802 10.52 59.6802 18.52 54.8202 23.32C49.9602 28.12 42.0602 28.12 37.1802 23.32C32.3202 18.52 32.3202 10.52 37.1802 5.72C42.0402 0.76 49.9402 0.76 54.8202 5.72Z" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M22.2807 20.1207C25.4407 23.3207 25.4407 28.4407 22.2807 31.6407C19.1207 34.6807 14.0007 34.6807 10.8407 31.6407C7.6807 28.4407 7.6807 23.3207 10.8407 20.1207C14.0007 16.9207 19.1207 16.9207 22.2807 20.1207Z" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M90.0008 58.0406V53.7206C90.0008 48.1206 85.5208 43.6406 80.0008 43.6406H76.8008" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 58.0406V53.7206C2 48.1206 6.48 43.6406 12 43.6406H15.2" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M67.3606 58.0405V51.6405C67.3606 43.9605 61.0806 37.5605 53.3606 37.5605H38.6406C30.9206 37.5605 24.6406 43.9605 24.6406 51.6405V58.0405" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_752657_3415"><rect width="92" height="60.04" fill="white"/></clipPath></defs></svg>';
  //  familylabel.append(familysvg);

  $(document).ready(function() {
    var isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

    $('.tooltip').tooltipster({
      animation: 'fade',
      theme: 'tooltipster-punk',
      contentAsHTML: 'true',
      trigger: isMobile ? 'click' : 'hover',
      position: 'left',
      interactive: 'true',
      autoClose: 'false',
      maxWidth: 400,
      touchDevices: 'true',
    });
  });


   // get Template URL
   var templateUrl = object_name.templateUrl;
   

  $('#mobile-nav').hcOffcanvasNav({
    disableAt: 1024,
    width: 280,
    customToggle: $('.toggle'),
    pushContent: '.menu-slide',
    levelTitles: true,
    position: 'right',
    levelOpen: 'expand',
    navTitle: $('<div class="c-mobile-menu-header"><a href="/"><img src="'+ templateUrl + '/img/logo_purple.png"></a></div>'),
    levelTitleAsBack: true,
    insertClose: true,
    closeOnClick: true,

  });

  $( '.c-staff-preview' ).click(function() {
    $('.c-staff-preview').not(this).next( '.c-staff-card' ).addClass('is-hidden');
    $( this ).next('.c-staff-card').toggleClass('is-hidden');
    $('.c-staff-preview').not(this).removeClass('is-selected');
     $( this ).toggleClass('is-selected');
  });
  
  $( '.c-staff-card-close' ).click(function() {
    $( this ).parent('.c-staff-card').addClass('is-hidden');
     $( this ).parent('.c-staff-card').prev('.c-staff-preview').removeClass('is-selected');
  });
  

  // modal menu init ----------------------------------
  // var modal_menu = jQuery("#c-modal-nav-button").animatedModal({
  //   modalTarget: 'modal-navigation',
  //   animatedIn: 'slideInDown',
  //   animatedOut: 'slideOutUp',
  //   animationDuration: '0.40s',
  //   color: '#dedede',
  //   afterClose: function() {
  //     $( 'body, html' ).css({ 'overflow': '' });
  //   }
  // });

  // // get last and current hash + update on hash change
  // var currentHash = function() {
  //   return location.hash.replace(/^#/, '')
  // }
  // var last_hash
  // var hash = currentHash()
  // $(window).bind('hashchange', function(event) {
  //   last_hash = hash;
  //   hash = currentHash();
  // });

  // enable back/foward to close/open modal --------------------------
  // $("#c-modal-nav-button").on('click', function(){ window.location.href = ensureHash("#menu"); });
  // function ensureHash(newHash) {
  //   if (window.location.hash) {
  //     return window.location.href.substring(0, window.location.href.lastIndexOf(window.location.hash)) + newHash;
  //   }
  //   return window.location.hash + newHash;
  // }
  // // if back button is pressed, close the modal
  // $(window).on('hashchange', function (event) {
  //   if (last_hash == 'menu' && hash == '') {
  //     modal_menu.close();
  //     history.replaceState('', document.title, window.location.pathname);
  //   } // if forward button, open the modal
  //   else if (window.location.hash == "#menu"){
  //     modal_menu.open();
  //   }
  // });

  // // if close button is clicked, clear the #menu hash added above
  // $('.close-modal-navigation').on('click', function (e) {
  //   history.replaceState('', document.title, window.location.pathname);
  // });

  // // close modal menu if esc key is used ------------------------
  // $(document).keyup(function(ev){
  //   if(ev.keyCode == 27 && hash == 'menu') {
  //     window.history.back();
  //   }
  // });


  // Magnific as menu popup
  // MENU POPUP
  // $('#c-modal-nav-button').magnificPopup({
  //   type: 'inline',
  //   removalDelay: 700, //delay removal by X to allow out-animation
  //   showCloseBtn: false,
  //   closeOnBgClick: false,
  //   autoFocusLast: false,
  //   fixedContentPos: false, 
  //   fixedContentPos: true,
  //   callbacks: {
  //     beforeOpen: function() {
  //        this.st.mainClass = 'mfp-move-from-side menu-popup';
  //        $('body').addClass('mfp-active');
  //     },
  //     open: function() { 
  //       $('#close-modal, .close-modal-navigation').on('click',function(event){
  //         event.preventDefault();
  //         $.magnificPopup.close(); 
  //       }); 
  //   },
  //   beforeClose: function() {
  //   $('body').removeClass('mfp-active');
  // }
  //   },
  //   midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
  // });

});
// *********************** END CUSTOM JQUERY DOC READY SCRIPTS *********************************
