<?php
	/*
		Template Name: Szukaj
		Template Post Type: page
	*/

	get_header();
?>

<main>
	<?php 
		if (have_posts()): 
			$post_id = get_post()->ID;
	?>
			<div>
				<div class="bg--image">
					<img 
						class="bg--image--background" 
						src="<?= get_template_directory_uri() ?>/assets/img/background/bg-hero.jpg"
					>
					<div class="text-white bg-dark bg--image--content pt--85 bg-opacity-50">
						<div class="container">
							<div class="pt-5 pb-3 pt-sm-6 pb-sm-4 pt-lg-7 pt-xxl-8">
								<h1 class="display-6 fw-bold"><?= get_the_title() ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="container">
					<div>
						<div class="row mx-sm-n4">
							<div class="col-xl-8 col-xxl-9 px-sm-4">
								<div class="py-5">
									<div class="row my-n3">
										<?php
											$args = array(
												'post_type' => 'page',
												'posts_per_page' => -1,
												's' => get_query_var('search')
											);
											$loop = new WP_Query($args);

											if ($loop->have_posts()):
												while ($loop->have_posts()):
													$loop->the_post();
										?>
													<div class="col-12 py-3">
														<?php get_template_part('partials/main/partials/cards/card-page'); ?>
													</div>
										<?php
												endwhile;
											endif;
										?>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-3 d-flex px-0 px-sm-4">
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php get_template_part('partials/main/partials/breadcrumbs'); ?>
	<?php
		endif;
	?>
	
	<?php get_template_part('partials/main/brands'); ?>
</main>

<?php
	get_footer();
?>