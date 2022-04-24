  <footer class="footer bg-black">
    <div class="container">
      <div class="col-md-12"><?php echo '&copy; ' . date('Y') . ' ' . get_bloginfo( 'name' ); ?></div>
    </div>
    <div class="socials">
      <ul>

        <?php $socials_posts = get_posts( [ 'category_name' => 'Socials', 'numberposts' => -1, 'order' => 'ASC', 'orderby' => 'date' ] );
          foreach ($socials_posts as $post) {
            setup_postdata( $post );
            echo '<li><a href="' . $post -> url . '" target="blank" title="' . get_the_title() . '"><i class="fa-brands ' . $post -> icon . '"></i></a></li>';
          }
        wp_reset_postdata(); ?>

      </ul>
    </div>
  </footer>

  <div class="hidden overflow">

    <?php $portfolio_posts = get_posts( [ 'category_name' => 'Portfolio', 'numberposts' => -1, ] );
      foreach ($portfolio_posts as $post) {
        setup_postdata( $post ); ?>
        <div class="hidden portfolio__description" id="<?php echo get_post_meta( $post -> ID, 'project_id', true ); ?>">
          <h3><?php the_title( ); ?></h3>
          <div class="portfolio__description-wrapper">
            <?php the_content( ); ?>
            <?php the_post_thumbnail( ); ?>
          </div>
        </div>
      <?php }
    wp_reset_postdata(); ?>

  </div>

  <?php wp_footer(); ?>
</body>
</html>