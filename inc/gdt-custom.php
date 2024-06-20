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



add_action('rest_api_init', function () {
  register_rest_field('user', 'name', array(
    'get_callback' => function() { return null; },
    'update_callback' => null,
    'schema' => null,
  ));

  register_rest_field('user', 'slug', array(
    'get_callback' => function() { return null; },
    'update_callback' => null,
    'schema' => null,
  ));

  register_rest_field('user', 'link', array(
    'get_callback' => function() { return null; },
    'update_callback' => null,
    'schema' => null,
  ));
});



$locations = get_field('locations');
$locations_array = explode(',', $locations); // Assuming locations are comma-separated
$choices = array();
foreach ($locations_array as $location) {
    $choices[$location] = $location;
}


function maw_social_shortcode($atts) {
 // Get the post ID
 $post_id = get_the_ID();

 // Get the post title
 $title = get_the_title($post_id);

 // Get the post content
 $content = apply_filters('the_content', get_post_field('post_content', $post_id));

//  Generate the HTML for the accordion
$output = '<div class="maw-accordion" id="maw-accordion-' . $post_id . '">';
$output .= '<h5 class="maw-accordion-title" id="maw-accordion-title-' . $post_id . '" tabindex="0" aria-controls="maw-accordion-content-' . $post_id . '" aria-expanded="false">' . $title . '</h5>';
$output .= '<div class="maw-accordion-content-wrapper" style="display: none;"><div class="maw-accordion-content" id="maw-accordion-content-' . $post_id . '" aria-labelledby="maw-accordion-title-' . $post_id . '">';

// Get the ACF fields
$date_and_time = get_field('data_and_time', $post_id);
$location = get_field('location', $post_id);



// Add the post content
$output .= $content;
// Add the ACF fields to the content if they have values
if (!empty($date_and_time) || !empty($location)) {
  $output .= '<div class="maw-accordion-meta-fields">';
  if (!empty($date_and_time)) {
      $output .= '<p><span>Date and Time:</span><br/> ' . $date_and_time . '</p>';
  }
  if (!empty($location)) {
      $output .= '<p><span>Location:</span><br /> ' . $location . '</p>';
  }
  $output .= '</div>';
}
$output .= '</div></div>';

$output .= '</div>';

return $output;
}

add_shortcode('maw_custom_social', 'maw_social_shortcode');

