<?php /* Template Name: Blog */ ?>

<?php get_header(); ?> 

<div id="articles-page" class="container">
  <div class="article-wrapper">
    <?php query_posts('post_type=post') ?>
      <?php if(have_posts()) : ?>
        <?php while (have_posts()): the_post(); ?>
          <div class="blog-preview">
            <h2>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>
            <h6><?php echo get_the_date(); ?></h6>
            <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php endif; ?>
            <?php the_excerpt(); ?>
            <a class="read-more" href="<?php the_permalink(); ?>">
              Read More...
            </a>
          </div>
        <?php endwhile ?>
      <?php else : ?>
        <?php echo wpautop('Sorry, no posts were found');  ?>
      <?php endif; ?>
  </div><!--Article wrapper end-->

  <div class="sidebar">
    <h3 id="sidebar-title">POPULAR</h3>
    <hr>
    <?php $catquery = new WP_Query( 'cat=popular&posts_per_page=5' ); ?>

    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
      <div class="sidebar-item">
        <div class="sidebar-text">
          <h3><a href="<?php the_permalink() ?>" rel=""><?php the_title(); ?></a></h3>
          <h6><?php echo get_the_date(); ?></h6>
        </div>
        <div class="blog-thumb">
          <a href="<?php the_permalink() ?>" rel="">
            <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php endif; ?>
          </a>
        </div>
      </div><!--End sidebar item-->
    <?php endwhile; ?> 
    <?php wp_reset_postdata(); ?>

  </div><!--End sidebar-->
</div><!--articles page end-->
   
<?php get_footer();?>