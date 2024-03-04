<?php get_header(); ?>

  <div class="o-layout-row">
    <main class="o-wrapper-wide" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/WebPageElement">
      <section class="editor-content">
        <div class="c-404-layout alignwide">
          <div>
            <div>
              <p><strong>404 error</strong></p>
              <h1>Page not found</h1>
              <p>Sorry, the page you are looking for does not exist.
                         It may have been moved or deleted.
                         Return to the <a href="<?php echo home_url(); ?>">homepage</a>.</p>
            </div>
            <form role="search" method="get" id="search-form" class="c-search-form" action="<?php echo home_url( '/' ); ?>">
              <div>
                <label for="s" class="u-visually-hidden">Search our site:</label>
                <input type="search" id="s" name="s" value="" class="search-input" placeholder="Search our site" />
                <button type="submit" id="search-submit" class="search-submit">Search</button>
              </div>
            </form>
          </div>
          <div>
            <img src="<?php bloginfo( 'template_url' ) ?>/img/404_illustration.svg" alt="404 image" />
          </div>
        </div>
      </section>
      <!-- /editor-content -->
    </main>
    <!-- /container -->
  </div>
  <!-- /layout-row-->

<?php get_footer(); ?>
