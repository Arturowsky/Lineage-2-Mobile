<div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-2">
    <div class="col">
        <h1 class="display-6 d-xxl-flex justify-content-xxl-start align-items-xxl-center mb-3">Youtube</h1>
    </div>
    <div class="col d-xxl-flex justify-content-xxl-end align-items-xxl-end">
        <p style="font-family: Poppins, sans-serif;"><a href="https://www.youtube.com/channel/UCewhKHC27K2C-1KM0_-hH3w" style="color: rgb(128,132,137);">zobacz wszystkie filmy</a></p>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
<?php
        $args = array(
            'post_type' => 'youtube',
            'posts_per_page' => 4
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
            <div class="card-body" style="background: url('<?= get_the_post_thumbnail_url($post_id, '800px') ?>') no-repeat;background-size: cover;filter: brightness(122%);">
                <h2 class="card-title h4" style="font-family: Poppins, sans-serif;color: rgb(225,229,234);"><?= get_the_title(); ?></h2>
                <a class="btn btn-light mt-3" href="<?= get_field("link_do_filmiku"); ?>" type="button" style="font-family: Poppins, sans-serif;font-size: 14px;">
                    <i class="fab fa-youtube me-1"></i>oglądaj
                </a>
            </div>
        </div>
    </div>
    <?php
        endwhile;
    ?>
</div>