<footer style="background: rgb(33,37,41);">
        <div class="container" style="background: rgb(33,37,41);">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 pt-5 pb-5">
                <div class="col text-center">
                    <p class="text-white">Nawigacja po witrynie</p>
                    <?php
                        $locations = get_nav_menu_locations();
                        $flatLinksNav = wp_get_nav_menu_items($locations['footer-1']);
                        $linksNav = buildTree($flatLinksNav);
                    ?>
                    <ul class="list-unstyled p-0">
                        <?php
                            foreach ($linksNav as $navItem):
                        ?>
                        <li>
                            <a class="text-decoration-none footer-links-hover" href="<?= $navItem->url ?>" style="color: rgb(161,167,176);"><?= $navItem->title ?></a>
                        </li>
                        <?php
                            endforeach;
                        ?> 
                    </ul>
                </div>
                <div class="col text-center">
                    <p class="text-white">Lineage 2M</p>
                    <?php
                        $locations = get_nav_menu_locations();
                        $flatLinksNav = wp_get_nav_menu_items($locations['footer-2']);
                        $linksNav = buildTree($flatLinksNav);
                    ?>
                    <ul class="list-unstyled p-0">
                        <?php
                            foreach ($linksNav as $navItem):
                        ?>
                        <li>
                            <a class="text-decoration-none footer-links-hover" href="<?= $navItem->url ?>" style="color: rgb(161,167,176);"><?= $navItem->title ?></a>
                        </li>
                        <?php
                            endforeach;
                        ?> 
                    </ul>
                </div>
                <div class="col text-center">
                    <p class="text-white">Social media</p>
                    <?php
                        $locations = get_nav_menu_locations();
                        $flatLinksNav = wp_get_nav_menu_items($locations['footer-3']);
                        $linksNav = buildTree($flatLinksNav);
                    ?>
                    <ul class="list-unstyled p-0">
                        <?php
                            foreach ($linksNav as $navItem):
                        ?>
                        <li>
                            <a class="text-decoration-none footer-links-hover" href="<?= $navItem->url ?>" style="color: rgb(161,167,176);"><?= $navItem->title ?></a>
                        </li>
                        <?php
                            endforeach;
                        ?> 
                    </ul>
                </div>
                <div class="col text-center">
                    <div><img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/bi-lineage2m-type1%20(1).png" alt="Lineage 2 Mobile Polska" loading="lazy">
                        <p class="text-center p-0 m-0" style="color: rgb(188,191,194);">Ⓒ NCSOFT Corporation.&nbsp;All Rights Reserved.<br></p>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('partials/modals/navbar-menu'); ?>
    </footer>
    <div></div>
    <script src="<?= get_template_directory_uri() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/Incrementing-Animation.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/Lightbox-Gallery.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/Simple-Slider.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/lineage2mobileCustoms.js"></script>
</body>

</html>