<?php get_header(); ?>

<!-- section een -->
<section class="een" id="onzeworsten">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h2>Nibble <span>Italiano</span></h2>
        <h1><?php the_field('nibble_italiano_een'); ?></h1>
        <p><?php the_field('nibble_italiano_twee'); ?></p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 padding-top-20">
      <?php if( get_field('nibble_italiano_photo') ): ?>
        <img src="<?php the_field('nibble_italiano_photo'); ?>" class="img-responsive center-block img-rounded">
      <?php endif; ?>  
      </div>
    </div>
  </div>
</section><!-- /.section een -->

<!-- section twee -->
<section class="twee" id="espanol">
  <div class="container">
    <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-6">
        <h2>Nibble <span>Espanol</span></h2>
        <h1><?php the_field('espanol_header_text'); ?></h1>
        <p><?php the_field('espanol_body_text'); ?></p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 padding-top-20">
      <img src="<?php the_field('espanol_photo'); ?>" class="img-responsive center-block img-rounded">
      </div>
    </div>
  </div>
</section> <!-- section twee -->



<!-- section drie -->
<section style="background-image: url('<?php echo get_template_directory_uri();?>/img/background.gif');" class="drie" id="onzerecepten">
  <div class="container padding">
    <div class="row">
      <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6">
        <img src="<?php the_field('recepten_image'); ?>" class="img-responsive center-block img-height">
      </div>
      <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6">
        <h1><?php the_field('recepten_title'); ?></h1>
        <p><?php the_field('recepten_text'); ?></p>

        <!-- // check if the repeater field has rows of data -->
        <?php if( have_rows('recepten_list') ): ?>
          <!-- // loop through the rows of data -->
            <?php while ( have_rows('recepten_list') ) : the_row(); ?>
        <p><i class="fa <?php the_sub_field('list_icon'); ?> fa-lg" aria-hidden="true"></i><?php the_sub_field('list_text'); ?></p>
            <?php endwhile;
        else :
          // no rows found
        endif; ?>
        <!-- <p><i class="fa fa-cutlery fa-lg" aria-hidden="true"></i>Ook geschikt voor garnering of als vlees ingrediënten.</p> -->

        <!-- tel hoevoeel post_type_recepten er zijn -->
        <a href="#recepten"><button type="button" class="btn btn-warning btn-outline"><?php the_field('recepten_button'); ?></button></a>
      </div>
    </div>
  </div>
</section> <!-- .section drie -->

<!-- section zoek -->
<section class="zoek">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
      <?php
          $count_posts = wp_count_posts('recepten');
          $published_posts = $count_posts->publish;
        ?>
        <p><i class="fa fa-list-ol fa-lg" aria-hidden="true"></i>Er zijn op dit moment <span class="getal-recept"><?php echo $published_posts; ?></span> recepten.</p>
       </div> 
    </div>
  </div>
</section> <!-- .section zoek -->

<!-- section vier -->
<section class="vier" id="recepten">
  <div class="container">
    <!-- Wrapper for slides -->
    <div class="row padding-top-20">
      <div class="col-xs-offset-0 col-xs-6">
          <div class="slider-for">

