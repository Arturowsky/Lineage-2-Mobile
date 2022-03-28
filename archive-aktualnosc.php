<?php
	get_header();
    $tag = get_queried_object();
?>

<?php 
    $post_id = get_the_ID(); 
    $author_id = get_post_field('post_author', $post_id);
?>
    <main>
        <div class="text-white place-center" style="background: url('<?= get_template_directory_uri() ?>/assets/img/siege.jpg') center / cover no-repeat;height: 600px;">
            <div class="place-center">
                <h1 class="display-1 text-center mx-2" style="font-family: Poppins, sans-serif;">Aktualności</h1>
                <p class="lead text-center fw-bold mt-3 mx-2">Lineage 2 Mobile</p>
            </div>
        </div>
        <?php get_template_part('partials/main/breadcrumbs'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 mt-3">
                <div class="col mb-3">
                    <h1 class="display-6">Wszystkie wpisy na stronie</h1>
                </div>
                <div class="col col-lg-9">
                    <div class="row row-cols-1 row-cols-lg-3">
                    <?php
                        $currentPage = get_query_var('paged');
                        $args = array(
                            'post_type' => 'aktualnosc',
                            'posts_per_page' => 12,
							'paged' => $currentPage
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
                        <div class="col mb-4">
                            <div class="card">
                                <div class="ratio ratio-16x9">
                                    <img src="<?= get_the_post_thumbnail_url($post_id, '320px') ?>" alt="<?= get_the_title(); ?>" loading="lazy" />
                                </div>
                                <div class="card-body shadow-sm">
                                    <a class="card-link text-decoration-none" href="<?= get_the_permalink() ?>" style="color: rgb(46,47,50);">
                                        <h2 class="mb-2 h4" style="font-family: Poppins, sans-serif;"><?= get_the_title(); ?></h2>
                                        <ul class="list-inline">
                                        <?php $posttags = get_the_tags(); ?>
                                        <?php foreach($posttags as $tag): ?>
                                            <li class="list-inline-item">
                                                <a href="<?= $tag->name ?>" style="font-family: Poppins, sans-serif;font-size: 15px;color: rgb(69,70,74);">#<?= $tag->name ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                        </ul>
                                    </a>
                                    <p class="card-text mt-3" style="font-size: 14px;font-family: Poppins, sans-serif;color: rgb(71,73,77);"><?= mb_strimwidth(get_the_excerpt(), 0, 120, '…'); ?></p>
                                    <div class="d-inline-flex align-items-center align-items-xxl-center">
                                        <a class="ms-2 p-0 text-decoration-none" href="#" style="border-style: none;color: rgb(118,118,119);font-family: Poppins, sans-serif;font-size: 14px;"><?= get_the_author_meta('display_name', $author_id) ?>
                                            <span class="ms-1"><?= get_the_date(); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                    
                    </div>
                    <?php get_template_part('partials/main/pagination'); ?>
                </div>
                
                <?php get_template_part('partials/sidebar/sidebar'); ?>
            </div>
        </div>
    </main>
    <?php get_template_part('partials/main/parallax'); ?>
<?php
	get_footer();
?>