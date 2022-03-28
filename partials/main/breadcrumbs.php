<?php
	$breadcrumbs = [];
	
	$breadcrumbs[] = [
		'link' => get_home_url(),
		'label' => 'Lineage2m.pl'
	];
	
	if (is_post_type_archive() || is_tax() || is_single()):
		$pt_slug = get_post_type();
		$pt_object = get_post_type_object($pt_slug);
		
		$breadcrumbs[] = [
			'link' => get_post_type_archive_link($pt_slug),
			'label' => $pt_object->labels->name
		];
	endif;
	
	if (is_tax()): 
		$category = get_queried_object();
		
		$breadcrumbs[] = [
			'link' => get_term_link($category),
			'label' => $category->name
		];
	endif;
	
	if (is_single() || is_page()): 
		$post_id = get_post()->ID;
	
		$breadcrumbs[] = [
			'link' => get_the_permalink($post_id),
			'label' => get_the_title($post_id)
		];
	endif;
?>

<div class="container">
    <ol class="breadcrumb mt-3">
        <?php foreach ($breadcrumbs as $breadcrumb): ?>
            <li class="breadcrumb-item text-decoration-none" style="border-color: rgb(105,106,109);">
                <a class="text-decoration-none" href="<?= $breadcrumb['link'] ?>">
                    <span class="text-decoration-none" style="border-color: rgb(105,106,109);color: rgb(105,106,109);font-family: Poppins, sans-serif;font-size: 14px;"><?= $breadcrumb['label'] ?></span>
                </a>
            </li>
        <?php endforeach; ?>    
    </ol>
</div>