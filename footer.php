        <footer>
          <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
        </footer>
      </div>

      <div class="mobileFooter">
        <!-- <ul class="socialIcons">
          <li class="newsletter">
            <p>Sign up for our Newsletter</p>
          </li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul> -->
        <?php if ( dynamic_sidebar( 'social-icons' ) ); ?>
      </div>
    </div>

  </body>

 <!--  init js with this::: -->
 <?php wp_footer(); ?>
</html>
