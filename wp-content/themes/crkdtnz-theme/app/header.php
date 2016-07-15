<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- build:css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/libs.css">
    <!-- endbuild -->
    <!-- build:css2 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <!-- endbuild -->

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <title><? echo get_bloginfo('name');?> - <? echo get_bloginfo('description') ?></title>
</head>
<body <?php body_class(); ?>>

<?php
    if (is_front_page()) {
        echo "<!-- _____________________________section-1____________________________ -->\n\n";
        include_once "home-post.php";
    }
    else {
        echo "<!-- _____________________________section-index____________________________ -->\n\n";
        include_once "inner-menu.php";
    }
?>