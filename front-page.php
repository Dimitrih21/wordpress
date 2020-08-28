<?php get_header() ?>



<div class="backhead">
  <img src="<?php echo header_image() ?>" alt="" class="">
</div>

<div class="widget1">
  <?php dynamic_sidebar('main-sidebar'); ?>
</div>

<?php query_posts('showposts=2&cat='.$cat->cat_ID);?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<div class="col-md-6">
  <?php echo the_post_thumbnail(); ?>

    <h1><a href="<?php the_permalink() ?>">  <?php the_title(); ?></a> </h1>

    <?php the_content(); ?>

  </div>
<?php endwhile; endif; ?>

<?php get_footer() ?>
