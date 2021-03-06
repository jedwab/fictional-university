<?php 
get_header();
while(have_posts()) {
    the_post(); 
    pageBanner(array(
        'title'=>'Hello my Title',
        'subtitle'=>'Hello my Subtitle',
        'photo'=> 'https://pixabay.com/images/id-815297/'
    ));?>


<div class="container container--narrow page-section">
    <?php 
   $theParent = wp_get_post_parent_id(get_the_ID());
    if ($theParent) { ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent);?>"><i class="fa fa-home"
                    aria-hidden="true"></i> Back to <?php echo get_the_title($theParent);?></a> <span
                class="metabox__main"><?php the_title(); ?></span></p>
    </div>
    <?php 
    }
    
    ?>

    <?php 
    $testArray = get_pages(array (
      'child_of' => get_the_ID()
    ));
    if($theParent or $testArray) { ?>
    <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent) ;?>"><?php echo get_the_title($theParent) 
    ;?></a></h2>
        <ul class="min-list">
            <?php 
        if($theParent) {
          $findChildrenOf = $theParent;
        } else {
          $findChildrenOf = get_the_ID();
        }
        
        wp_list_pages(array (
          'title_li' => NULL,
          'child_of' => $findChildrenOf
        ));
        ?>
        </ul>
    </div>
    <?php } ?>

    <div class="generic-content">
        <form class="search-form" method="get" action="<?php echo esc_url(site_url('/'));?>">
            <label class="headline headline--medium" for=s>New search</label>
            <div class="search-form-row">
                <input placeholder="What are you looking for?" id=s type=search name="s" class="s">
                <input type="submit" value="search" class="search-submit">
            </div>
        </form>
    </div>

</div>

<?php }
get_footer();

?>