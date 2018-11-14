<!DOCTYPE html>
<html lang="fr " dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CodiNShop</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="HeaderNav">
                <h1><a href="/"><?php bloginfo('name');?></a></h1>
                <?php wp_nav_menu(array("menu" => "Menu_Header")); ?>
                <section class="emo">
                    <a href="#"><i class="fas fa-user"></i></a>
                    <a href="#"><i class="fas fa-shopping-bag"></i></a>
                    <a href="#"><i class="fas fa-search-minus"></i></a>
                </section>
            </nav>
        </header>
        <main>
            <div class="slider">
               <?php
               $entete = new WP_Query( array('post_type' => 'product', 'product_cat' => 'slider' ));
                   if ( $entete->have_posts() ) :

                   while ( $entete->have_posts() ) : $entete->the_post();?>

                   <div class="inslider">
                       <?php the_post_thumbnail()?>

                       <div class="slideinfo">
                           <h2><?php the_title()?></h2>
                           <p><?php the_content()?></p>
                       </div>
                   </div>

               <?php
                   endwhile;
               endif;
               ?>
           </div>
           <div class="row">
               <div class="col-12">
                   <?php
                   wp_nav_menu(array("menu" => "Category"));

              ?>
               </div>
           </div>
