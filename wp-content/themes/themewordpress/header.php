<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeWordPress
 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonder</title>
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrap">

    <header class="page-header">
        <h1>wonder</h1>
        <div class="page-title"></div>
        <nav>
            <ul class="nav navbar">
                <li class="active"><a href="<?php echo esc_url(home_url('/')); ?>" title="">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('features')); ?>" title="">Features</a></li>
                <li><a href="<?php echo esc_url(home_url('pages')); ?>" title="">Pages</a></li>
                <li><a href="<?php echo esc_url(home_url('gallery')); ?>" title="">Gallery</a></li>
                <li><a href="<?php echo esc_url(home_url('blog')); ?>" title="">Blog</a></li>
                <li><a href="<?php echo esc_url(home_url('contact')); ?>" title="">Contact</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </header><!-- /header -->


    <div id="content" class="site-content">
