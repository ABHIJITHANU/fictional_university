<?php
get_header();
    while (have_posts()) {
        the_post();?>

    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('images/ocean.jpg'); ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title();?></h1>
        <div class="page-banner__intro">
          <p>Replace me later</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">

        <div class="generic-content">
            <div class="row group">
                <div class="one-third">
                    <?php the_post_thumbnail('professorPortrait'); ?>
                </div>
                <div class="two-third">
                    <?php the_content(); ?>
                </div>
            </div>
            
        </div>

      <?php 
      $relatedPrograms = get_field('related_programs');
      if (! empty($relatedPrograms)) { 
      ?>
        <hr class="section-break"/>
        <h1 class="headline headline--medium">Subject's Taught</h1>
        <ul class="link-list min-list">
          <?php foreach ($relatedPrograms as $key => $program) { ?>
            <li><a href="<?=get_the_permalink($program); ?>"><?=get_the_title($program); ?></a></li>
          <?php } ?>
        </ul>
      <?php } ?>

    </div>

<?php }
    get_footer();
?>