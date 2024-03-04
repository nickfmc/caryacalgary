<?php get_header(); ?>

<div class="o-layout-row">
  <main class="o-wrapper-wide" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/WebPageElement">
  <span class="c-result-eyebrow">Search Results for:</span>
    <h1 class="">
       <?php echo esc_attr(get_search_query()); ?>
      </h1>
    <div class="c-results-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?> role="article">
        <div class="c-result-content">
          <header class="c-article-header">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      
          </header>
          <!-- /c-article-header -->
          <section class="c-excerpt-content">
            <?php echo gdt_content_excerpt(95); ?>
          </section>
          <!-- /c-excerpt-content -->
        </div>
      </article>
      <!-- /article -->
    <?php endwhile; ?>
    </div>

      <?php get_template_part( 'template-part/post/post-nav' ); ?>

    <?php else : ?>
      <article class="PostNotFound">
        <header class="ArticleHeader">
          <h4><?php _e("Sorry, No Results.", "flexdev"); ?></h4>
        </header>
        <section class="EntryContent">
          <p><?php _e("Please try another search.", "flexdev"); ?></p>
        </section>
      </article>
    <?php endif; ?>

  </main>
</div>
<!-- /layout-row-->

<?php get_footer(); ?>
