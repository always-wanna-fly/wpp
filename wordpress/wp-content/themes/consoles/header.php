<!DOCTYPE html>
<html><head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
    <?php wp_head() ?>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo home_url();?>"><?php bloginfo('name');?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <?php wp_nav_menu(array(
            'theme_location'=>'top',
            'container'=>null,
            'menu_class'=>'navbar-nav mr-auto',
            'menu_id'=>'nav'
        ));?>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<body>