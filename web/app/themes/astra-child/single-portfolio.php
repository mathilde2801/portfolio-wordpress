<?php
get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <!-- Champs ACF -->
                        <?php if (function_exists('get_field')) : ?>
                            <div class="portfolio-details">
                                <?php if ($client = get_field('client')) : ?>
                                    <p><strong>Client :</strong> <?php echo esc_html($client); ?></p>
                                <?php endif; ?>
                                <?php if ($date = get_field('date_realisation')) : ?>
                                    <p><strong>Date :</strong> <?php echo esc_html($date); ?></p>
                                <?php endif; ?>
                                <?php if ($lien = get_field('lien_projet')) : ?>
                                    <p><strong>Lien :</strong> <a href="<?php echo esc_url($lien); ?>" target="_blank"><?php echo esc_url($lien); ?></a></p>
                                <?php endif; ?>
                                <?php if ($image = get_field('image')) : ?>
                                    <div class="portfolio-image">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php
get_footer();