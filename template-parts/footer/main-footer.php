<footer class="main-footer">
  <div class="container">
    <div class="main-footer__wrap">

      <a href="#" class="main-footer__logo column-1">
        <?php get_template_part('template-parts/icons/logo-footer'); ?>
      </a>
      <div class="main-footer__column column-2">
        <h4 class="main-footer__title">Our team</h4>
        <?php wp_nav_menu([
          'theme_location'  => 'our-team',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'main-footer__list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ]); ?>
      </div>
      <div class="main-footer__column column-3">
        <h4 class="main-footer__title">More</h4>
        <?php wp_nav_menu([
          'theme_location'  => 'more',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'main-footer__list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ]); ?>
      </div>
      <div class="main-footer__column column-4">
        <h4 class="main-footer__title">Connect </h4>
        <?php wp_nav_menu([
          'theme_location'  => 'socials',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'main-footer__list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ]); ?>
      </div>
      <div class="main-footer__subscribe column-5">
        <h3 class="main-footer__title">Subscribe to get latest updates</h3>
        <div class="main-footer__group">
          <input class="main-footer__input" type="text" placeholder="Your email">
          <button class="main-footer__btn">Subscribe</button>
        </div>
      </div>
    </div>
  </div>
</footer>