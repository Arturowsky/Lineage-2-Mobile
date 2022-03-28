<?php
	get_header();
    $tag = get_queried_object();
?>
<?php 
    if (have_posts()): 
        $post_id = get_post()->ID;
?>
<?php 
    $post_id = get_the_ID(); 
    $author_id = get_post_field('post_author', $post_id);
?>
    <main style="filter: brightness(100%);">
    <?php get_template_part('partials/main/breadcrumbs'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 mt-3">
                <div class="col col-lg-9 shadow-sm" style="background: #fffcfc;">
                    <div class="row row-cols-1 text-start">
                        <div class="col">
                            <h1 class="display-5 text-start pt-3 px-1" style="font-family: Poppins, sans-serif;"><?= get_the_title(); ?></h1>
                        </div>
                        <div class="col text-start">
                            <div class="row px-1">
                                <div class="col d-xxl-flex mb-2">
                                    <div class="d-inline-flex align-items-xxl-center">
                                        <a class="p-0 text-decoration-none" href="#" style="border-style: none;color: rgb(41,41,52);font-family: Poppins, sans-serif;font-size: 14px;"><?= get_the_author_meta('display_name', $author_id) ?>
                                            <span class="ms-1" style="color: rgb(155,155,156);font-size: 14px;"><?= get_the_date(); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body" style="background: url('<?= get_the_post_thumbnail_url($post_id, '800px') ?>') no-repeat;background-size: cover;filter: brightness(100%);height: 200px;"></div>
                            </div>
                        </div>
                        <div class="col">
                            <h2 class="h4" style="font-family: Poppins, sans-serif;color: rgb(53,54,57);">Czas trwania wydarzenia</h2>
                        </div>
                        <div class="col d-flex mb-3 mt-2">
                            <h3 class="h5 me-2" style="color: rgb(48,51,54);font-family: Poppins, sans-serif;font-size: 14px;">Od<i class="far fa-calendar-alt ms-1"></i> <?= get_field("czas_trwania_od"); ?></h3>
                            <h3 class="h5" style="color: rgb(186,112,125);font-family: Poppins, sans-serif;font-size: 14px;"> do <?= get_field("czas_trwania_do"); ?></h3>
                        </div>
                        <div class="col mb-3">
                            <h2 class="h4" style="font-family: Poppins, sans-serif;color: rgb(53,54,57);">Opis</h2>
                            <p class="text-break">
                                <?php
                                    the_post();
                                    the_content();
                                ?>
                            </p>
                        </div>
                    </div>
                    <?php get_template_part('partials/ads/singlenews'); ?>
                    <div class="row mt-3">
                        <div class="col">
                            <h1 class="display-6 d-xxl-flex justify-content-xxl-start align-items-xxl-center mb-3">Pozostałe eventy</h1>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2">
                    <?php
                        $args = array(
                            'post_type' => 'event',
                            'posts_per_page' => 4,
                            'post__not_in' => array( get_the_ID() )
                        );
                        $loop = new WP_Query($args);

                        while ($loop->have_posts()) :
                            $loop->the_post();
                    ?>
                        <?php
                            $post_id = get_post()->ID;
                            $img_id = get_post_thumbnail_id(get_the_ID());
                            $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body" style="background: url(&quot;<?= get_the_post_thumbnail_url($post_id, '800px') ?>&quot;) no-repeat;background-size: cover;filter: brightness(100%);">
                                    <h2 class="card-title h4" style="font-family: Poppins, sans-serif;color: rgb(255,255,255);"><?= get_the_title(); ?></h2>
                                    <h3 class="card-subtitle mb-2 mt-2 h6" style="color: rgb(255,255,255);">
                                        <i class="far fa-calendar-alt"></i>&nbsp; <?= get_field("czas_trwania_od"); ?>
                                    </h3>
                                    <a class="btn btn-light mt-3" type="button" style="font-family: Poppins, sans-serif;font-size: 14px;" href="<?= get_the_permalink() ?>">
                                        <i class="fas fa-caret-right me-1"></i>
                                    więcej
                            </a>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                        ?>

                    </div>
                    
                </div>
                
                <?php get_template_part('partials/sidebar/sidebar'); ?>
            </div>
        </div>
    </main>
<?php
	endif;
?>
<?php get_template_part('partials/main/parallax'); ?>
<?php
    get_footer();
?>