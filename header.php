<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fasad-mk
 */
$contacts = fw_get_db_customizer_option();
$logo = isset(fw_get_db_customizer_option()['img_logo']['url']) ? fw_get_db_customizer_option()['img_logo']['url'] : '';
$logo_text = fw_get_db_customizer_option()['img_text'];
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/24fba2e677.js" crossorigin="anonymous"></script>
    <script src="<?php bloginfo( 'template_url');?>/js/fancybox.umd.js"></script>
    <link
            rel="stylesheet"
            href="<?php bloginfo( 'template_url');?>/assets/css/fancybox.css"
    />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation menu_block">
            <div class="menu_block_first">
                <div class="container">
                    <div class="block_logo">
                        <div class="up_head_left_logo">
                            <?php if($logo):?>
                                <a href="/">
                                    <img src="<?=$logo?>" title="<?=$logo_text?>">
                                </a>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="button_head_block">
                        <div class="header_button_callback">
                            <span><button id="popup__toggle2">Заказать карты</button></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_block_second">
                <div class="container">
                    <div class="up_head_menu">
                        <div id="page-submenu-trigger">
                            <i class="icon-reorder"></i>
                        </div>
                            <!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'fasad-mk' ); ?><!--</button>-->
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_id'        => 'primary-menu',
                                    'menu_class'        => 'desctop_menu',
                                    'menu' => 'Menu 1'
                                    
                                )
                            );
                        ?>
                        <div id="page-menu">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                )
                            );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
