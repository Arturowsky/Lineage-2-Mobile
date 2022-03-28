<?php
	/*
		Template Name: Agationy
		Template Post Type: page
	*/

	get_header();
?>
    <main>
        <div class="text-white place-center" style="background: url('<?= get_template_directory_uri() ?>/assets/img/agationsy.jpg') center / cover no-repeat;height: 600px;">
            <div>
                <h1 class="display-1 text-center mx-2" style="font-family: Poppins, sans-serif;">Agationy</h1>
                <p class="lead text-center fw-bold mt-3 mx-2" style="border-color: rgb(191,191,191);">Pierwszy polski fanpage poświecony Lineage 2 Mobile</p>
            </div>
        </div>
        <?php $post_id = get_the_ID(); ?>
        <?php get_template_part('partials/main/breadcrumbs'); ?>
        <div class="container mb-2">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col col-lg-9">
                    <h1 class="display-6" style="font-family: Poppins, sans-serif;"></h1>
                    <p>Spis agationów dostępnych w grze.</p>
                    <?php
                        $args = array(
                            'post_type' => 'agation',
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
                        <div class="col text-center d-lg-flex d-xxl-flex justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center col-lg-2">
                            <img class="img-fluid" src="<?= get_the_post_thumbnail_url($post_id, '2880px') ?>" width="100" height="100" style="width: 100px;height: 100px;" /></div>
                        <div class="col col-lg-8 my-2">
                            <div>
                                <p class="lead text-center py-1 m-0"><?= get_the_title(); ?></p>
                                <p class="text-center p-0 m-0" style="font-family: Poppins, sans-serif;font-size: 14px;"><?= get_field('opis_wzmocnien') ?></p>
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
<?php
	get_footer();
?>