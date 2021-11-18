<!doctype html>
<html class="no-js" lang="<?php bloginfo("language"); ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo("name"); ?></title>

    <?php wp_head(); ?>
</head>

<body>
    <nav id="main-nav">
        <div class="container">
            <a href="<?php echo site_url();?>" class="logo"><?php bloginfo('name'); ?></a>
            <!-- اظهار القائمة تلقائيا -->
            <?php $args=array('them-location' => 'main-menu'); ?>
            <?php wp_nav_menu($args); ?>
            <!-- <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">about</a></li>
                </ul> -->
        </div>
    </nav>