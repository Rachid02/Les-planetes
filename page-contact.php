<?php /* Template Name: Page Contact */ ?>

<?php get_header('planetes'); ?>

<main>
    <div class="container">
        <?php if(has_post_thumbnail()) {
        the_post_thumbnail();
        }
        else {
                echo "<img src='".get_template_directory_uri()."/assets/img/groot-rocket.jpeg'>";  
            ?>
            
            <br>
        <?php 
            echo "Image indisponible";
        }
        
            the_content();

            echo do_shortcode('[contact-form-7 id="20" title="planete"]'); 
            ?>
    
    </div>
</main>


<?php get_footer('planetes');