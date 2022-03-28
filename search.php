<?php
/**
 * Search result page.
 */

get_header();
global $wp_query;

// echo '<pre/>';
// print_r($wp_query);
// wp_die();

?>
    <main>
        <div class="text-white place-center" style="background: url('<?= get_template_directory_uri() ?>/assets/img/vulkangray.jpg') top / cover no-repeat;height: 600px;">
            <div>
                <p class="lead text-center fw-bold mt-3 mx-2" style="border-color: rgb(191,191,191);"><?php _e( 'wyniki wyszukiwania dla frazy', 'locale' ); ?></p>
                <h1 class="display-1 text-center mx-2" style="font-family: Poppins, sans-serif;">...<?php the_search_query(); ?></h1>
                <p class="lead text-center fw-bold mt-3 mx-2" style="border-color: rgb(191,191,191);">znaleziono <span style="color: rgb(201,183,20);"><?php echo $wp_query->found_posts; ?></span> elementów</p>
            </div>
        </div>
        <?php get_template_part('partials/main/breadcrumbs'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col col-lg-9">
                    <div class="row row-cols-1 py-3 m-2" style="border-radius: 5px;border: 1px solid rgb(191,191,191);background: #ffffff;">
					<?php while ( have_posts() ) {
							the_post(); ?>
                        <div class="col my-2 border-bottom">
							<a class="text-decoration-none" href="<?php echo esc_url(get_the_permalink()); ?>">
                                <p class="p-0 m-0" style="font-family: Poppins, sans-serif;color: rgb(122,122,123);font-size: 14px;"><?php echo esc_url(get_the_permalink()); ?></p>
                                <h1 class="h3" style="font-family: Poppins, sans-serif; color: rgb(46,47,50);"><?= get_the_title() ?></h1>
                            </a>
                            <p style="font-family: Poppins, sans-serif;"><?= mb_strimwidth(get_the_excerpt(), 0, 150, '…') ?></p>
                        </div>
						<?php } ?>
                    </div>
                </div>
                <?php get_template_part('partials/sidebar/sidebar'); ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>