<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php
	get_header();
    $tag = get_queried_object();
?>
<main>
<div class="container">
    <div class="row row-cols-1" style="min-height: 75vh;">
        <div class="col place-center mt-3"><img class="img-fluid mt-5 mb-3" src="<?= get_template_directory_uri() ?>/assets/img/l2m404.png" /></div>
        <div class="col place-center mb-3">
            <h1 class="text-center" style="font-family: Poppins, sans-serif;">Wyszukiwana strona nie została znaleziona <br /></h1>
            <p class="text-center mt-3 lead" style="font-family: Poppins, sans-serif;">Wygląda na to, że strona nie istnieje lub została przeniesiona na inny adres. Sprawdzaliśmy wszędzie 🧐<br /></p>
        </div>
        <div class="col text-center mt-3 mb-3">
            <a class="btn btn-primary me-3 my-1" type="button" style="font-family: Poppins, sans-serif;" href="/">Wróc do strony głównej</a>
        </div>
        <div class="col text-center mt-3 mb-3">
        <form action="/szukaj/" method="GET" class="form-inline">
								<div class="input-group input-group-sm bg-white align-items-center p-1 rounded-pill">
									<input name="wyszukaj" class="form-control rounded-0 border-0 mx-2" type="text" placeholder="Wyszukaj">
									<div class="input-group-append">
										<button class="btn btn-primary rounded-pill" type="submit">
											<span class="font-weight-bold">Szukaj</span>
										</button>
									</div>
								</div>
							</form>
        </div>
        
    </div>
</div>
</main>
<?php
	get_footer();
?>