<div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-lg-down" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: rgb(34,34,34);color: rgb(220,223,225);">
            <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/bi-lineage2m-type1%20(1).png" style="width: 200px;">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter:invert(1)"></button>
        </div>
            <div class="modal-body" style="background: rgb(228,224,224);transform: scale(1.01);">
            <?php
                $locations = get_nav_menu_locations();
                $flatLinksNav = wp_get_nav_menu_items($locations['main-menu-mobile']);
                $linksNav = buildTree($flatLinksNav);
            ?>
                <ul class="list-group text-center list-group-flush" style="background: rgb(228,224,224);">
                <?php
                    foreach ($linksNav as $navItem):
                ?>
                    <li class="list-group-item" style="background: rgb(228,224,224);">
                        <a class="text-decoration-none" href="<?= $navItem->url ?>" style="color: rgb(45,46,48);font-family: Poppins, sans-serif;font-size: 18px;"><?= $navItem->title ?></a>
                    </li>
                <?php
                    endforeach;
                ?>  
                </ul>
            </div>
            <div class="modal-footer" style="background: rgb(228,224,224);"></div>
        </div>
    </div>
</div>