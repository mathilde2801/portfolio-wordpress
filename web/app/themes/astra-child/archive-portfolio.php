<?php
get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <h1><?php post_type_archive_title(); ?></h1>
        <div class="portfolio-grid">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <article class="portfolio-item">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        <?php endif; ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ($client = get_field('client')) : ?>
                            <p class="portfolio-client"><?php echo esc_html($client); ?></p>
                        <?php endif; ?>
                    </article>
                    <?php
                endwhile;
                the_posts_navigation();
            else :
                echo '<p>Aucune réalisation trouvée.</p>';
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();