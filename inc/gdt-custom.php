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

?>
