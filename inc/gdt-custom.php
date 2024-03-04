<?php
/**
 * Custom functions for this project? If yes, drop them here!
 */

  // If using acf icon picker - https://github.com/houke/acf-icon-picker -  modify the path to the icons directory
//   add_filter( 'acf_icon_path_suffix', 'acf_icon_path_suffix' );

//   function acf_icon_path_suffix( $path_suffix ) {
//       return 'img/icons/';
//   }
  
//used for Stackable blocks support - match to wrapper width 
global $content_width;
$content_width = 920;

function maw_reading_time($atts) {
  // Extract shortcode attributes
  $a = shortcode_atts(array(
      'postfix' => 'min read',
  ), $atts);

  // Get the post content
  $content = get_post_field('post_content', get_the_ID());

  // Calculate reading time
  $word_count = str_word_count(strip_tags($content));
  $readingtime = ceil($word_count / 200); // Assuming an average reading speed of 200 words per minute

  // Return the formatted reading time
  return $readingtime . ' ' . $a['postfix'];
}
add_shortcode('maw_reading_time', 'maw_reading_time');



function maw_custom_shortcode($atts) {
  // Get the post ID
  $post_id = get_the_ID();

  // Get the post title
  $title = get_the_title($post_id);

  // Get the post excerpt
  $excerpt = gdt_content_excerpt(90);

  // Get the post URL
  $link = get_permalink($post_id);

  // Get the featured image
  $featured_image = get_the_post_thumbnail($post_id, 'large');

  // Build the HTML structure
  $output = '<div class="c-glass-card">';
  $output .= $featured_image;
  $output .= '<div class="c-glass-card--inner">';
  $output .= '<h2>' . $title . '</h2>';
  $output .= '<p>' . $excerpt . '</p>';
  $output .= '<div class="c-btn-primary"><a href="' . $link . '">Read More</a></div>';
  $output .= '</div>';
  $output .= '</div>';

  // Return the HTML structure
  return $output;
}
add_shortcode('maw_custom', 'maw_custom_shortcode');







function maw_project_shortcode($atts) {
  // Get the post ID
  $post_id = get_the_ID();

  // Get the post title
  $title = get_the_title($post_id);

  // Get the post excerpt
  $excerpt = gdt_content_excerpt(90);

  // Get the post URL
  $link = get_permalink($post_id);

  // Get the featured image

  // Get the terms
  $terms = get_the_terms($post_id, 'taxonomyname_tax');
  $terms_output = '';
  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
      foreach ( $terms as $term ) {
          $terms_output .= '<span class="term">' . esc_html( $term->name ) . '</span>';
      }
  }

  // Build the HTML structure
  $output = '<div class="c-card--project">';
  $output .= $terms_output; // Add the terms here
  $output .= '<div class="c-card--project--inner">';
  $output .= '<h2>' . $title . '</h2>';
  $output .= '<p>' . $excerpt . '</p>';
  $output .= '<a class="u-more-link" href="' . $link . '"><span>View Program</span> <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path></svg></a>';
  $output .= '</div>';
  $output .= '</div>';

  // Return the HTML structure
  return $output;
}
add_shortcode('maw_project', 'maw_project_shortcode');