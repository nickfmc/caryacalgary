/**
 * Stats Flip Block - Dynamic Height Calculation
 */
(function($) {
    'use strict';
    
    function setStatsFlipHeights() {
        $('.c-stats-flip__container').each(function() {
            const container = $(this);
            const cards = container.find('.c-stats-flip__card');
            let maxHeight = 0;
            
            // Calculate maximum height needed
            cards.each(function() {
                const card = $(this);
                const front = card.find('.c-stats-flip__card-front');
                const back = card.find('.c-stats-flip__card-back');
                
                // Temporarily make them static to measure natural height
                front.css({'position': 'static', 'transform': 'none'});
                const frontHeight = front.outerHeight();
                front.css({'position': '', 'transform': ''});
                
                back.css({'position': 'static', 'transform': 'none'});
                const backHeight = back.outerHeight();
                back.css({'position': '', 'transform': ''});
                
                // Use the taller of the two for this card
                const cardMaxHeight = Math.max(frontHeight, backHeight);
                
                // Track the overall maximum
                if (cardMaxHeight > maxHeight) {
                    maxHeight = cardMaxHeight;
                }
            });
            
            // Apply the maximum height to all cards in this container
            if (maxHeight > 0) {
                // Add some padding for safety
                const finalHeight = maxHeight + 20;
                cards.css('min-height', finalHeight + 'px');
                container.find('.c-stats-flip__card-inner').css('min-height', finalHeight + 'px');
                container.find('.c-stats-flip__card-front, .c-stats-flip__card-back').css('min-height', finalHeight + 'px');
            }
        });
    }
    
    // Initialize on DOM ready
    $(document).ready(function() {
        setStatsFlipHeights();
    });
    
    // Recalculate on window resize
    let resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            setStatsFlipHeights();
        }, 250);
    });
    
    // Re-initialize for ACF block preview
    if (window.acf) {
        window.acf.addAction('render_block_preview/type=acf/stats-flip-block', function() {
            setTimeout(setStatsFlipHeights, 100);
        });
    }
    
})(jQuery);
