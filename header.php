<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
	<?php get_template_part('partials/header/head'); ?>
</head>

<body style="background: rgb(242,242,242);">
    <header style="background: rgb(34,34,34);color: rgb(33, 37, 41);">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/bi-lineage2m-type1%20(1).png" style="width: 200px;" alt="Lineage 2 Mobile Polska">
                    </a>
                    <button data-bs-toggle="modal" data-bs-target="#modal-1" class="navbar-toggler">
                        <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="filter: invert(87%);"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                    <?php
                        $locations = get_nav_menu_locations();
                        $flatLinksNav = wp_get_nav_menu_items($locations['main-menu']);
                        $linksNav = buildTree($flatLinksNav);
                    ?>	
                        <ul class="navbar-nav ms-3">
                        <?php
                            foreach ($linksNav as $navItem):
                                if ($navItem->children):
                        ?> 
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="<?= $navItem->url ?>" style="font-family: Poppins, sans-serif;color: rgba(193,192,192,0.9);"><?= $navItem->title ?></a>
                                <div class="dropdown-menu">
                                    <?php foreach ($navItem->children as $child): ?>
                                        <a class="dropdown-item" href="<?= $child->url ?>"><?= $child->title ?></a>
                                    <?php endforeach; ?>
                                </div>
                            <?php
                                else:       
                            ?>      
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= $navItem->url ?>" style="color: rgba(193,192,192,0.9);font-family: Poppins, sans-serif;"><?= $navItem->title ?></a>
                            </li>         
                            <?php
                                    endif;
                                endforeach;
                            ?>

                            <li class="nav-item">
                                <a class="nav-link active" href="#" style="color: rgba(193,192,192,0.9);font-family: Poppins, sans-serif;">
                                    <i class="fab fa-facebook-f" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" style="color: var(--bs-gray-200);font-size: 24px;" title="Facebook Lineage2m.pl"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" style="color: rgba(193,192,192,0.9);font-family: Poppins, sans-serif;">
                                    <i class="fab fa-discord" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" style="color: var(--bs-gray-200);font-size: 24px;" title="Discord Lineage2m.pl"></i>&nbsp;
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>