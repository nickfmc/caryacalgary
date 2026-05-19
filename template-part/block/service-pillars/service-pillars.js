/**
 * Service Pillars Swiper Initialization
 */
(function($) {
    'use strict';
    
    function initServicePillarsSwiper() {
        const swiperElements = document.querySelectorAll('.c-service-pillars-swiper');
        
        swiperElements.forEach(function(element) {
            new Swiper(element, {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                autoHeight: true,
                centeredSlides: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                }
            });
        });
    }
    
    // Initialize on DOM ready
    $(document).ready(function() {
        initServicePillarsSwiper();
    });
    
    // Re-initialize for ACF block preview
    if (window.acf) {
        window.acf.addAction('render_block_preview/type=acf/service-pillars-block', initServicePillarsSwiper);
    }
    
})(jQuery);
