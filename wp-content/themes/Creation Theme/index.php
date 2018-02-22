<?php get_header(); ?>
<!-- ouvrir header,php --->

            <section id="section2" class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <img src='images/profile.jpg' alt="image de profile" class="img-fluid">
                        </div>
                        <div class="col-8">
                            <h2>titre</h2>
                            <p>s
                            </p>
                            <p>
                                <a href="#">Lien</a>
                            </p>
                        </div>

                    </div>
                </div>
            </section>
            <section id="section3" class="container-fluid">
                <div class="container">
                    <div class="row">
                        <?php $query = new WP_Query( array( 'category_name' => 'competence' ) ); ?>
                        <h2 class="col-12 text-center"> <?php the_category(); ?></h2>
                    </div>
                    <div class="row">
                        <?php
                            if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <h2> <?php the_title(); ?> </h2>
                                         <div class="size-comics img-fluid">
                                             <?php the_content(); ?>
                                         </div>
                                    </div>
                                <?php endwhile;
                            else :
                                echo 'No posts';
                            endif;
                        ?>
                    </div>
                </div>
            </section>
            <section id="section4" class="container-fluid">
                <div class="container">
                    <div class="row">
                        <h2 class="col-12">Recent Works</h2>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <img src="images/work.jpg" alt="image de travail" class="img-fluid">
                        </div>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <img src="images/work.jpg" alt="image de travail" class="img-fluid">
                        </div>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <img src="images/work.jpg" alt="image de travail" class="img-fluid">
                        </div>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <img src="images/work.jpg" alt="image de travail" class="img-fluid">
                        </div>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <img src="images/work.jpg" alt="image de travail" class="img-fluid">
                        </div>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <img src="images/work.jpg" alt="image de travail" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>

            <div class="container-fluid color-fond">
                <div class="container">
                    <div class="row">
                        <div id="content" class="col-6">
                            <?php $query = new WP_Query( array( 'category_name' => 'Comics' ) ); ?>
                            <?php if(have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="post">
                                    <h2>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                        <p class="postmetadata">
                                            Publié le : <?php the_time('j F Y') ?> par <?php the_author() ?> <br>
                                            Catégorie: <?php the_category(', ') ?> <br>
                                            <?php comments_popup_link('Pas de commentaires', '', '% Commentaires'); ?> <br>
                                            <?php edit_post_link('Editer', '', ''); ?>

                                        </p>
                                    </h2>
                                    <div class="post_content">
                                        <?php the_content(); ?>
                                    </div>
                                </div> <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="col-6">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_footer(); ?>
    </body>
</html>
