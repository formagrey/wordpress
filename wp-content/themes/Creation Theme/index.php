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
                        <h2 class="col-12">ce que je fais</h2>
                        <div class="bloc1 col-xs-12 col-md-6 col-lg-4">

                            <! - Démarrer la boucle.  ->
                             <? php if (has_posts ()): while (has_posts ()): le_post ();  ?>

                            	 <! - Teste si le post actuel est en catégorie 3. ->
                            	 <! - Si c'est le cas, la boîte div reçoit la classe CSS "post-cat-three".  ->
                            	 <! - Dans le cas contraire, la boîte div reçoit la classe CSS "post".  ->

                            	 <? php if (in_category ('comics')):?>
                            		 <div class = "post-cat-trois">
                            	 <? php else:?>
                            		 <div class = "post">
                            	 <? php endif;  ?>


                            	 <! - Afficher le titre en tant que lien vers le permalien du message.  ->

                            	 <h2> <a href="<?php the_permalink(); ?> "rel =" signet "title =" Lien permanent vers <? php the_title_attribute ();?> "> <? php the_title ();  ?> </a> </ h2>

                            	 <! - Afficher la date (format du 16 novembre 2009) et un lien vers d'autres articles de cet auteur.  ->

                            	 <small> <? php the_time ('F jS, Y');  ?> par <? php the_author_posts_link ();  ?> </ small>

                            	 <! - Afficher le contenu du message dans une boîte div.  ->

                            	 <div class = "entry">
                            		 <? php the_content ();  ?>
                            	 </ div>

                            	 <! - Affiche une liste séparée par des virgules des catégories de la publication.  ->

                            	 <p class = "postmetadata"> <? php _e ('Publié dans');  ?> <? php the_category (',');  ?> </ p>
                            	 </ div> <! - ferme la première boîte div ->

                            	 <! - Arrêtez la boucle (mais notez le "else:" - voir la ligne suivante).  ->

                             <? php endwhile;  autre:?>
                            	 <! - Le tout premier "si" testé pour voir s'il y avait des messages à ->
                            	 <! - affichage.  Cette partie "else" indique ce qu'il en est s'il n'y en avait pas.  ->
                            	 <p> <? php esc_html_f ('Désolé, aucun article ne correspond à vos critères.');  ?> </ p>
                            	 <! - Arrête vraiment la boucle.  ->
                             <? php endif;  ?>


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

            <div class="container-fluid color-fond">
                <div class="container">
                    <div class="row">
                        <div id="content" class="col-6">
                            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                                <div class="post">
                                    <h2>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                        <p class="postmetadata">
                                            <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>

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
