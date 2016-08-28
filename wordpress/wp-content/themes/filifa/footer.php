<!-- footer -->
<footer>
  <div class="container">
    <div class="row text-center">
      <ul>
      <?php
        // check if the repeater field has rows of data
        if( have_rows('socialmedia') ):

        // loop through the rows of data
        while ( have_rows('socialmedia') ) : the_row();
      ?>
        <a href="<?php the_sub_field('link'); ?>" target="_blank"><li><i class="fa <?php the_sub_field('icon'); ?>" aria-hidden="true"></i></li></a>
      <?php 
        endwhile;
          else :
            // no rows found
          endif;
      ?>
        <!-- <a href="#"><li><i class="fa fa-twitter" aria-hidden="true"></i></li></a>
        <a href="#"><li><i class="fa fa-youtube-play" aria-hidden="true"></i></li></a>
        <a href="#"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a> -->
      </ul>

     
      <p>Copyright <?php echo date("Y");?> <span>&copy;</span><a href="<?php echo bloginfo('url'); ?>" class="color">&nbsp;<?php echo bloginfo('name'); ?></p></a>
    </div>
  </div>
</footer><!-- .footer -->

<!-- slideout -->
<aside class="slideout hidden-xs">
  <div class="pollSlider">
    <header>
    <div class="tittle-background-color">
      <h4><?php the_field('header_text'); ?></h4>
    </div>
      </header>
      <tbody>
        <ul>
        
        <?php
          // check if the repeater field has rows of data
          if( have_rows('slideout_list') ):

            // loop through the rows of data
            while ( have_rows('slideout_list') ) : the_row();
        ?>
          <li><i class="fa fa-check" aria-hidden="true"></i><?php the_sub_field('list'); ?></li>
          <!-- <li><i class="fa fa-check" aria-hidden="true"></i>Groothandel</li>
          <li><i class="fa fa-check" aria-hidden="true"></i>Kiosk</li>
          <li><i class="fa fa-check" aria-hidden="true"></i>Avondwinkel</li> -->
        <?php 
          endwhile;
            else :
              // no rows found
            endif;
        ?>
        </ul>
      </tbody>
  </div>
  <div id="pollSlider-button"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></div>
</aside><!-- .slideout -->

    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->

    <!-- map -->
    <!-- <script src="js/map.js"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> -->

    <!-- nav-scroll -->
    <!-- <script src="js/nav-scroll.js"></script> -->
    
    <!-- smooth-scroll -->
    <!-- <script src="js/smooth-scroll.js"></script> -->

    <!-- scrollspy -->
    <!-- <script src="js/scrollspy.js"></script> -->

    <!-- slick -->
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <!-- <script src="js/slick.min.js"></script> -->
    <!-- <script src="js/slick-slider-syncing.js"></script> -->

    <!-- svg -->
    <!-- <script src="js/svgicons-config.js"></script> -->
    <!-- <script src="js/svgicons.js"></script> -->
    <!-- <script src="js/functioncall-svg.js"></script> -->
    
    <!-- slideout --> 
    <!-- <script src="js/slideout.js"></script> -->
    
<?php wp_footer();?>

</body>

</html>