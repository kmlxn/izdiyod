

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Мебельная фирма Izdiyod Abu-Said</title>

     <link rel="icon" href="http://localhost/wordpress/wp-content/uploads/2015/08/favicon.ico" type="image/x-icon" />
     <link rel="shortcut icon" href="http://localhost/wordpress/wp-content/uploads/2015/08/favicon.ico" type="image/x-icon" />

<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/style.css" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/media-queries.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/flex-slider/flexslider.css" type="text/css" media="screen" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/styles/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/styles/tipsy.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/flex-slider/jquery.flexslider-min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.tipsy.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.knob.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/setup.js"></script>



</head>
<body>
<div id="wrap">
  <!-- wrapper -->
  <div id="sidebar">
    <!-- the  sidebar -->
    <!-- logo -->
    <a href="<?php echo $link1; ?>" id="logo"> <img src="<?php $logo=ot_get_option('logo_image'); echo $logo; ?>" alt=""  /> </a>
    <!-- navigation menu -->
    <ul id="navigation">
      <li><a href="#home" class="active">Главная</a></li>
      <li><a href="#about">О нас</a></li>
      <li><a href="#portfolio">Каталог</a></li>
      <li><a href="#skills">Контакты</a></li>
      <!--<li><a href="#industries">Industries</a></li>
      <li><a href="#myclients">Our Clients</a></li>
      <li><a href="#contact">Contact</a></li>-->
    </ul>
  </div>


  <div id="container">
    <!-- page container -->
    <div class="page" id="home">
      <!-- page home -->
      <div class="page_content">

	  <?php $enableslider=ot_get_option('my_checkbox');if ( $enableslider[0]=='yes' ) { ?>
        <div class="gf-slider">
          <!-- slider -->
          <ul class="slides">

		  <?php


if ( function_exists( 'ot_get_option' ) ) {

  $enableslider=ot_get_option('my_checkbox');

  $slides = ot_get_option( 'my_slider',array());
  $client_settings = ot_get_option( 'client_settings',array());
  $industry_settings = ot_get_option( 'industry_settings',array());
  $skills = ot_get_option( 'skills_settings',array());
  $aboutus_desc = ot_get_option( 'aboutus_desc',array());
  $industry_desc = ot_get_option( 'industry_desc',array());
  $portfolio_desc = ot_get_option( 'portfolio_desc',array());
  $clients_desc = ot_get_option( 'clients_desc',array());
  $social_facebook = ot_get_option( 'social_facebook',array());
   $social_twitter = ot_get_option( 'social_twitter',array());
   $social_linkedin = ot_get_option( 'social_linkedin',array());



  if ( ! empty( $slides ) && $enableslider[0]=='yes' ) {
    foreach( $slides as $slide ) {

      echo '<li> <?php if(!empty($slider_image1)){?>
					<img src="'.$slide['slider_image'].'" alt=""  /> <?php } ?>
              <p class="flex-caption">'. $slide['slider_caption'].'</p>
            </li>';

    }
  }

}  ?>

          </ul>
        </div>

		<?php } ?>
        <div class="space"> </div>
        <div class="clear"> </div>
        <!-- services -->


		<?php $i=0; if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php if ($i==0) { ?>
		<div class="one_half first">
          <div class="column_content">
             <h4><?php echo get_the_title();  ?></h4>

<?php if (has_post_thumbnail( $post->ID ) ){ ?>
		   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID ) ); ?>" class="left no_border" alt="" style="margin-top: 10px;
                                margin-right: 10px" />
								<?php } ?>

            <p> <small><?php the_content(__('Read More...', 'onepager')); ?></small></p>
          </div>
        </div>     <?php $i=1; }  else {  ?>


		<div class="one_half last">
          <div class="column_content">
             <h4><?php echo get_the_title(); ?></h4>

<?php if (has_post_thumbnail( $post->ID ) ){ ?>
		   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID ) ); ?>" class="left no_border" alt="" style="margin-top: 10px;
                                margin-right: 10px" />
								<?php } ?>

            <p> <small><?php the_content(__('Read More...', 'onepager')); ?></small></p>
          </div>
        </div>


