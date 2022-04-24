<?php get_header(); ?>

<div class="container__wrapper">
  <section id="about" class="about bg-dark">
    <div class="title-wrapper" data-aos="fade-up">
      <h2 class="sec-title"><?php echo get_cat_name( get_cat_ID( 'About me' ) ); ?></h2>
      <div class="sec-description">
        <?php echo category_description( get_cat_ID( 'About me' ) ); ?>
      </div>
    </div>
    <div class="sec-content">
      <div class="container">
        <div class="row">

            <?php $brife_posts = get_posts( [ 'include' => 9 ] );
              foreach ($brife_posts as $post) {
                setup_postdata( $post ); ?>
                <div class="col-md-4 order-md-2 person">
                  <h3 class="col-title">It's me</h3>
                  <img class="photo" src="<?php the_post_thumbnail_url( ); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" />
                </div>
                <div class="col-md-4 order-md-1 brief">
                  <h3 class="col-title"><?php the_title( ); ?></h3>
                  <?php the_content( ); ?>
                </div>
              <?php }
            wp_reset_postdata(); ?>

            <?php $person_posts = get_posts( [ 'include' => 20 ] );
              foreach ($person_posts as $post) {
                setup_postdata( $post ); ?>
                <div class="col-md-4 order-3">
                  <h3 class="col-title"><?php the_title( ); ?></h3>
                  <h2 class="name"><?php echo get_bloginfo( 'name' ); ?></h2>
                  <?php the_content( );
              }
            wp_reset_postdata(); ?>
              
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
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="personal" class="personal bg-light">
    <div class="title-wrapper" data-aos="fade-up">
      <h2 class="sec-title"><?php echo get_cat_name( get_cat_ID( 'Personal' ) ); ?></h2>
      <div class="sec-description">
        <?php echo category_description( get_cat_ID( 'Personal' ) ); ?>
      </div>
    </div>
    <div class="sec-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 left">
            <h3><?php echo get_cat_name( 6 ); ?></h3>
            <div class="icon"><i class="fa-solid fa-laptop-code"></i></div>

            <?php $portfolio_posts = get_posts( [ 'category_name' => 'Experience', 'numberposts' => -1, ] );
              foreach ($portfolio_posts as $post) {
                setup_postdata( $post ); ?>
                <div class="item-wrapper">
                <div class="date"><?php echo get_post_meta( get_the_ID(), 'date', true ); ?></div>
                <div class="description">
                  <span class="job"><?php echo get_post_meta( get_the_ID(), 'job', true ); ?></span>
                  <span class="profession"><?php the_title( ); ?></span>
                </div>
                <?php the_content( ); ?>
              </div>
              <?php }
            wp_reset_postdata(); ?>

          </div>

          <div class="col-md-6 col-sm-6 right">
            <h3><?php echo get_cat_name( 7 ); ?></h3>
            <div class="icon"><i class="fa-solid fa-graduation-cap"></i></div>

            <?php $portfolio_posts = get_posts( [ 'category_name' => 'Skills', 'numberposts' => -1, ] );
              foreach ($portfolio_posts as $post) {
                setup_postdata( $post ); ?>
                <div class="item-wrapper">
                <div class="date"><?php echo get_post_meta( get_the_ID(), 'date', true ); ?></div>
                <div class="description">
                  <span class="profession"><?php the_title( ); ?></span>
                  <span class="job"><?php echo get_post_meta( get_the_ID(), 'school', true ); ?></span>
                </div>
                <?php the_content( ); ?>
              </div>
              <?php }
            wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio bg-black">
    <div class="title-wrapper" data-aos="fade-up">
      <h2 class="sec-title"><?php echo get_cat_name( get_cat_ID( 'Portfolio' ) ); ?></h2>
      <div class="sec-description">
        <?php echo category_description( get_cat_ID( 'Portfolio' ) ); ?>
      </div>
    </div>
    <div class="sec-content">
      <div class="container">
        <div class="row">
          <div class="filter controls">
            <ul>
              <li class="active" data-filter="all">All projects</li>
              
              <?php $tags = get_tags( );
                foreach ($tags as $tag) {
                  echo '<li data-filter=".' . $tag -> slug . '">' . $tag -> name . '</li>';
              } ?>

            </ul>
          </div>
          <div id="portfolio__grid" class="row">

            <?php $portfolio_posts = get_posts( [ 'category_name' => 'Portfolio', 'numberposts' => 8, 'order' => 'ASC' ] );
              foreach ( $portfolio_posts as $post ) {
                setup_postdata( $post );
                $tags = wp_get_post_tags( $post -> ID );
                if ( $tags ) {
                  foreach ( $tags as $tag ) {
                    echo '<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio__item ' . $tag -> slug . '">';
                  }
                }
                the_post_thumbnail( ); ?>
                <div class="portfolio__item-content">
                    <h3><?php the_title( ); ?></h3>
                    <?php the_excerpt( ); ?>
                    <a href="#<?php echo get_post_meta( $post -> ID, 'project_id', true ); ?>">View</a>
                  </div>                
                </div>
              <?php }
            wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contacts" class="contacts bg-light">
    <div class="title-wrapper" data-aos="fade-up">

          <h2 class="sec-title"><?php echo get_cat_name( get_cat_ID( 'Contacts' ) ); ?></h2>
          <div class="sec-description">
            <?php echo category_description( get_cat_ID( 'Contacts' ) ); ?>
          </div>

    </div>
    <div class="sec-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 left">

            <?php $options = get_option( 'sample_theme_options' ); ?>
            <div class="contact__wrapper">
              <i class="fa-regular fa-location-dot"></i>
              <h3>My Address:</h3>
              <?php echo $options['addresstext']; ?>
            </div>
            <div class="contact__wrapper">
              <i class="fa-regular fa-phone"></i>
              <h3>My Phone:</h3>
              <p>
                <?php echo $options['phonetext']; ?>
              </p>
            </div>
            <div class="contact__wrapper">
              <i class="fa-regular fa-window-maximize"></i>
              <h3>My Web Site:</h3>
              <p>
                <a href="<?php echo $options['sitetext']; ?>" target="_blank"><?php echo $options['sitetext']; ?></a>
              </p>
            </div>
          </div>
          <div class="col-md-6 right">
            <form action="https://formspree.io/f/meqnrdon" method="post" class="contact__form">
              <label>Name: </label>
              <input type="text" name="name" placeholder="Enter your name..." required>
              <label>Email: </label>
              <input type="email" name="email" placeholder="Enter your email..." required>
              <label>Message: </label>
              <textarea type="text" rows="8" name="message" placeholder="Enter your message..." required></textarea>
              <button type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>    
</div>

<?php get_footer(); ?>