<?php
  $type = 'recepten';
  $args=array(
    'post_type' => $type,
    'post_status' => 'publish',
    'posts_per_page' => -1
  );

  $my_query = null;
  $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
      
      <?php $class = (get_field('worst_soort') == 'espanol') ? 'orange' : 'rood' ; ?>

      <div>
        <div class="row text-center">
          <div class="col-lg-12">
          <?php if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail('thumbnail', array("class" => "main img-circle center-block"));?>
          <?php } ?>  
            <h2 class="hidden-xs"><?php echo get_the_title() ?>&nbsp;met nibble<span class="<?php echo $class; ?>">&nbsp;<?php the_field('worst_soort'); ?></span></h2>
            <h4 class="visible-xs"><strong class="visible-xs"><?php echo get_the_title() ?>&nbsp;met nibble<span class="<?php echo $class; ?>">&nbsp;<?php the_field('worst_soort'); ?></span></strong></h4>
            <div class="text-height">
              <p><?php the_field('beschrijving'); ?></p>
            </div>
            <div class="button-height">
              <button type="button" class="btn btn-danger btn-outline" data-toggle="modal" data-target="#myModal-<?php the_ID(); ?>">Bekijk recept</button>
            </div>
          </div>
        </div>
      </div>
    
    <?php
      endwhile;
    }
  wp_reset_query();  // Restore global post data stomped by the_post().
    ?>

            <!-- <div>
              <div class="row text-center">
                <div class="col-lg-12">
                  <img src="<?php echo get_template_directory_uri();?>/img/droge_worst.jpg" class="img-circle center-block">
                  <h2 class="hidden-xs">Salade met Nibble <span class="orange">Espanol</span></h2>
                  <h4 class="visible-xs"><strong class="visible-xs">Salade met Nibble <span class="orange">Espanol</span></strong></h4>
                  <div class="text-height">
                    <p>Sapiente, ducimus, voluptas, mollitia voluptatibus nemo explicabo sit blanditiis laborum dolore illum fuga veniam quae expedita libero accusamus quas harum ex numquam necessitatibus provident deleniti tenetur iusto officiis recusandae corporis culpa quaerat?sdfdsf</p>
                  </div>
                  <div class="button-height">
                    <button type="button" class="btn btn-danger btn-outline" data-toggle="modal" data-target="#myModal0">Bekijk recept</button>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div>
              <div class="row text-center">
                <div class="col-lg-12">
                  <img src="<?php echo get_template_directory_uri();?>/img/pistolet.png" class="img-circle center-block">
                    <h2 class="hidden-xs">Pistolet met Nibble <span class="rood">Italiano</span></h2>
                    <h4 class="visible-xs"><strong class="visible-xs">Pistolet met Nibble <span class="rood">Italiano</span></strong></h4>
                    <div class="text-height">
                      <p>Sapiente, ducimus, voluptas, mollitia voluptatibus nemo explicabo sit blanditiis laborum dolore illum fuga veniam quae expedita libero accusamus quas harum ex numquam necessitatibus provident deleniti tenetur iusto officiis recusandae corporis culpa quaerat?89877</p>
                    </div>
                    <div class="button-height">
                      <button type="button" class="btn btn-danger btn-outline" data-toggle="modal" data-target="#myModal2">Bekijk recept</button>
                    </div>
                </div>
              </div>
            </div> -->

            <!-- <div>
              <div class="row text-center">
                <div class="col-lg-12">
                  <img src="<?php echo get_template_directory_uri();?>/img/macaroni.gif" class="img-circle center-block">
                    <h2 class="hidden-xs">Macaroni met Nibble <span class="rood">Italiano</span></h2>
                    <h4 class="visible-xs"><strong class="visible-xs">Macaroni met Nibble  <span class="rood">Italiano</span></strong></h4>
                    <div class="text-height">
                      <p>Sapiente, ducimus, voluptas, mollitia voluptatibus nemo explicabo sit blanditiis laborum dolore illum fuga veniam quae expedita libero accusamus quas harum ex numquam necessitatibus provident deleniti tenetur iusto officiis recusandae corporis culpa 
                      quaerat?</p>
                    </div>
                    <div class="button-height">
                      <button type="button" class="btn btn-danger btn-outline" data-toggle="modal" data-target="#myModal3">Bekijk recept</button>
                    </div>
                </div>
              </div>
            </div> -->

            <!-- <div>
              <div class="row text-center">
                <div class="col-lg-12">
                  <img src="<?php echo get_template_directory_uri();?>/img/macaroni.gif" class="img-circle center-block">
                    <h2 class="hidden-xs">Ovenschotel met Nibble <span class="orange">Espanol</span></h2>
                    <h4 class="visible-xs"><strong class="visible-xs">Ovenschotel met Nibble <span class="rood">Espanol</span></strong></h4>
                    <div class="text-height">
                      <p>Sapiente, ducimus, voluptas, mollitia voluptatibus nemo explicabo sit blanditiis laborum dolore illum fuga veniam quae expedita libero accusamus quas harum ex numquam necessitatibus provident deleniti tenetur iusto officiis recusandae corporis culpa 
                      quaerat?</p>
                    </div>
                    <div class="button-height">
                      <button type="button" class="btn btn-danger btn-outline" data-toggle="modal" data-target="#myModal1">Bekijk recept</button>
                    </div>
                </div>
              </div>
            </div> -->

          </div> <!-- .slider-for -->
      </div> <!-- .col-xs-offset-3 col-xs-6 -->
    </div> <!-- .Wrapper for slides -->
  </div> <!-- .slider -->

  <!-- List for slides -->
  <section class="slick">
    <div class="container">

      <!-- arrow -->
      <div>
        <span><i class="prev fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i></span>
        <span><i class="next fa fa-arrow-circle-right fa-lg pull-right" aria-hidden="true"></i></span>
      </div><!-- .arrow -->

      <!-- Slide tittle -->
      <div class="slider-nav">
      <?php
        $type = 'recepten';
        $args=array(
          'post_type' => $type,
          'post_status' => 'publish',
          'posts_per_page' => -1,
          );

        $my_query = null;
        $my_query = new WP_Query($args);
          if( $my_query->have_posts() ) {
            while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php $class = (get_field('worst_soort') == 'espanol') ? 'orange' : 'rood' ; ?>
              
              <div>
                <p class="hover"><?php echo get_the_title() ?>&nbsp;met nibble<span class="<?php echo $class; ?>" >&nbsp;<?php the_field('worst_soort'); ?></span></p>
              </div>

            <?php
            endwhile;
          }
        wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
        <!-- <div>
          <p>Salade met Nibble <span class="orange">Espanol</span></p>
        </div> -->
        <!-- <div>
          <p>Pistolet met Nibble <span class="rood">Italiano</span></p>
        </div> -->
        <!-- <div>
          <p>Macaroni met Nibble <span class="rood">Italiano</span></p>
        </div> -->
        <!-- <div>
          <p>Ovenschotel met Nibble <span class="orange">Espanol</span></p>
        </div> -->
      </div><!-- .Slide tittle -->
    </div>
    
  </section><!-- .List for slides -->

  <?php
    $type = 'recepten';
    $args=array(
      'post_type' => $type,
      'post_status' => 'publish',
      'posts_per_page' => -1
    );

    $my_query = null;
    $my_query = new WP_Query($args);
      if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
      
        <?php $class = (get_field('worst_soort') == 'espanol') ? 'orange' : 'rood' ; ?>

    <!-- modal0 -->
    <div class="modal fade" id="myModal-<?php the_ID(); ?>" role="dialog">
      <div class="modal-dialog">
        
        <!-- modal-content -->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-tittle text-center"><?php echo get_the_title() ?>&nbsp;met nibble<span class="<?php echo $class; ?>">&nbsp;<?php the_field('worst_soort'); ?></span></h3>
          </div>
          <div class="modal-body">
            <h4>Ingredienten</h4>
            <ul class="text-muted">
            <!-- // check if the repeater field has rows of data -->
              <?php if( have_rows('ingredienten') ): ?>

            <!-- // loop through the rows of data -->
              <?php while ( have_rows('ingredienten') ) : the_row(); ?>
              <li><?php the_sub_field('list');?></li>
              <?php endwhile;
              else :
                // no rows found
              endif;
            ?>
              <!-- <li>200 gram Huls Actherhoekse meetworst</li>
              <li>2 sjalotjes of (rode) ui</li>
              <li>1 appel</li>
              <li>2 eetlepels bosvruchtenjam</li> -->
            </ul>
            <h4>Bereiding</h4>
            <p class="text-muted"><?php the_field('bereiding'); ?></p>
            <p><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Tips:&nbsp;<?php the_field('tips'); ?></p>
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <?php if( get_field('afbeelding_een') ): ?>
                  <img src="<?php the_field('afbeelding_een'); ?>" class="secondary img-responsive img-rounded center-block">
                  <?php endif; ?>                  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <?php if( get_field('afbeelding_twee') ): ?>
                  <img src="<?php the_field('afbeelding_twee'); ?>" class="secondary img-responsive img-rounded center-block">
                  <?php endif; ?>                  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <?php if( get_field('afbeelding_drie') ): ?>
                  <img src="<?php the_field('afbeelding_drie'); ?>" class="secondary img-responsive img-rounded center-block">                  
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-outline" data-dismiss="modal">Close</button>
          </div>
        </div>
      
      </div>
    </div><!-- .modal0 -->
    
    <?php
      endwhile;
        }
    wp_reset_query();  // Restore global post data stomped by the_post().
    ?>
    <!-- modal1 -->
    <!-- <div class="modal fade" id="myModal1" rol="dialog">
      <div class="modal-dialog"> -->
        
        <!-- modal-content -->
        <!-- <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-tittle text-center">Ovenschotel met Nibble <span class="orange">Espanol</span></h3>
          </div>
          <div class="modal-body">
            <h4>Ingredienten</h4>
            <ul class="text-muted">
              <li>350 gram gemengde sla</li>
              <li>200 gram Huls Actherhoekse meetworst</li>
              <li>2 sjalotjes of (rode) ui</li>
              <li>1 appel</li>
              <li>2 eetlepels bosvruchtenjam</li>
            </ul>
            <h4>Bereiding</h4>
            <p class="text-muted">Was de diverse soorten sla en snijd de grote bladeren in reepjes. Verdeel de Huls Achterhoekse metworst in plakjes. Rooster de pijnboompitten goudbruin in een droge koekenpan. Pel de sjalotjes en snipper deze of verdeel ze in ringen. Schil de appel, verwijder het klokhuis en snijd het vruchtvlees in stukjes. Verwarm voor de dressing de bosvruchtenjam met azijn en honing. Laat dit iets afkoelen en meng er de appel, citroensap en zonnebloemolie door. Verdeel de Achterhoekse metworst, pijnboompitten en sjalotjes over de gemengde sla. Giet de dressing erover. Presenteer er bruin brood of roggebrood bij.</p>
            <p><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Tips: Lekker met broccoli en krieltjes</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-outline" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div> --> 

    <!-- modal2 -->
    <!-- <div class="modal fade" id="myModal2" rol="dialog">
      <div class="modal-dialog"> -->
        
        <!-- modal-content -->
        <!-- <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-tittle text-center">Pistolet met Nibble <span class="rood">Italiano</span></h3>
          </div>
          <div class="modal-body">
            <h4>Ingredienten</h4>
            <ul class="text-muted">
              <li>350 gram gemengde sla</li>
              <li>200 gram Huls Actherhoekse meetworst</li>
              <li>2 sjalotjes of (rode) ui</li>
              <li>1 appel</li>
              <li>2 eetlepels bosvruchtenjam</li>
            </ul>
            <h4>Bereiding</h4>
            <p class="text-muted">Was de diverse soorten sla en snijd de grote bladeren in reepjes. Verdeel de Huls Achterhoekse metworst in plakjes. Rooster de pijnboompitten goudbruin in een droge koekenpan. Pel de sjalotjes en snipper deze of verdeel ze in ringen. Schil de appel, verwijder het klokhuis en snijd het vruchtvlees in stukjes. Verwarm voor de dressing de bosvruchtenjam met azijn en honing. Laat dit iets afkoelen en meng er de appel, citroensap en zonnebloemolie door. Verdeel de Achterhoekse metworst, pijnboompitten en sjalotjes over de gemengde sla. Giet de dressing erover. Presenteer er bruin brood of roggebrood bij.</p>
            <p><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Tips: Lekker met broccoli en krieltjes</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-outline" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>  --><!-- .modal2 -->

    <!-- modal3 -->
    <!-- <div class="modal fade" id="myModal3" rol="dialog">
      <div class="modal-dialog"> -->
        
        <!-- modal-content -->
        <!-- <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-tittle text-center">Macaroni met Nibble <span class="rood">Italiano</span></h3>
          </div>
          <div class="modal-body">
            <h4>Ingredienten</h4>
            <ul class="text-muted">
              <li>350 gram gemengde sla</li>
              <li>200 gram Huls Actherhoekse meetworst</li>
              <li>2 sjalotjes of (rode) ui</li>
              <li>1 appel</li>
              <li>2 eetlepels bosvruchtenjam</li>
            </ul>
            <h4>Bereiding</h4>
            <p class="text-muted">Was de diverse soorten sla en snijd de grote bladeren in reepjes. Verdeel de Huls Achterhoekse metworst in plakjes. Rooster de pijnboompitten goudbruin in een droge koekenpan. Pel de sjalotjes en snipper deze of verdeel ze in ringen. Schil de appel, verwijder het klokhuis en snijd het vruchtvlees in stukjes. Verwarm voor de dressing de bosvruchtenjam met azijn en honing. Laat dit iets afkoelen en meng er de appel, citroensap en zonnebloemolie door. Verdeel de Achterhoekse metworst, pijnboompitten en sjalotjes over de gemengde sla. Giet de dressing erover. Presenteer er bruin brood of roggebrood bij.</p>
            <p><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Tips: Lekker met broccoli en krieltjes</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-outline" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div> --> <!-- .modal3 -->

