<?php

/**
 * blockname Block Template.
 *
 * @param   array $block The block settings and attributes. 
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'c-gallery-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'c-gallery';
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

 
<div <?php if( get_field('min_height') ) { echo 'style="min-height:' . get_field('min_height') . 'px" '; }?> id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php if( get_field('gallery_style') ) { echo get_field('gallery_style'); }?>">

<div class="c-gallery-img-one">
    <?php
    $image = get_field('image_one');
    $size = 'large';
    if($image){
     echo wp_get_attachment_image($image, $size);
    }
    ?>
</div>

<div class="c-gallery-img-two">
<?php
$image = get_field('image_two');
$size = 'large';
if($image){
 echo wp_get_attachment_image($image, $size);
}
?>
</div>

<div class="c-gallery-img-three">
<?php
$image = get_field('image_three');
$size = 'large';
if($image){
 echo wp_get_attachment_image($image, $size);
}
?>
</div>
</div>
