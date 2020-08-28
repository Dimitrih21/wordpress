<?php get_header() ?>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card mb-3">
        </div>
      </div>
    </div>


<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<div class="col-md-6">
  <?php echo the_post_thumbnail(); ?>

    <h1><a href="<?php the_permalink() ?>">  <?php the_title(); ?></a> </h1>

    <?php the_content(); ?>

  </div>
<?php endwhile; endif; ?>


</div>

  <?php get_footer() ?>
