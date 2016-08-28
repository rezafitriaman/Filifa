<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Filifa">
    <meta name="author" content="DBK.nl">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/favicon.png">

    <title><?php the_title();?></title>
    
<?php wp_head();?>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <!-- <link href="css/main.css" rel="stylesheet"> -->

    <!-- slick -->
    <!-- <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet"> -->

    <!-- Font Awesome CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> -->

    <!-- Animate CSS -->
    <!-- <link rel="stylesheet" href="css/animate.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" /> -->

    <!-- <script src="js/snap.svg-min.js"></script>
    <script src="js/modernizr.custom.js"></script> -->

    <!-- <link href='https://fonts.googleapis.com/css?family=Neuton:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Mr+De+Haviland' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php if( get_field('background_header_img') ): ?>
<div style="background-image: url('<?php the_field('background_header_img'); ?>');" class="wide" id="home">
<?php endif; ?>

<!-- Navigation -->
   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand" href="#home"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Filifa"></a>
          <section type="" class="navbar-toggle si-icons-default" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="si-icon si-icon-hamburger-cross" data-icon-name="hamburgerCross"></span>
          </section>
        
      <!-- <a class="navbar-brand" href="#">Filifa</a> -->
        </div>
          <div class="collapse navbar-collapse text-center">
            <?php
              wp_nav_menu( array(
              'menu'              =>  'primary',
              'theme_location'    =>  'primary',
              'depth'             =>  2,
              'container_id'      =>  'bs-example-navbar-collapse-1',
              'menu_class'        =>  'nav navbar-nav',
              'fallback_cb'       =>  'wp_bootstrap_navwalker::fallback',
              'walker'            =>  new wp_bootstrap_navwalker())
              );
            ?>
            <!-- <ul class="nav navbar-nav">
              <li><a href="#home">Home</a></li>
              <li><a href="#onzeworsten">Onze Worsten</a></li>
              <li><a href="#onzerecepten">Onze Recepten</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul> -->
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
            <ul class="nav navbar-nav navbar-right">
              <li><a href="tel:<?php the_field('phone'); ?>"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i>TELEFOON:&nbsp;<?php echo $phone; ?></a></li>
            </ul>
          </div><!--/.nav-collapse -->
      </div>
  </div> <!-- /.Navigation -->

    <!--logo -->
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-4 line">
        <hr>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="logo-mid"></a>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-4 line">
        <hr>
      </div> <!--/.logo -->
    </div>
  </div>

<!--wide inner -->
  <div class="wide-inner">
    <div class="container">
      <div class="text-center">
          <h1 class="animated bounceInDown">
            <?php the_field('title_header'); ?>
          </h1>
          <h2 class="animated bounceInDown hidden-xs">
            <?php the_field('subtitle_header'); ?>
            </h2>
          <h3 class="animated bounceInDown visible-xs">
            <?php the_field('subtitle_header'); ?>
            </h3>
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="#onzeworsten"><button type="button" class="btn btn-primary btn-lg animated bounceInLeft"><?php the_field('left_button_header'); ?></button></a>
            <a href="#espanol"><button type="button" class="btn btn-warning btn-outline btn-lg animated bounceInRight"><?php the_field('right_button_header'); ?></button></a>
          </div>
      </div>    
    </div>
  </div>
</div>