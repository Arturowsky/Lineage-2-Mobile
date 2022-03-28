<?php
	/*
		Template Name: LOCHY: Wieża Cruma
		Template Post Type: page
	*/

	get_header();
?>
    <main>
        <div class="text-white place-center" style="background: url('<?= get_template_directory_uri() ?>/assets/img/crumatowerlochy.jpg') center / cover no-repeat;height: 600px;">
            <div>
                <h1 class="display-1 text-center mx-2" style="font-family: Poppins, sans-serif;">Wieża Cruma</h1>
                <p class="lead text-center fw-bold mt-3 mx-2" style="border-color: rgb(191,191,191);">Pierwszy polski fanpage poświecony Lineage 2 Mobile</p>
            </div>
        </div>
        <?php get_template_part('partials/main/breadcrumbs'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
            <div class="col col-lg-9" style="background: #ffffff;">
                <h1 class="display-6" style="font-family: Poppins, sans-serif;"></h1>
                <p class="lead">Loch przeznaczony dla postaci z poziomem: 30-58 level. <br /><br />Wieża Cruma jest bardzo dobrze znana miłosnikom Lineage 2. Znajdująca się na obrzeżach Dion instancja posiada łącznie siedem pięter, pierwsze sześć z nich przeznaczone jest do farmienia trzech rodzajów pierścieni, które dają odporność na ogień, ziemię czy ciemność - wszystkie będą przydatne na późniejszym etapie gry. W Cruma, można też znaleść czerwone księgi z umiejętnościami ale przy obecnej szanie na drop uważam, że szansa na ich zdobycie graniczy z cudem. Ostatnie, siódme piętro to jest komnata z Raid Bossem - Szerzyciel Podatności i to również z nim możemy zmierzyć się na 10lvl klanu wykupując dostęp poprzez stworzenie 3 złotych kluczy. <br /><br /></p>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2">
                    <div class="col mb-3"><img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/c1.jpg" />
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="fw-bold" style="font-family: Poppins, sans-serif;">Wieża Cruma B1</span></li>
                            <li class="list-group-item"><span style="font-family: Poppins, sans-serif;">EXP: 1,500 - 1,800</span></li>
                        </ul>
                    </div>
                    <div class="col mb-3"><img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/c2.jpg" />
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="fw-bold" style="font-family: Poppins, sans-serif;">Wieża Cruma B2</span></li>
                            <li class="list-group-item"><span style="font-family: Poppins, sans-serif;">EXP: 1,900 - 2,100</span></li>
                        </ul>
                    </div>
                    <div class="col mb-3"><img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/c3.jpg" />
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="fw-bold" style="font-family: Poppins, sans-serif;">Wieża Cruma B3</span></li>
                            <li class="list-group-item"><span style="font-family: Poppins, sans-serif;">EXP: 3,100 - 3,900</span></li>
                        </ul>
                    </div>
                    <div class="col mb-3"><img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/c4.jpg" />
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="fw-bold" style="font-family: Poppins, sans-serif;">Wieża Cruma B4</span></li>
                            <li class="list-group-item"><span style="font-family: Poppins, sans-serif;">EXP: 4,100 - 4,900</span></li>
                        </ul>
                    </div>
                    <div class="col mb-3"><img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/c5.jpg" />
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="fw-bold" style="font-family: Poppins, sans-serif;">Wieża Cruma B5</span></li>
                            <li class="list-group-item"><span style="font-family: Poppins, sans-serif;">EXP: 6,400 - 7,500</span></li>
                        </ul>
                    </div>
                    <div class="col mb-3"><img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/c6.jpg" />
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="fw-bold" style="font-family: Poppins, sans-serif;">Wieża Cruma B6</span></li>
                            <li class="list-group-item"><span style="font-family: Poppins, sans-serif;">EXP: 8,500 - 11,000</span></li>
                        </ul>
                    </div>
                </div>
                <?php get_template_part('partials/ads/singlenews'); ?>
                    <br>
            </div>
                <?php get_template_part('partials/sidebar/sidebar'); ?>
            </div>
        </div>
    </main>
    <?php get_template_part('partials/main/parallax'); ?>
    <?php
	get_footer();
?>