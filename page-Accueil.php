<?php /* Template Name: Page Accueil */ ?>

<?php get_header('planetes'); ?>

<main>
    <section class="container">
        <?php
            if(has_post_thumbnail()) {
                the_post_thumbnail();
        }
        else {
            echo "<img src='".get_template_directory_uri()."/src/img/planete.jpg'>"; ?> 
            <br>
        <?php 
            echo "Image indisponible";
        } ?>

        <div id="main">
            <h1><?= get_field('titre_principal'); ?></h1>
            
            <div class="owl-carousel">
                    <?php $images = get_field('carrousel');
            
                        foreach($images as $image): ?>
                            <img src="<?= $image['url']; ?>">
                    <?php endforeach;
                    ?>
            </div>

            <h2><?= get_field('titre_h2_1'); ?></h2>        
            <p><?= get_field('paragraphe_1'); ?></p>

        </div> 
    </section>
</main>
<?php get_footer('planetes'); ?>