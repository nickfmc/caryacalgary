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
$id = 'c-teamgrid-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'c-teamgrid';
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



 

    <div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?> ">

<?php $term = get_field('member_type'); ?>

    <?php
  $args = array(
    'posts_per_page' => -1,
    'post_type' => 'team_type',
    'tax_query' => array(
      array(
        'taxonomy' => 'teamtype_tax',
        'field' => 'slug',
        'terms' => $term
        )
      )
    // 'orderby' => 'rand'
    // 'order' => 'asc'
  );
  $cpt_query = new WP_Query($args);
  $teamcount = 0;
?>

<?php if ($cpt_query->have_posts()) : while ($cpt_query->have_posts()) : $cpt_query->the_post(); ?>

  <div class="c-staff-preview">
  <div class="c-staff-preview-content">
    <div class="c-staff-preview-img"><?php the_post_thumbnail('large'); ?></div>
    
        <h6><?php the_title(); ?></h6>
        <?php $post_id = get_the_ID(); ?>
        <?php if( get_field('job_title', $post_id) ) { echo '<p>' . get_field('job_title', $post_id) . '</p>'; }?>
    </div>
      
      <span class="c-staff-arrow">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M3.515 8.465L12 16.95l8.485-8.485L19.07 7.05L12 14.122L4.929 7.05L3.515 8.465Z"/></svg>    
</span>
  </div>
  
  <div class="c-staff-card is-hidden">
  <span class="c-staff-card-close"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M10.657 12.071L5 6.414L6.414 5l5.657 5.657L17.728 5l1.414 1.414l-5.657 5.657l5.657 5.657l-1.414 1.414l-5.657-5.657l-5.657 5.657L5 17.728z"/></svg></span>
  <div class="c-staff-card-inner">
      <div>
        <?php the_post_thumbnail('large'); ?>
        <h6><?php the_title(); ?></h6>
        <?php if( get_field('job_title', $post_id) ) { echo '<p class="c-staff-card-inner-designation">' . get_field('job_title', $post_id) . '</p>'; }?>
        <?php if( get_field('linkedin', $post_id) ) { echo '<a target="_blank" class="c-staff-linkedin" href="' . get_field('linkedin', $post_id) . '"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278c-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387c2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 0 1-1.548-1.549a1.548 1.548 0 1 1 1.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z"/></svg></a>'; }?>
      </div> 
      <div>
          <?php the_content(); ?>
      </div>
  </div>
  </div>
<?php $teamcount ++; ?>
<?php endwhile; endif; // end of CPT loop ?>
<?php if ($teamcount == 1) {
  echo '<div class="c-staff-preview"></div><div class="c-staff-preview"></div><div class="c-staff-preview"></div>';
} elseif ($teamcount == 2) {
  echo '<div class="c-staff-preview"></div><div class="c-staff-preview"></div>';
} elseif ($teamcount == 3) {
  echo '<div class="c-staff-preview"></div>';
}; ?>

<?php wp_reset_postdata(); ?>

    </div>

        
