<?php get_header(); ?>

      <div class="container">

        <div id="content">

          <div id="main" class="col-md-10 col-md-offset-2 clearfix" role="main">

            <article id="post-not-found" class="hentry clearfix">

              <header class="article-header text-center">

                <h1>404. OOOPPSS...C'est embarrassant...</h1>
                <img src="<?php bloginfo('template_directory'); ?>/library/images/oups1.jpg" />
                <p>On vous l'avait bien dit... Il n'y a rien ici!</p>

              </header> <?php // end article header ?>

              <section class="entry-content">

                <p><?php get_search_form(); ?></p>

              </section> <?php // end article section ?>

            </article> <?php // end article ?>

          </div> <?php // end #main ?>

        </div> <?php // end #content ?>

      </div> <?php // end ./container ?>


<?php get_footer(); ?>