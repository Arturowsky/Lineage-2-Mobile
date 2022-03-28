<?php
	/*
		Template Name: Umiejętność ogólne
		Template Post Type: page
	*/

	get_header();
?>
    <main>
        <div class="text-white place-center" style="background: url('<?= get_template_directory_uri() ?>/assets/img/fa640050a37a3bc5f97916f1cfe980fe4b9e1bf5.jpg') center / cover no-repeat;height: 600px;">
            <div>
                <h1 class="display-1 text-center mx-2" style="font-family: Poppins, sans-serif;">Umiejętności ogólne</h1>
                <p class="lead text-center fw-bold mt-3 mx-2" style="border-color: rgb(191,191,191);">Pierwszy polski fanpage poświecony Lineage 2 Mobile</p>
            </div>
        </div>
        <?php $post_id = get_the_ID(); ?>
        <?php get_template_part('partials/main/breadcrumbs'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col col-lg-9">
                    <h1 class="display-6" style="font-family: Poppins, sans-serif;"></h1>
                    <p>Umiejętności wykorzystywane przez wszystkie postacie dostępne w grze.</p>
                    <?php
                        $args = array(
                            'post_type' => 'skill_ogolny',
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
                        <div class="col text-center d-lg-flex d-xxl-flex justify-content-lg-center align-items-lg-center align-items-xxl-center col-lg-2">
                            <div class="d-inline-flex place-center">
                                <div class="place-center">
                                    <p class="m-0 p-0" style="font-size: 28px;"><?= get_field('mp') ?></p>
                                    <p class="m-0 p-0 text-muted" style="font-size: 12px;">mp</p>
                                </div>
                                <div class="place-center ms-2">
                                    <p class="m-0 p-0" style="font-size: 28px;"><?= get_field('ore') ?></p>
                                    <p class="m-0 p-0 text-muted" style="font-size: 12px;">ore</p>
                                </div>
                                <div class="place-center ms-2">
                                    <p class="m-0 p-0" style="font-size: 28px;"><?= get_field('odnowienie') ?></p>
                                    <p class="m-0 p-0 text-muted" style="font-size: 12px;">reuse</p>
                                </div>
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