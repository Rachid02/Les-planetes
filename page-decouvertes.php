<?php /* Template Name: Page Decouvertes */ ?>

<?php get_header('planetes'); ?>



<main class="main">
    <aside></aside>
    <section class="container marge">
    <?php
    if(has_post_thumbnail()) {
        the_post_thumbnail();
    }
    else {
        echo "<img src='".get_template_directory_uri()."/src/img/planete.jpg'>";  
        ?>
        
        <br>
        <?php 
        echo "Image indisponible ?";
    } ?>
        <div id="main">
            <div class="owl-carousel">
                    <?php $images = get_field('image_galaxie');
            
                        foreach($images as $image): ?>
                            <img src="<?= $image['url']; ?>">
                        <?php endforeach;
                    ?>
            </div>
            <h1><?= get_field('titre_galaxie'); ?></h1>
            <h2><?= get_field('sous-titre_galaxie'); ?></h2>
            <p><?= get_field('parag_galaxie'); ?></p>
        </div>
    </section>     
    
</main>

<?php get_footer('planetes'); ?>