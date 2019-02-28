<?php 
get_header();
pageBanner();
while(have_posts()) {
    the_post(); ?>


<div class="container container--narrow page-section">
    <div class="generic-content">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo site_url("/event");?>"><i class="fa fa-home"
                        aria-hidden="true"></i> Event home</a> <span class="metabox__main"><?php the_title() ;?></span>
            </p>
        </div>
    </div>
    <?php the_content();?>
    <?php 
    $relatedPrograms = get_field('related_program');
    if($relatedPrograms) {

       echo '<hr class="section-break">';
    echo '<h2 class="headline headline--medium"> All related programs</h2>';
    echo '<ul class="link-list min-list">';
    foreach($relatedPrograms as $program) {;?>
    <li><a href="<?php echo get_the_permalink($program);?>"><?php echo get_the_title($program);?></a></li>


    <?php 

    }
    echo '</ul>';
}   
    }
  
    ;?>

</div>
<?php 
get_footer();
?>