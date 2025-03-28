<?php
get_header();
?>

<main id="main" class="site-main">
    <div class="container">
       
        <header class="name-header">
            <h1>Mathilde Moreau</h1>
        </header>

        
        <section class="intro">
            <p>Bonjour ! Je suis Mathilde, une développeuse front et back end passionnée par le numérique. Bienvenue sur mon portfolio où je partage mes compétences et mes projets uniques.</p>
        </section>

        
        <section class="skills-section">
    <h2>Mes Compétences</h2>
    <div class="skills-grid">
        <div class="skill-item">
            <span class="skill-emoji">☕</span>
            <h3>Java</h3>
            <p>Développement d’applications robustes et performantes.</p>
        </div>
        <div class="skill-item">
            <span class="skill-emoji">🤝</span>
            <h3>Travail d'équipe</h3>
            <p>Collaboration efficace dans des projets collectifs.</p>
        </div>
        <div class="skill-item">
            <span class="skill-emoji">🗄️</span>
            <h3>Base de données</h3>
            <p>Gestion et manipulation de données avec SQL.</p>
        </div>
        <div class="skill-item">
            <span class="skill-emoji">🌐</span>
            <h3>HTML/CSS</h3>
            <p>Création de sites web modernes et responsive.</p>
        </div>
        <div class="skill-item">
            <span class="skill-emoji">⚡</span>
            <h3>JavaScript</h3>
            <p>Ajout d’interactivité et dynamisme aux pages web.</p>
        </div>
        <div class="skill-item">
            <span class="skill-emoji">🐍</span>
            <h3>Python</h3>
            <p>Programmation polyvalente pour scripts et automatisation.</p>
        </div>
        <div class="skill-item">
            <span class="skill-emoji">📊</span>
            <h3>Gestion de projet (Gantt Pert)</h3>
            <p>Planification et suivi avec des outils comme Gantt et Pert.</p>
        </div>
    </div>
</section>

        ²
        <section class="best-projects">
            <h2>Mes Réalisations</h2>
            <div class="portfolio-grid">
                <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 3,
                    'meta_query' => array(
                        array(
                            'key' => 'est_meilleur',
                            'value' => '1',
                            'compare' => '='
                        )
                    )
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
                        <article class="portfolio-item">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            <?php endif; ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Aucune réalisation sélectionnée.</p>';
                endif;
                ?>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();