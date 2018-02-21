<?php get_header(); ?>
<!-- ouvrir header,php -->

            <section id="section2" class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <img src='images/profile.jpg' alt="image de profile" class="img-fluid">
                        </div>
                        <div class="col-8">
                            <h2>titre</h2>
                            <p></p>
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
                        <h2 class="col-12">ce que je fais</h2>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <i class="fab fa-accusoft fa-2x col 12"></i>
                            <p class="titre">UI/UX DESIGN</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <i class="fab fa-accusoft fa-2x col 12"></i>
                            <p class="titre">UI/UX DESIGN</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <i class="fab fa-accusoft fa-2x col 12"></i>
                            <p class="titre">UI/UX DESIGN</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <i class="fab fa-accusoft fa-2x col 12"></i>
                            <p class="titre">UI/UX DESIGN</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <i class="fab fa-accusoft fa-2x col 12"></i>
                            <p class="titre">UI/UX DESIGN</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">
                            <i class="fab fa-accusoft fa-2x col 12"></i>
                            <p class="titre">UI/UX DESIGN</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>

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
            <section id="section5" class="container-fluid">
                <div class="container">
                    <div class="row">
                        <h2 class="col-12">Contact Me</h2>
                        <?php include 'formulaire.php' ?>
                    </div>
                </div>
            </section>

            <div id="content">
                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                    <div class="post">
                        <h2>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="post_content">
                            <?php the_content(); ?>
                        </div>
                    </div> <?php endwhile; ?>
                <?php endif; ?>
            </div>
    </body>
</html>
