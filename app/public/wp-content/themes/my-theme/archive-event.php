<?php 
get_header();
pageBanner(array(
'title'=>'All events',
'subtitle' => 'Our world'
));
?>

<div class="container container--narrow page-section">
    <?php 
  while (have_posts()) {
    the_post();
    get_template_part('template-parts/event');
    
   }
  
  echo paginate_links();
  ?>
    <p>Looking for event's archive? <a href="<?php echo site_url('/past-events');?>">Here you are</a></p>
</div>
<?php 
get_footer();
?>