<!DOCTYPE html>
  <html lang="fr-FR">

  <!-- permet de définir automatiquement la langue du document.-->
  <html <?php language_attributes(); ?>>

    <head>
      <!--  permet de définir l’encodage du site.-->
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

      <?php wp_head() ?>
    </head>


      <body class="home blog logged-in admin-bar no-customize-support">
      <!-- Cette dernière classe nous sera très utile si on veut faire un menu fixe en position absolue ou fixe : la barre d’admin va décaler le site de 32px vers le bas (sa propre hauteur). On pourra donc appliquer un style de ce genre pour compenser -->



        <!-- permet d’obtenir des noms de classe CSS en fonction de la page visitée -->

      <div class="header">
        <?php if(function_exists('the_custom_logo')){
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);

        }
        ?>
        <img src="<?php echo $logo[0] ?>" alt="logo">

          <h1><?php bloginfo('title') ?></h1>
          <p><?php bloginfo('description') ?></p>
      </div>

      <div id="menu" >

          <nav class="navbar navbar-expand-lg ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse " id="navbarNav"

          ><a>  <?php echo wp_nav_menu( array( 'theme_location' => 'main' ) ) ?> </a>

       </div>
      </div>
     </nav>
    </div>

    <form action="" class="search-bar">
	     <input type="search" name="search" pattern=".*\S.*" required>
	      <button class="search-btn" type="submit">
		        <span>Search</span>
	      </button>
    </form>



    <div class="">
      <?php
      $my_query = new WP_Query('category_name=LarticledEclatax&showposts=1');
      while ($my_query->have_posts()) : $my_query->the_post();
      $do_not_duplicate = $post->ID;
      ?>
<div><h2><?php the_title()?></h2> <p <?php the_content()?></p> </div >
<?php endwhile; ?>


    </div>
