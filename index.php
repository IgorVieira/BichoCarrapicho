<?php
    get_header();

?>


    <div class="container">
          <?php 
                if( have_posts() ) { 
                    while( have_posts() ) {
                       

            ?>

           
                <?php woocommerce_content(); ?>
           
        <?php 
            }
        }
        ?>
    </div>          



<?php
    get_footer();

?>
