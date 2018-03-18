<html>
  <head>
    <meta charset="UTF-8">
    <title><?php wp_title('|', true, 'right') ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >
    <div class="container">

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
