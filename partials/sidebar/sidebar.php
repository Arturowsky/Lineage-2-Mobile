<div class="col col-lg-3 mb-3">
    <p class="h3 display-6">lineage2m.pl</p>
    <?php get_search_form(); ?>
    <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/9e2cfaaea0de0d3c5edb0006d1bfdae459e94266_2_690x360.jpeg" loading="lazy" alt="purple">
        <div class="dropdown mb-3 border-0">
            <button class="btn btn-dark w-100 py-3 border-0" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="font-family: Poppins, sans-serif;font-size: 18px;border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download me-2">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                </svg>Pobierz Lineage 2 Mobile
            </button>
            <div class="dropdown-menu dropdown-menu-dark w-100">
                <a class="dropdown-item w-100" href="https://client-purple.download.ncupdate.com/L2M_RU/Lineage2M_for_PURPLE_5_0_5_5.exe" style="font-family: Poppins, sans-serif;"><i class="fab fa-windows me-2"></i>Windows</a>
                <a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.ncsoft.lineage2mru" style="font-family: Poppins, sans-serif;"><i class="fa fa-google me-2"></i>Google Play</a>
                <a class="dropdown-item" href="https://apps.apple.com/KR/app/id1229963744?mt=8" style="font-family: Poppins, sans-serif;"><i class="fa fa-apple me-2"></i>AppStore</a>
            </div>
        </div>
        <div class="accordion mb-3" role="tablist" id="accordion-1">
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="false" aria-controls="accordion-1 .item-1" style="font-family: Poppins, sans-serif;">
                        <img class="img-fluid me-3" src="<?= get_template_directory_uri() ?>/assets/img/Icon_WP_Staff_G3_002_256.png" width="40px" height="40px" alt="wszystkie bronie">Bronie
                    </button>
                </h2>
                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordion-1">
                    <div class="accordion-body">
                    <?php
                        $locations = get_nav_menu_locations();
                        $flatLinksNav = wp_get_nav_menu_items($locations['weapons']);
                        $linksNav = buildTree($flatLinksNav);
                    ?>
                        <ul class="list-group list-group-flush">
                        <?php
                            foreach ($linksNav as $navItem):
                        ?>
                            <li class="list-group-item"><a class="text-decoration-none" href="<?= $navItem->url ?>" style="color: rgb(100,104,109);font-family: Poppins, sans-serif;"><?= $navItem->title ?></a></li>
                        <?php
                            endforeach;
                        ?>   
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2" style="font-family: Poppins, sans-serif;">
                        <img class="img-fluid me-3" src="<?= get_template_directory_uri() ?>/assets/img/Icon_AR_Torso_G2_003_256.png" width="40px" height="40px" alt="wszystkie pancerze">Pancerze
                    </button>
                </h2>
                <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1">
                <div class="accordion-body">
                    <?php
                        $locations = get_nav_menu_locations();
                        $flatLinksNav = wp_get_nav_menu_items($locations['armors']);
                        $linksNav = buildTree($flatLinksNav);
                    ?>
                        <ul class="list-group list-group-flush">
                        <?php
                            foreach ($linksNav as $navItem):
                        ?>
                            <li class="list-group-item">
                                <a class="text-decoration-none" href="<?= $navItem->url ?>" style="color: rgb(100,104,109);font-family: Poppins, sans-serif;"><?= $navItem->title ?></a>
                            </li>
                        <?php
                            endforeach;
                        ?>   
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3" style="font-family: Poppins, sans-serif;">
                        <img class="img-fluid me-3" src="<?= get_template_directory_uri() ?>/assets/img/Icon_ACC_BMEarring_G0_001_256.png" width="40px" height="40px" alt="wszystkie akcesoria">Akcesoria
                    </button>
                </h2>
                <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                <div class="accordion-body">
                    <?php
                        $locations = get_nav_menu_locations();
                        $flatLinksNav = wp_get_nav_menu_items($locations['accesories']);
                        $linksNav = buildTree($flatLinksNav);
                    ?>
                        <ul class="list-group list-group-flush">
                        <?php
                            foreach ($linksNav as $navItem):
                        ?>
                            <li class="list-group-item">
                                <a class="text-decoration-none" href="<?= $navItem->url ?>" style="color: rgb(100,104,109);font-family: Poppins, sans-serif;"><?= $navItem->title ?></a>
                            </li>
                        <?php
                            endforeach;
                        ?>   
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-4" aria-expanded="false" aria-controls="accordion-1 .item-4" style="font-family: Poppins, sans-serif;">
                        <img class="img-fluid me-3" src="<?= get_template_directory_uri() ?>/assets/img/offtopic-logo.png" width="40px" height="40px" alt="wszystkie umiejetnosci">Umiejętności
                    </button>
                </h2>
                <div class="accordion-collapse collapse item-4" role="tabpanel" data-bs-parent="#accordion-1">
                <div class="accordion-body">
                    <?php
                        $locations = get_nav_menu_locations();
                        $flatLinksNav = wp_get_nav_menu_items($locations['skills']);
                        $linksNav = buildTree($flatLinksNav);
                    ?>
                        <ul class="list-group list-group-flush">
                        <?php
                            foreach ($linksNav as $navItem):
                        ?>
                            <li class="list-group-item">
                                <a class="text-decoration-none" href="<?= $navItem->url ?>" style="color: rgb(100,104,109);font-family: Poppins, sans-serif;"><?= $navItem->title ?></a>
                            </li>
                        <?php
                            endforeach;
                        ?>   
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-5" aria-expanded="false" aria-controls="accordion-1 .item-5" style="font-family: Poppins, sans-serif;"><img class="img-fluid me-3" src="<?= get_template_directory_uri() ?>/assets/img/lochy3.png" width="40px" height="40px" alt="spis lochoów">Lochy</button></h2>
                <div class="accordion-collapse collapse item-5" role="tabpanel" data-bs-parent="#accordion-1">
                <div class="accordion-body">
                    <?php
                        $locations = get_nav_menu_locations();
                        $flatLinksNav = wp_get_nav_menu_items($locations['dungeons']);
                        $linksNav = buildTree($flatLinksNav);
                    ?>
                        <ul class="list-group list-group-flush">
                        <?php
                            foreach ($linksNav as $navItem):
                        ?>
                            <li class="list-group-item">
                                <a class="text-decoration-none" href="<?= $navItem->url ?>" style="color: rgb(100,104,109);font-family: Poppins, sans-serif;"><?= $navItem->title ?></a>
                            </li>
                        <?php
                            endforeach;
                        ?>   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('partials/ads/sidebar2'); ?>
        <div class="my-3">
            <iframe src="https://discord.com/widget?id=660885024433766410&theme=light" width="100%" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>  
        <?php get_template_part('partials/ads/sidebar'); ?>
</div>