function maw_custom_shortcode($atts) {
  // Get the post ID
  $post_id = get_the_ID();

  // Get the post title
  $title = get_the_title($post_id);

  

  // Get the post excerpt
  if(has_excerpt()) {
    $excerpt = get_the_excerpt();
  } else {
    $excerpt = gdt_content_excerpt(90);
  }
  


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
   if(has_excerpt()) {
    $excerpt = get_the_excerpt();
  } else {
    $excerpt = gdt_content_excerpt(120);
  }

  // Get the post URL
  $link = get_permalink($post_id);

  // Get the terms
  $terms = get_the_terms($post_id, 'taxonomyname_tax');
  $terms_output = '';
  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    foreach ( $terms as $term ) {
      if ($term->name == 'Family Functioning') {
        $terms_output .= '<span class="term">' . esc_html( $term->name ). '</span>';
        $svg_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="92" height="61" viewBox="0 0 92 61" fill="none">
        <g clip-path="url(#clip0_752657_3415)">
          <path d="M81.1596 20.1207C84.3196 23.3207 84.3196 28.4407 81.1596 31.6407C77.9996 34.6807 72.8796 34.6807 69.7196 31.6407C66.5596 28.4407 66.5596 23.3207 69.7196 20.1207C72.8796 16.9207 77.9996 16.9207 81.1596 20.1207Z" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M54.8202 5.72C59.6802 10.52 59.6802 18.52 54.8202 23.32C49.9602 28.12 42.0602 28.12 37.1802 23.32C32.3202 18.52 32.3202 10.52 37.1802 5.72C42.0402 0.76 49.9402 0.76 54.8202 5.72Z" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M22.2807 20.1207C25.4407 23.3207 25.4407 28.4407 22.2807 31.6407C19.1207 34.6807 14.0007 34.6807 10.8407 31.6407C7.6807 28.4407 7.6807 23.3207 10.8407 20.1207C14.0007 16.9207 19.1207 16.9207 22.2807 20.1207Z" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M90.0008 58.0406V53.7206C90.0008 48.1206 85.5208 43.6406 80.0008 43.6406H76.8008" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M2 58.0406V53.7206C2 48.1206 6.48 43.6406 12 43.6406H15.2" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M67.3606 58.0405V51.6405C67.3606 43.9605 61.0806 37.5605 53.3606 37.5605H38.6406C30.9206 37.5605 24.6406 43.9605 24.6406 51.6405V58.0405" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_752657_3415">
            <rect width="92" height="60.04" fill="white"/>
          </clipPath>
        </defs>
      </svg>';
       
      } elseif ($term->name == 'Mental Health and Well-Being') {
        $terms_output .= '<span class="term">' . esc_html( $term->name ). '</span>';
        $svg_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="73" height="77" viewBox="0 0 73 77" fill="none">
        <g clip-path="url(#clip0_752661_2484)">
          <path d="M16 20C20.9706 20 25 15.9706 25 11C25 6.02944 20.9706 2 16 2C11.0294 2 7 6.02944 7 11C7 15.9706 11.0294 20 16 20Z" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8 54.0391V70.0391C8 72.2791 9.8 74.0391 12 74.0391H20.02C22.22 74.0391 24.02 72.2791 24.02 70.0391V54.0391L28.24 51.1591C29.34 50.5191 30.02 49.2391 30.02 47.9591V34.0391C30.02 31.7991 28.22 30.0391 26.02 30.0391H6C3.8 30.0391 2 31.7991 2 34.0391V47.9591C2 49.2391 2.68 50.5191 3.78 51.1591L8 54.0391Z" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M58.3196 10.9999C59.2196 9.87992 60.7596 8.91992 63.1196 8.91992C67.2596 8.91992 70.0396 12.4399 70.0396 15.7999C70.0396 22.9999 60.6396 28.4399 58.3196 28.4399C55.9996 28.4399 46.5996 22.9999 46.5996 15.7999C46.5996 12.4399 49.3596 8.91992 53.4996 8.91992C55.8596 8.91992 57.4196 9.87992 58.3196 10.9999Z" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_752661_2484">
            <rect width="72.04" height="76.04" fill="white"/>
          </clipPath>
        </defs>
      </svg>';

      } elseif ($term->name == 'Supports for Older Adults') {
        $terms_output .= '<span class="term">' . esc_html( $term->name ). '</span>';
        $svg_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="76" viewBox="0 0 80 76" fill="none">
        <g clip-path="url(#clip0_752661_2503)">
          <path d="M62 74C70.8366 74 78 66.8366 78 58C78 49.1634 70.8366 42 62 42C53.1634 42 46 49.1634 46 58C46 66.8366 53.1634 74 62 74Z" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M66.9995 55.1191L60.7595 61.3591L57.0195 57.5191" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M18 57.9999C18 52.3999 22.48 47.9199 28 47.9199H34" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M38 38.0801C43.5228 38.0801 48 33.6029 48 28.0801C48 22.5572 43.5228 18.0801 38 18.0801C32.4772 18.0801 28 22.5572 28 28.0801C28 33.6029 32.4772 38.0801 38 38.0801Z" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M38 74H22C10.96 74 2 65.04 2 54V22C2 10.96 10.96 2 22 2H54C65.04 2 74 10.96 74 22V34" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_752661_2503">
            <rect width="80" height="76" fill="white"/>
          </clipPath>
        </defs>
      </svg>';

      } elseif ($term->name == 'Financial Wellness') {
        $terms_output .= '<span class="term">' . esc_html( $term->name ). '</span>';
        $svg_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
        <g clip-path="url(#clip0_752657_3443)">
          <path d="M63.64 46.06C65.16 42.34 66 38.26 66 34C66 16.32 51.68 2 34 2C16.32 2 2 16.32 2 34C2 51.68 16.34 66 34 66C38.28 66 42.36 65.14 46.08 63.62" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M34 22.5195V19.9795" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M34 45.4395V47.9795" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M27.3804 42.6995C28.3804 44.3195 30.0604 45.4395 32.1004 45.4395H36.3004C39.2604 45.4395 41.6604 43.0395 41.6604 40.0795C41.6604 37.6195 39.9804 35.4795 37.6004 34.8795L30.4404 33.0795C28.0804 32.4795 26.4004 30.3395 26.4004 27.8795C26.4004 24.9195 28.8004 22.5195 31.7604 22.5195H35.9604C38.0004 22.5195 39.6804 23.6395 40.6604 25.2595" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M62 46C70.84 46 78 53.16 78 62C78 70.84 70.84 78 62 78C53.16 78 46 70.84 46 62C46 53.16 53.16 46 62 46Z" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M56.7207 62.5195H67.4407" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M62.0801 67.8802V57.1602" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_752657_3443">
            <rect width="80" height="80" fill="white"/>
          </clipPath>
        </defs>
      </svg>';

      } elseif ($term->name == 'Social Connections') {
        $terms_output .= '<span class="term">' . esc_html( $term->name ). '</span>';
        $svg_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="77" height="66" viewBox="0 0 77 66" fill="none">
        <g clip-path="url(#clip0_752657_3428)">
          <path d="M39.4791 4.59974L38.1191 6.05974L36.7391 4.59974C33.7391 1.39974 28.7391 1.11974 25.4191 3.99974C22.0191 6.93974 21.6191 12.0197 24.4191 15.5397C28.4191 20.5797 32.9991 25.5397 38.1191 29.4597C43.3591 25.4597 48.0391 20.3397 52.1191 15.1597C54.7591 11.7997 54.2191 6.93974 50.9991 4.15974L50.8591 4.03974C47.4991 1.13974 42.5191 1.39974 39.4991 4.61974L39.4791 4.59974Z" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M70.72 63.8796L72.82 59.6996C73.82 57.6996 74.34 55.4796 74.34 53.2396V29.5196C74.34 26.5196 71.92 24.0996 68.92 24.0996C65.92 24.0996 63.5 26.5196 63.5 29.5196V43.9796" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M45.4004 63.8796V53.3396C45.4004 51.7796 45.9004 50.2596 46.8404 48.9996L52.9004 40.8996C53.9204 39.5396 55.4804 38.6796 57.1804 38.5596C58.8804 38.4396 60.5404 39.0596 61.7404 40.2596C63.8004 42.3196 64.0404 45.5996 62.2804 47.9396L58.4804 53.0196" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M5.62 63.8796L3.52 59.6996C2.52 57.6996 2 55.4796 2 53.2396V29.5196C2 26.5196 4.42 24.0996 7.42 24.0996C10.42 24.0996 12.84 26.5196 12.84 29.5196V43.9796" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M30.9402 63.8796V53.3396C30.9402 51.7796 30.4402 50.2596 29.5002 48.9996L23.4402 40.8996C22.4202 39.5396 20.8602 38.6796 19.1602 38.5596C17.4602 38.4396 15.8002 39.0596 14.6002 40.2596C12.5402 42.3196 12.3002 45.5996 14.0602 47.9396L17.8602 53.0196" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_752657_3428">
            <rect width="76.34" height="65.88" fill="white"/>
          </clipPath>
        </defs>
      </svg>';
 
      } else {
        $terms_output .= '<span class="term">' . esc_html( $term->name ) . '</span>';
      }
    }
  }

  // Build the HTML structure
  $output = '<div class="c-card--project"><a class="u-card-link" href="' . $link . '"></a><div class="c-card--project-header">';
  $output .= $svg_output; // Add the terms here
  $output .= '</div><div class="c-card--project--inner"><div>';
  $output .= $terms_output; // Add the terms here
  $output .= '<h2>' . $title . '</h2>';
  $output .= '<p>' . $excerpt . '</p>';
  $output .= '</div><a class="u-more-link" href="' . $link . '"><span>View Program</span> <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path></svg></a>';
  $output .= '</div>';
  $output .= '</div>';

  // Return the HTML structure
  return $output;
}
add_shortcode('maw_project', 'maw_project_shortcode');