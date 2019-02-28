

<?php 
get_header();
pageBanner(array(
  'title' => 'Welcome to our blog',
  'subtitle' => 'There is something for everyone. Have a look around.'
));
?>

  <div class="container container--narrow page-section">
  <?php 
  while (have_posts()) {
    the_post();?>
    <div class="post-item">
    <h1 class="headline headline--medium headline--post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></h1>
    <div class="metabox">
      <p> Posted by <?php the_author_posts_link();?> on <?php the_time('j.n.y');?> in <?php echo get_the_category_list(', ');?></p>
      </div>
      <div class="generic-content">
      <?php the_excerpt();?>
      <p><a  class="btn btn--blue"href="<?php the_permalink();?>">Read more </a></p>
      </div>
      </div>
  <?php }
  echo paginate_links();
  ?>
  </div>
<?php 
get_footer();
?>