<?php get_header(); ?>
<!-- ouvrir header,php --->
            <section id="header" class="container-fluid">
                <div class="container">
                    <div class="row text-center jumbotron">
                        <h1 class="col-12 text-center"><?php bloginfo('name'); ?></h1>
                        <?php //bloginfo('description'); ?>
                    </div>
                </div>
            </section>

            <section id="section2" class="container-fluid">
                <div class="container">
                    <div class="row">
                        <?php $query = new WP_Query( array( 'category_name' => 'Présentation' ) ); ?>
                        <?php if(have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="col-4">
                            <img class="img-fluid" src="<?php the_field('photo_de_profile'); ?>" alt="">
                        </div>
                        <div class="col-8">
                            <h2><?php the_field('titre_profile'); ?></h2>
                                <p class="text-justify">
                                    <?php the_content(); ?>
                                </p> <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section3" class="container-fluid">
                <div class="container">
                    <div class="row">
                        <?php $query2 = new WP_Query( array( 'category_name' => 'competence' ) ); ?>
                        <h2 class="col-12">What I Do</h2>
                    </div>
                    <div class="row">
                        <?php
                            if ( $query2->have_posts() ) :
                                while ( $query2->have_posts() ) : $query2->the_post(); ?>
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
                        <?php $query = new WP_Query( array( 'category_name' => 'recent_work' ) ); ?>
                        <?php if(have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class=" col-xs-12 col-md-6 col-lg-4">
                            <img class="img-fluid card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="text-center">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <div class="post_content text-justify">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                        </div> <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php get_footer(); ?>
    </body>
</html>
