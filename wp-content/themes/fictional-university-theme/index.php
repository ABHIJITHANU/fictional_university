<?php
get_header();
while (have_posts(  )) {
    the_post();?>
    <h2><a href="<?=the_permalink()?>"><?=get_the_title();?></a></h2>
    <?php
    echo the_content();
}
get_footer();

