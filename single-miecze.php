<?php
	get_header();
?>
    <main>
        <div class="text-white place-center" style="background: url('i16174726409.jpg') center / cover no-repeat;height: 600px;">
            <div>
                <h1 class="display-1 text-center mx-2" style="font-family: Poppins, sans-serif;">Miecze</h1>
                <p class="lead text-center fw-bold mt-3 mx-2" style="border-color: rgb(191,191,191);">Pierwszy polski fanpage poświecony Lineage 2 Mobile</p>
            </div>
        </div>
        <?php get_template_part('partials/main/breadcrumbs'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col col-lg-9">
                    <h1 class="display-6" style="font-family: Poppins, sans-serif;"></h1>
                    <p>The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent .container.</p>
                    <?php
                        $args = array(
                            'post_type' => 'miecz',
                            'posts_per_page' => 999
                        );
                        $loop = new WP_Query($args);

                        while ($loop->have_posts()) :
                            $loop->the_post();
                    ?>
                    <div class="row row-cols-1 py-3 m-2" style="border-radius: 5px;border: 1px solid rgb(191,191,191);background: #ffffff;">
                        <div class="col text-center d-lg-flex d-xxl-flex justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center col-lg-2">
                            <img class="img-fluid" src="one-hand-1.png" width="100" height="100" style="width: 100px;height: 100px;" /></div>
                        <div class="col col-lg-8 my-2">
                            <div>
                                <p class="lead text-center py-1 m-0"><?= get_field('nazwa_broni') ?></p>
                                <p class="text-center p-0 m-0" style="font-family: Poppins, sans-serif;font-size: 14px;"><?= get_field('opis_wzmocnien') ?></p>
                            </div>
                        </div>
                        <div class="col text-center d-lg-flex d-xxl-flex justify-content-lg-center align-items-lg-center align-items-xxl-center col-lg-2">
                            <div class="d-inline-flex place-center">
                                <div class="place-center">
                                    <p class="m-0 p-0" style="font-size: 28px;"><?= get_field('obrazenia') ?></p>
                                    <p class="m-0 p-0 text-muted" style="font-size: 12px;">obrażenia</p>
                                </div>
                                <div class="place-center ms-2">
                                    <p class="m-0 p-0" style="font-size: 28px;"><?= get_field('celnosc') ?></p>
                                    <p class="m-0 p-0 text-muted" style="font-size: 12px;">celność</p>
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