</section><!-- .section vier -->

<?php
// om de telefoon nummer te stijlen {spatie tussen maken}
$str = get_field('phone');
$arr1 = str_split($str);
$arr2 = str_split($str, 1);

// print_r($arr2);
// echo '<br>';
// echo $arr2[0] . $arr2[1] . '-' . $arr2[2] . $arr2[3] . ' ' . $arr2[4] . $arr2[5] . ' ' . $arr2[6] . $arr2[7] . ' ' . $arr2[8] . $arr2[9];
// echo '<br>';
$phone = $arr2[0] . $arr2[1] . '-' . $arr2[2] . $arr2[3] . ' ' . $arr2[4] . $arr2[5] . ' ' . $arr2[6] . $arr2[7] . ' ' . $arr2[8] . $arr2[9];
?>

<!-- section vijf -->
<section style="background-image: url('<?php echo get_template_directory_uri();?>/img/header.gif');" class="vijf" id="contact">
  <div class="container padding">
    <div class="row text-center">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h3><i class="fa fa-phone fa-2x" aria-hidden="true"></i></h3>
        <ul>
          <li><a href="tel:<?php the_field('phone'); ?>">Telefoon:&nbsp;<?php echo $phone; ?></a></li>
          <li><a href="mailto:youremailadress@lalala.com">Email-adres:&nbsp;<?php the_field('email'); ?></a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h3><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></h3>
        <ul>
        <?php
        // check if the repeater field has rows of data
        if( have_rows('adres') ):
          // loop through the rows of data
          while ( have_rows('adres') ) : the_row();
        ?>
          <li><?php the_sub_field('list'); ?></li>
          <?php 
          endwhile;

            else :
            // no rows found
            endif;

          ?>
          <!-- <li>Zuivelstraat 1</li>
          <li>9269 PW Veenwouden</li> -->
        </ul>
      </div>
    </div>
  </div>
