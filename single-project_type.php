<?php get_header(); ?>
<div class="c-project-banner">
  <?php echo the_post_thumbnail('full'); ?>
  <div class="o-wrapper-wide">
    <div class="c-project-banner-inner">
      <h1><?php  the_title(); ?></h1>
      <div class="c-meta-pill">
      <?php
  $terms = get_the_terms( get_the_ID(), 'taxonomyname_tax' );
  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    foreach ( $terms as $term ) {
      echo '<span class="term">' . esc_html( $term->name ) . '</span>';
    }
  }
  ?>
  </div>
    </div>
  </div>
  
</div>

<div class="o-layout-row">
  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/WebPageElement">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <section class="editor-content  clearfix">
        <?php the_content(); ?>
      </section> 
      <!-- /editor-content -->
      <div class="c-post-footer">
          <div class="o-wrapper-wide">
            <!-- AddToAny BEGIN -->
            <div class="c-social-share">
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            
                <div>
                  <a  class="c-return-link" href="/blog">View all programs</a>
                  <a class="a2a_button_facebook"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="auto" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg></a>
                            <a class="a2a_button_x"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="auto" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a>
                  <a class="a2a_button_linkedin"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="auto" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg></a>
                  <a class="a2a_button_email"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="auto" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg></a>
                  <script async src="https://static.addtoany.com/menu/page.js"></script>
                </div>
                </div>
            
              </div>
            <!-- AddToAny END -->
          </div>
        </div>
    <?php endwhile; endif; // END main loop (if/while) ?>
  </main>
  <!-- /container -->
</div>




<?php get_footer(); ?>
