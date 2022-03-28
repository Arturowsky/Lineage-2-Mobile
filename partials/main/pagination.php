<div class="container mb-2">
	<div class="row row-cols-lg-2 my-4">
		<div class="col place-center">
			<?= 
				str_replace(
					'<a ',
					'<a class="btn btn-light shadow-sm" style="font-size: 14px;font-family: Poppins, sans-serif;background: #494b4d;color: rgb(251,251,251);" ',
					get_previous_posts_link()
				)
			?>
		</div>
		<div class="col place-center">
			<?= 
				str_replace(
					'<a ',
					'<a class="btn btn-light shadow-sm" style="font-size: 14px;font-family: Poppins, sans-serif;background: #494b4d;color: rgb(251,251,251);" ',
					get_next_posts_link()
				)
			?>
		</div>
	</div>
</div>