<?php
get_header();
while (have_posts()) {
  the_post();
  pageBanner();
?>
  <div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p>
        <a class="metabox__blog-home-link" href="<?= get_post_type_archive_link('event'); ?>">
          <i class="fa fa-home" aria-hidden="true"></i> Event Home
        </a>
        <span class="metabox__main">
          <?php
          $eventDate = new DateTime(get_field('event_date'));
          echo "Event Date : " . $eventDate->format('d-M-Y');
          ?>
        </span>
      </p>
    </div>
    <div class="generic-content"><?php the_content(); ?></div>

    <?php
    $relatedPrograms = get_field('related_programs');
    if (!empty($relatedPrograms)) {
    ?>
      <hr class="section-break" />
      <h1 class="headline headline--medium">Related Program's</h1>
      <ul class="link-list min-list">
        <?php foreach ($relatedPrograms as $key => $program) { ?>
          <li><a href="<?= get_the_permalink($program); ?>"><?= get_the_title($program); ?></a></li>
        <?php } ?>
      </ul>
    <?php } ?>

  </div>

<?php }
get_footer();
?>