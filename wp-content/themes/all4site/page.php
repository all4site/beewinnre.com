<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package all4site
 */

get_header();
?>
 <div class="headerMain grid" style="background: url('<?php echo get_theme_mod(header_main); ?>');">
    <div class="aboutHeaderMain grid">
      <div class="smallMenuWrapper">
        <div class="smallMenu">
          <div class="text"><span>menu</span></div>
          <div class="hamburger hamburger--slider">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div>
          <div class="smallMenuBox">
            <div class="fab fa-facebook-f z-depth-2"></div>
            <div class="fab fa-youtube z-depth-2"></div>
            <div class="fab fa-instagram z-depth-2"></div>
            <div class="fas fa-search z-depth-2"></div>
          </div>
        </div>
      </div>
      <div class="smallMenuShow">
        <div class="smallMenuShowWrapper">
          <div class="hamburger hamburger--slider is-active">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div><span>menu</span>
          <ul class="grid"><a href="blog.html" class="grid">
              <li>БЛОГ</li></a><a href="#!" class="grid">
              <li>test2</li></a><a href="#!" class="grid">
              <li>test3</li></a><a href="#!" class="grid">
              <li>test4</li></a><a href="#!" class="grid">
              <li>test5</li></a><a href="#!" class="grid">
              <li>test6</li></a><a href="#!" class="grid">
              <li>test7</li></a></ul>
          <div class="smallMenuShowBox">
            <div class="circle">
              <div class="fab fa-facebook-f"></div>
            </div>
            <div class="circle">
              <div class="fab fa-youtube"></div>
            </div>
            <div class="circle">
              <div class="fab fa-instagram"></div>
            </div>
            <div class="circle">
              <div class="fas fa-search"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="logoAbout grid"><img src="<?php echo get_theme_mod(header_logo_about); ?>" alt=""/></div>
      <div class="infoAbout grid"><span><?php echo get_theme_mod(top_header_small_text); ?></span><span>тел: <?php echo get_theme_mod(top_header_phone); ?>
</span><span>email: <?php echo get_theme_mod(top_header_email); ?></span></div>
      <div class="textAbout grid">
        <div class="textAboutBlock">
          <div class="fas fa-spinner fa-spin"></div>
          <h4><?php echo get_theme_mod(top_header_big_text_one); ?></h4>
        </div>
        <div class="textAboutBlock">
          <div class="fas fa-spinner fa-spin"></div>
          <h4><?php echo get_theme_mod(top_header_big_text_two); ?></h4>
        </div>
        <div class="textAboutBlock">
          <div class="fas fa-spinner fa-spin"></div>
          <h4><?php echo get_theme_mod(top_header_big_text_tree); ?></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="fullWelcome">
    <div class="wrapper">
      <div class="welcome grid">
				<?php
				global $post;
				$args = array('category_name' => 'home-top');
				$myposts = get_posts($args);
				foreach ($myposts as $post) {setup_postdata($post);
						?>
        <div class="imgWelcome"><?php the_post_thumbnail(); ?></div>
        <div class="textWelcome">
					<h2><?php the_title();?></h2>

          <p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>"><div class="more"><span>подробнее...</span></div></a>

					<?php
					}
					wp_reset_postdata();
						?>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="blog grid"><a href="#!" class="item grid">
        <h4>blog</h4></a><a href="#!" class="item grid z-depth-2">
        <h4>отношения</h4></a><a href="#!" class="item grid z-depth-2">
        <h4>развитие</h4></a><a href="#!" class="item grid z-depth-2">
        <h4>баланс</h4></a><a href="#!" class="item grid z-depth-2">
        <h4>деньги</h4></a><a href="#!" class="item grid z-depth-2">
        <h4>здоровье</h4></a></div>
    <div class="aboutProgect grid">
      <h2>о  проекте beewinner</h2>
      <p>Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
      <div class="more"><span>подробнее...</span></div>
    </div>
  </div>
  <div class="fullImg"><span>just do it and be</span><br/><span>a winner in your life!</span></div>
  <div class="wrapper">
    <div class="gift grid">
      <div class="iconGift grid">
        <div class="fas fa-gift"></div>
      </div>
      <div class="giftHeader">
        <h2>для вдохновения</h2>
      </div>
      <div class="giftBottom"><span>Подпишись на новости и получи подарок -</span><br/><span>видое - урок</span><br/><span>"Как навести порчу"</span></div><a href="#!" class="btn pulse">хочу</a>
    </div>
  </div>
  <div class="wrapper">
    <h2>тренинги</h2>
    <div class="trenings grid">
      <div class="box grid">
        <div class="boxInside grid">
          <h4>хочу замуж</h4>
          <div class="far fa-heart"></div><span>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</span><a href="#!" class="btn">подробнее</a>
        </div>
      </div>
      <div class="box grid">
        <div class="boxInside grid">
          <h4>хочу замуж</h4>
          <div class="far fa-heart"></div><span>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</span><a href="#!" class="btn">подробнее</a>
        </div>
      </div>
      <div class="box grid">
        <div class="boxInside grid">
          <h4>хочу замуж</h4>
          <div class="far fa-heart"></div><span>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</span><a href="#!" class="btn">подробнее</a>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
