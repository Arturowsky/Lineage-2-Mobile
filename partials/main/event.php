<div class="row mt-3">
    <div class="col">
        <h1 class="display-6 d-xxl-flex justify-content-xxl-start align-items-xxl-center mb-3">Eventy</h1>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-2">
<?php
        $args = array(
            'post_type' => 'event',
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