<?php get_header() ?>

  <?php the_content(); ?>

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

      <article class="post">
        <?php the_post_thumbnail(); ?>

        <h1><?php the_title(); ?></h1>

        <div class="postmeta">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
          <p>
            Publié le <?php the_date(); ?>
            par <?php the_author(); ?>
            Avec les étiquettes <?php the_tags(); ?>
          </p>
        </div>
      </article>

    <?php endwhile; endif; ?>

  <?php get_footer() ?>
