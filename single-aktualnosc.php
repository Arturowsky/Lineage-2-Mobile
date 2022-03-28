<?php
	get_header();
    $tag = get_queried_object();
?>
<?php 
    $post_id = get_the_ID(); 
    $author_id = get_post_field('post_author', $post_id);
?>
    <main style="filter: brightness(100%);">
        <div class="text-white place-center" style="background: url('<?= get_the_post_thumbnail_url($post_id, '2880px') ?>') center / cover no-repeat;height: 500px;"></div>
        <?php get_template_part('partials/main/breadcrumbs'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 mt-3">
                <div class="col col-lg-9 shadow-sm" style="background: #fffcfc;">
                    <div class="row row-cols-1 text-start">
                        <div class="col">
                            <h1 class="display-4 text-start mt-2" style="font-family: Poppins, sans-serif;"><?= get_the_title(); ?> </h1>
                        </div>
                        <div class="col text-start">
                            <div class="row">
                                <div class="col d-xxl-flex">
                                    <div class="d-inline-flex align-items-xxl-center">
                                        <a class="p-0 text-decoration-none" href="#" style="border-style: none;color: rgb(41,41,52);font-family: Poppins, sans-serif;font-size: 14px;"><?= get_the_author_meta('display_name', $author_id) ?>
                                            <span class="ms-1" style="color: rgb(155,155,156);font-size: 14px;"><?= get_the_date(); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-3">
                            <ul class="list-inline">
                            <?php $posttags = get_the_tags(); ?>
                            <?php foreach($posttags as $tag): ?>
                                <li class="list-inline-item">
                                    <a href="<?= $tag->name ?>" style="font-family: Poppins, sans-serif;font-size: 15px;color: rgb(69,70,74);">#<?= $tag->name ?></a>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col">
                            <p class="text-break">
                                <?php
                                    the_post();
                                    the_content();
                                ?>
                            </p>
                        </div>
                    </div>
                    <?php get_template_part('partials/ads/singlenews'); ?>
                    <?php get_template_part('partials/main/event'); ?>
                </div>
                <?php get_template_part('partials/sidebar/sidebar'); ?>
            </div>
        </div>
    </main>
    <?php get_template_part('partials/main/parallax'); ?>
    <?php
	get_footer();
?>