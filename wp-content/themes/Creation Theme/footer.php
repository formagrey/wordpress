        <footer id="footer">
            <div class="container text-center">

                <?php print(date(Y)); ?>
                <?php bloginfo('name'); ?>
                <br />
                <a href="http://www.facebook.com/"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="http://www.google.fr/"><i class="fab fa-google-plus-square fa-2x"></i></a>
                <a href="http://www.twitter.fr/"><i class="fab fa-twitter-square fa-2x"></i></a>
                <a href="http://www.youtube.fr/"><i class="fab fa-youtube fa-2x"></i></a>

                <br />
                <a href="feed:<?php bloginfo('rss2_url'); ?>">Articles (RSS)</a> et <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a>.
                <br>
                <?php echo get_num_queries(); ?> requêtes.
                <?php timer_stop(1); ?> secondes.
                <br>
                Copyright &#169;
            </div>
        </footer>
    </body>
</html>
