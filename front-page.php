<?php
	get_header();
    $tag = get_queried_object();
?>
    <main>
        <div class="text-white place-center" style="background: url(&quot;<?= get_template_directory_uri() ?>/assets/img/yongseok-jung-d-1.jpg&quot;) bottom / cover no-repeat;height: 600px;">
            <div>
                <h1 class="display-1 text-center mx-2" style="font-family: Poppins, sans-serif;transform: perspective(2500px);">Lineage 2 Mobile Polska&nbsp;</h1>
                <p class="lead text-center fw-bold mt-3 mx-2" style="border-color: rgb(191,191,191);">Pierwszy polski fanpage poświecony Lineage 2 Mobile</p>
            </div>
        </div>
        <?php get_template_part('partials/main/breadcrumbs'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col mb-3">
                    <h1 class="display-6">Najnowsze aktualności</h1>
                </div>
                <div class="col col-lg-9">
                    <div class="row row-cols-1 row-cols-lg-2">
                    <?php get_template_part('partials/main/first-two'); ?>
                    </div>
                    <?php get_template_part('partials/main/youtube'); ?>
                    <div class="row">
                        <div class="col">
                            <h1 class="display-6 mb-3 mt-3">Dołącz do naszej społeczności</h1>
                        </div>
                    </div>
                    <?php get_template_part('partials/main/slider'); ?>
                    <?php get_template_part('partials/main/event'); ?>
                    
                    <div class="row">
                        <div class="col">
                            <h1 class="display-6 mb-3">Pozostałe aktualności</h1>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-3 mt-3">
                    <?php get_template_part('partials/main/next-ten'); ?>
                    </div>
                    <div class="text-center mb-3 mt-3"><a class="btn btn-primary border-0 btn-outline-dark p-3 shadow-sm" role="button" style="font-family: Poppins, sans-serif;background: #494b4d;color: rgb(251,251,251);" href="/aktualnosc"><i class="fas fa-external-link-alt me-2"></i>zobacz wszystkie aktualności</a></div>
                </div>
                <?php get_template_part('partials/sidebar/sidebar'); ?>
            </div>
        </div>
    </main>
    <?php get_template_part('partials/main/parallax'); ?>

    <?php
	get_footer();
?>