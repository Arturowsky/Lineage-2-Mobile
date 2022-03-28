<?php
    $args = array(
        'post_type' => 'aktualnosc',
        'posts_per_page' => 9,
        'offset' => 2
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
<?php 
    $post_id = get_the_ID(); 
    $author_id = get_post_field('post_author', $post_id);
?>
    <div class="col mb-4">
        <div class="card">
            <div class="ratio ratio-16x9"><img src="<?= get_the_post_thumbnail_url($post_id, '1024px') ?>" alt="<?= $alt_text ?>"></div>
            <div class="card-body shadow-sm"><a class="card-link text-decoration-none" href="<?= get_the_permalink() ?>" style="color: rgb(46,47,50);">
                    <h2 class="mb-2 h4" style="font-family: Poppins, sans-serif;"><?= mb_strimwidth(get_the_title(), 0, 35, '…'); ?></h2>
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
                    <a class="p-0 text-decoration-none" href="#" style="border-style: none;color: rgb(118,118,119);font-family: Poppins, sans-serif;font-size: 14px;"><?= get_the_author_meta('display_name', $author_id) ?>
                        <span class=""><?= get_the_date() ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    endwhile;
    wp_reset_query();
?> 