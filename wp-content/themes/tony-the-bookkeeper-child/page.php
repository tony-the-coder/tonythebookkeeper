<?php get_header(); ?>

<div class="content-wrapper">
    <div class="page-banner" role="banner" aria-label="Page Banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title" id="page-title"><?php the_title(); ?></h1>
            <div class="page-banner__intro" aria-describedby="page-title">
                <p>REPLACE THIS TEXT LATER</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <div class="generic-content" role="main" aria-labelledby="page-title">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>