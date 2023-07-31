<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mario
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="page-header">
		<!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$mario_description = get_bloginfo( 'description', 'display' );
			if ( $mario_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $mario_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>.site-branding -->

		<div class="container">

			<nav id="site-navigation" class="navigation">
				<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo__img" src="/wp-content/themes/mario/resources/img/logo/logo-mario-white.png" > </a>
				<button 
					type="button"
            		class="navigation__button"
            		aria-expanded="false" 
					aria-controls="primary-menu"
					data-menu-button>
						<svg class="navigation__burger-icon"  aria-label="Перемикач мобільного меню">
							<use class="navigation__icon-menu" href="/wp-content/themes/mario/assets/sprite.svg#mobile-icon-burger"></use>
            			</svg>
				</button>
				<div class="user-menu">

					<button type="button" class="user-menu__button user-menu__button--search">
						<svg class="user-menu__search-icon" aria-label="Пошук">
							<use href="/wp-content/themes/mario/assets/sprite.svg#search"></use>
						</svg>
					</button>
					<a class="user-menu__button user-menu__button--profile">
						<svg class="user-menu__profile-icon">
							<use href="/wp-content/themes/mario/assets/sprite.svg#office"></use>
						</svg>
						Кабінет
					</a>
					<a class="user-menu__button user-menu__button--favorites">
						<svg class="user-menu__favorites-icon"  aria-label="Вподобані">
							<use href="/wp-content/themes/mario/assets/sprite.svg#like-inactive"></use>
						</svg>
					</a>
					<a class="user-menu__button user-menu__button--cart">
						<svg class="user-menu__cart-icon" aria-label="Кошик">
							<use href="/wp-content/themes/mario/assets/sprite.svg#cart"></use>
						</svg>
					</a>
					<button 
						type="button"
						class="user-menu__button user-menu__button--language">
							<svg class="user-menu__language-arrow-icon">
								<use href="/wp-content/themes/mario/assets/sprite.svg#arrow"></use>
							</svg>
							UA
					</button>
				</div>
				
				
				
				
				<div class="navigation__container" id="primary-menu" data-menu>
					<div class="navigation__menu-wrap">
						<div class="main-menu">
							<div class="main-menu__links">
								<?php
								wp_nav_menu(
								array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								)
								);
								?>
						</div>
						<div class="menu-contacts">
							<ul class="list">
								<li class="menu-contacts__tel">
									<a href="tel:+380737011707">
										+38 (073) 70-11-707
									</a>
								</li>
								<li class="menu-contacts__tel">
									<a href="tel:+380677011707">
										+38 (067) 70-11-707
									</a>
								</li>
								<li>
									Пн.-Пт.: 9.00-19.00
								</li>
								<li>
									Сб: 10.00-16.00
								</li>
								<li>
									<a href="mailto:info@mario.in.ua">
										info@mario.in.ua
									</a>
								</li>
							</ul>
						</div>
						<div class="menu-socials">
							<ul>
								<li><a href="">Viber</a></li>
								<li><a href="">Telegram</a></li>
								<li><a href="">Whatsapp</a></li>
							</ul>
						</div>
							<button
							type="button"
							class="navigation__close-button"
							aria-expanded="false" 
							aria-controls="primary-menu"
							data-close-button>
								<svg class="navigation__close-icon"  aria-label="Закрити мобільне меню">
									<use class="navigation__icon-cross" href="/wp-content/themes/mario/assets/sprite.svg#mobile-icon-cross"></use>
								</svg>
						</button>
						</div>
					</div>
					
				</div>
				
			</nav><!-- #site-navigation -->
			</div>
	</header><!-- #masthead -->
