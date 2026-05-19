<?php

/**
 * Stats & Quotes Flip Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'c-stats-flip-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'c-stats-flip';
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
        <div class="c-stats-flip__header">
            <h2><?php echo esc_html( get_field('section_title') ); ?></h2>
            <?php if( get_field('section_description') ): ?>
                <p class="c-stats-flip__description"><?php echo wp_kses_post( get_field('section_description') ); ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="c-stats-flip__container">
        <?php if( have_rows('stat_items') ): ?>
            <?php while( have_rows('stat_items') ): the_row(); 
                $stat_number = get_sub_field('stat_number');
                $stat_label = get_sub_field('stat_label');
                $stat_description = get_sub_field('stat_description');
                $quote_text = get_sub_field('quote_text');
                $quote_author = get_sub_field('quote_author');
                $background_color = get_sub_field('background_color');
            ?>
                <div class="c-stats-flip__card" style="<?php echo $background_color ? 'background-color: ' . esc_attr($background_color) . ';' : ''; ?>">
                    <div class="c-stats-flip__card-inner">
                        <!-- Front of card -->
                        <div class="c-stats-flip__card-front">
                            <div class="c-stats-flip__stat-number"><?php echo esc_html($stat_number); ?></div>
                            <?php if( $stat_label ): ?>
                                <div class="c-stats-flip__stat-label"><?php echo esc_html($stat_label); ?></div>
                            <?php endif; ?>
                            <?php if( $stat_description ): ?>
                                <div class="c-stats-flip__stat-description"><?php echo wp_kses_post($stat_description); ?></div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Back of card -->
                        <div class="c-stats-flip__card-back">
                            <?php if( $quote_text ): ?>
                                <div class="c-stats-flip__quote">
                                    <div class="c-stats-flip__quote-icon">"</div>
                                    <div class="c-stats-flip__quote-text"><?php echo wp_kses_post($quote_text); ?></div>
                                    <?php if( $quote_author ): ?>
                                        <div class="c-stats-flip__quote-author">— <?php echo esc_html($quote_author); ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    
</div>