<?php $i=0; } ?>


		<?php endwhile; ?>

		<?php else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>



        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="about">
      <!-- page about -->
      <h3 class="page_title"> О нас</h3>
      <div class="page_content">
	  <h3>Фирма занимается выпуском серийной мебели, как:</h3>
	  <ul>
	  <li><h4>Спальная мебель;</h4></li>
	   <li><h4>Стенки и горки;</h4></li>
	   <li><h4>Горки-уголки;</h4></li>
	   </ul>
	   <br/>
	   <h3>Также мы делаем индивидуальную мебель на заказ: </h3>
	   <ul>
	   <li><h4>Кухонная мебель;</h4></li>
	   <li><h4>Компьютерные и письменные столы;</h4></li>
	   <li><h4>Спальная мебель (Кровати, шкафы, комоды, тумбы и т.д.);</h4></li>
		   <li><h4>Детская мебель;</h4></li>
		   <li><h4>Офисная мебель(Столы, журнальные столики, шкафы и т.д.);</h4></li>
		   <li><h4>Прихожие;</h4></li>
		   <li><h4>Мебель для гостинниц;</h4></li>
		   <li><h4>Витрины для магазинов.</h4></li>
		</ul>

	  <?php echo $aboutus_desc;  ?>

      </div>
    </div>
    <div class="page" id="portfolio">
      <!-- page portfolio -->
      <h3 class="page_title"> Каталог</h3>
      <div class="page_content">
	     <h3>Уточнить цены вы можете по телефону в разделе "Контакты".</h3>
	  <?php if(isset($portfolio_desc)) {echo $portfolio_desc;}  ?>


        <ul >
        <ul id="works_filter">

          <li><a href="#" data-filter="*" class="selected">Показать все</a></li>
		  <?php $terms = get_terms("portfolio-type");
 $count = count($terms);
 if ( $count > 0 ){

     foreach ( $terms as $term ) {
       echo '<li><a href="#" data-filter=".'.$term->slug.'">'.$term->name.'</a></li>';
     }

 }  ?>

        </ul>
        <div class="clear"> </div>
        <div id="works">

		  <?php
		    $args = array(
                'post_type' => 'portfolio',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'posts_per_page' => -1
		    );
		    $query = new WP_Query( $args );

			while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php
				    $terms =  get_the_terms( $post->ID, 'portfolio-type' );
				    $term_list = '';
				    if( is_array($terms) ) {
				        foreach( $terms as $term ) {
    				        $term_list .= ($term->slug);
    				        $term_list .= ' ';
    				    }
			        }


$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				?>



				<?php echo '<a rel="prettyPhoto[gallery]" href="'.$url.'"> <img class="work '.$term_list.'"'.'src="'.$url.'" alt="" /> </a>'  ?>

				<?php endwhile; ?>
          <!-- works -->
          </div>

		<div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="skills">
      <!-- page skills -->
      <h3 class="page_title">Контакты</h3>
      <div class="page_content">
	   <h2>E-mail адрес: saidhon93@gmail.com</h2>
	   <h2>Телефон: </h2>
	   <ul>
	   <li><h3>+998(98)300-64-82</h3></li>
	   <li><h3>+998(97)700-44-96</h3></li>
	   </ul>

	  <?php   if ( ! empty( $skills ) ) {
    foreach( $skills as $skill ) {

	 echo '<div class="one_fourth">
          <div class="column_content">
            <h4 class="blue">'.$skill['title'].'</h4>
            <input class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" value="'.$skill['skill_value'].'" data-fgcolor="#cfdee7" data-bgcolor="#0d4667">
          </div>
        </div>' ;


    }
  }  ?>


        <div class="clear"> </div>
      </div>
    </div>

    <div class="footer">
      <h4>&copy Izdiyod Abu-Said</h4>
	  <br/>

    </div>
  </div>
</div>
<a class="gotop" href="#top">Вверх</a>


</body>
</html>
