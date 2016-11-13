<?php
    get_header();

?>


   
          <?php 
                if( have_posts() ) { 
                    while( have_posts() ) {
                       

            ?>

           
                <?php woocommerce_content(); ?>
           
        <?php 
            }
        }
        ?>
             



<?php
    get_footer();

?>