</section><!-- .section vijf -->

<!-- section contactformulier -->
<section class="contactformulier">
  <div class="container text-center">
    <div class="col-lg-12">
      <h1>Contact Formulier</h1>
    </div>
  </div>
  <div class="container">
    <div class="controls">
      <?php echo do_shortcode( '[contact-form-7 id="136" title="Contact Formulier"]' ); ?>

        <!-- <div class="row">
            <div class="col-md-6 padding-bottom-20">
                <label for="form_name">Voornaam *</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Voer je voor naam in *" required="required">
            </div>
            <div class="col-md-6 padding-bottom-20">
                <label for="form_lastname">Achternaam *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Voer je achternaam in *" required="required">
            </div>
            <div class="col-md-6 padding-bottom-20">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Voer je email-adres in *" required="required">
            </div>
            <div class="col-md-6 padding-bottom-20">
                <label for="form_phone">Telefoon</label>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Voer je telefoonnummer in">
            </div>
            <div class="col-md-12 padding-bottom-20">
                <label for="form_message">Bericht *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Voer je bericht in *" rows="4" required="required"></textarea>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="submit" class="btn btn-danger btn-outline" value="Verzenden">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <p class="text-muted pull-right"><strong>*</strong> Dit veld is verplicht.</p>
            </div>
        </div> -->

    </div>
  </div>
</section><!-- .section contactformulier -->

<!-- section map -->
<section class="map">
  <div id="map" data-lat="<?php the_field('lat'); ?>" data-lng="<?php the_field('lng'); ?>" data-naam="<?php the_field('naam_bedrijf'); ?>" data-straat="<?php the_field('straat'); ?>" data-postcode="<?php the_field('postcode'); ?>">
          
  </div>          
</section><!-- .section map -->


<?php get_footer(); ?>