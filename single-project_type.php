<?php get_header(); ?>


<div class="o-layout-row">
  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/WebPageElement">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <section class="editor-content  clearfix">
        <?php the_content(); ?>
      </section> 
      <!-- /editor-content -->
   
    <?php endwhile; endif; // END main loop (if/while) ?>
  </main>
  <!-- /container -->
</div>




<?php get_footer(); ?>
