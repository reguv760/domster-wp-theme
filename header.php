<html>
  <head>
    <meta charset="UTF-8">
    <title><?php wp_title('|', true, 'right') ?></title>
    <!-- <link rel="stylesheet" href="css/basic.css"> -->
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css"> -->
  </head>

  <body <?php body_class(); ?> >
    <div class="container">
      <!-- <nav class="mobileNav">
        <ul class="mobileNav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Photos</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </nav> -->

        <?php
          $defaults = array(
            'theme_location'  => 'main-menu',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'mobileNav',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
          );
          wp_nav_menu( $defaults ); ?>

      <aside class="leftCol">
        <!-- <nav>
          <ul class="mainNav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </nav> -->

        <?php
          $defaults = array(
            'theme_location'  => 'main-menu',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'mainNav',
            'container_id'    => '',
            'menu_class'      => 'mainNav-links',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
          );
          wp_nav_menu( $defaults ); ?>
