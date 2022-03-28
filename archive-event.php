<?php
	get_header();
    $tag = get_queried_object();
?>
<?php $post_id = get_the_ID(); ?>
    <main>
        <div class="text-white place-center" style="background: url('<?= get_template_directory_uri() ?>/assets/img/eventy2.jpg') center / cover no-repeat;height: 600px;">
            <div class="place-center">
                <h1 class="display-1 text-center mx-2" style="font-family: Poppins, sans-serif;">Eventy</h1>
                <p class="lead text-center fw-bold mt-3 mx-2">Lineage 2 Mobile</p>
            </div>
        </div>
        <?php get_template_part('partials/main/breadcrumbs'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 mt-3">
                <div class="col mb-3">
                    <h1 class="display-6">Wszystkie wydarzenia z gry</h1>
                </div>
                <div class="col col-lg-9">
                <?php
                        $args = array(
                            'post_type' => 'event',
                            'posts_per_page' => 999
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
                    <div class="row row-cols-1 py-3 m-2" style="border-radius: 5px;border: 1px solid rgb(191,191,191);background: #ffffff;">
                        <div class="col text-center d-lg-flex d-xxl-flex justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center col-lg-3">
                            <img class="img-fluid" src="<?= get_the_post_thumbnail_url($post_id, '320px') ?>" loading="lazy" alt="<?= get_the_title(); ?>" />
                        </div>
                        <div class="col col-lg-9 my-2">
                            <div>
                                <p class="lead text-start py-1 m-0"><?= get_the_title(); ?></p>
                                <p class="text-start p-0 m-0" style="font-family: Poppins, sans-serif;font-size: 14px;color: rgb(166,169,171);">
                                <svg class="bi bi-clock me-1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                                </svg>Start: <?= get_field("czas_trwania_od"); ?> 
                                <svg class="bi bi-clock-history ms-2 me-1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path>
                                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"></path>
                                </svg>Koniec: <?= get_field("czas_trwania_do"); ?></p>
                                <a class="btn btn-light mt-2" type="button" style="font-family: Poppins, sans-serif;font-size: 14px;" href="<?= get_the_permalink() ?>">
                                    <i class="fas fa-chevron-right me-1"></i>czytaj więcej
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                </div>
                <?php get_template_part('partials/sidebar/sidebar'); ?>
            </div>
        </div>
    </main>
    <?php get_template_part('partials/main/parallax'); ?>
<?php
	get_footer();
?>