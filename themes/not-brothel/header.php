<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Not-Brothel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section id="main__fon">
    <header>
        <div class="container">
            <div class="header__main">
                <div class="header__logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php the_field('header_logo',6); ?>" alt="">
                    </a>
                </div>
                <div class="header__menu">
                    <div class="open-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="for-mobile-bg"></div>
                    <div class="menu-cnt mobile-bg-1">
                        <div class="sidenav">
                            <ul>
                               <?php
								$params = array(
								'container'=> false, 
								'echo'=> false, 
								'items_wrap'=> '%3$s', 
								'depth'=> 0, 
								'theme_location' => 'menu-1',
								);
								print strip_tags(wp_nav_menu( $params ), '<li><a>' );
								?>
                            </ul>
                            <div class="header__phone">
                                <a href="tel: <?php the_field('header_phone',6); ?>" class="button"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/phone.png" alt="">
                                    <?php the_field('header_phone',6); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="discover__main">
            <div class="discover__info">
                <p><?php the_field('block_1_title',6); ?></p>
                <?php the_field('block_1_text',6); ?>
                <div class="discover__href">
                    <a href="javascript:;" data-val="modal" class="open_modal btn">Оставить заявку</a>
                    <div class="discover__video">
                        <a class="popup-youtube video-click__icon"
                           href="<?php the_field('block_1_video_url',6); ?>" data-uk-lightbox="">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Polygon21.png" alt="png">
                        </a>
                        <p>Смотреть видео</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="discover__demand">
        <ul>
        	<?php if(get_field('block_1_reapiter',6)): ?>
			  <?php while(the_repeater_field('block_1_reapiter',6)): ?>
			     <li>
			     	<img src=" <?php the_sub_field('block_1_reapiter_icon',6); ?>" alt="">
	                <p><?php the_sub_field('block_1_reapiter_text',6); ?></p>
	            </li>
			  <?php endwhile; ?>
			<?php endif; ?>
        </ul>
    </div>
</section>
