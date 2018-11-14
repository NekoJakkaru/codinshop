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
