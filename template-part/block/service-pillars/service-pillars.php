<?php

/**
 * Service Pillars Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'c-service-pillars-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'c-service-pillars';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( $is_preview ) {
    $className .= ' is-admin';
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    
    <?php if( get_field('section_title') ): ?>
        <div class="c-service-pillars__header">
            <h2><?php echo esc_html( get_field('section_title') ); ?></h2>
            <?php if( get_field('section_intro') ): ?>
                <div class="c-service-pillars__intro"><?php echo wp_kses_post( get_field('section_intro') ); ?></div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="swiper c-service-pillars-swiper">
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        
        <div class="swiper-wrapper">
            <?php if( have_rows('pillar_items') ): ?>
                <?php while( have_rows('pillar_items') ): the_row(); 
                    $pillar_title = get_sub_field('pillar_title');
                    $pillar_content = get_sub_field('pillar_content');
                    $pillar_image = get_sub_field('pillar_image');
                    $pillar_quote = get_sub_field('pillar_quote');
                    $pillar_quote_author = get_sub_field('pillar_quote_author');
                    $background_color = get_sub_field('background_color');
                ?>
                    <div class="swiper-slide">
                        <div class="c-service-pillars__slide-content" style="<?php echo $background_color ? 'background-color: ' . esc_attr($background_color) . ';' : ''; ?>">
                            
                            <div class="c-service-pillars__main-content">
                                <?php if( $pillar_image ): ?>
                                    <div class="c-service-pillars__image">
                                        <?php echo wp_get_attachment_image($pillar_image, 'large'); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="c-service-pillars__text">
                                    <?php if( $pillar_title ): ?>
                                        <h3 class="c-service-pillars__title"><?php echo esc_html($pillar_title); ?></h3>
                                    <?php endif; ?>
                                    
                                    <?php if( $pillar_content ): ?>
                                        <div class="c-service-pillars__content">
                                            <?php echo wp_kses_post($pillar_content); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <?php if( $pillar_quote ): ?>
                                <div class="c-service-pillars__quote-banner">
                                    <blockquote class="c-service-pillars__quote-text">
                                        <?php echo wp_kses_post($pillar_quote); ?>
                                        <?php if( $pillar_quote_author ): ?>
                                            <cite class="c-service-pillars__quote-author">— <?php echo esc_html($pillar_quote_author); ?></cite>
                                        <?php endif; ?>
                                    </blockquote>
                                </div>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    
</div>
