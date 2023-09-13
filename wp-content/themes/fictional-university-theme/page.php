<?php get_header();
while (have_posts()) {
  the_post();
  pageBanner([
    'title' => 'Title',
    'subtitle' => 'Subtitle',
    'background_banner' => 'https://images.pexels.com/photos/2113566/pexels-photo-2113566.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
  ]);
?>

  <div class="container container--narrow page-section">
    <?php
    $theParent = wp_get_post_parent_id(get_the_ID());
    if ($theParent) { ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?= get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?= get_the_title($theParent); ?></a> <span class="metabox__main"><?= the_title(); ?></span>
        </p>
      </div>
    <?php } ?>

    <?php
    $otherPages = get_pages(['child_of' => get_the_ID()]);
    if ($theParent or $otherPages) :
    ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?= get_permalink($theParent); ?>"><?= get_the_title($theParent); ?></a></h2>
        <ul class="min-list">
          <?php
          wp_list_pages([
            'title_li' => NULL,
            'child_of' => !empty($theParent) ? $theParent : get_the_ID(),
            'sort_column' => 'menu_order',
          ]);
          ?>
        </ul>
      </div>
    <?php endif; ?>

    <div class="generic-content">
      <?php the_content(); ?>
    </div>
  </div>

<?php }
get_footer();
?>