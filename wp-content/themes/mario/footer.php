<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mario
 */

?>

	<footer id="colophon" class="page-footer">
		<div class="site-info">
			<a class="logo logo--footer" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo__img" src="/wp-content/themes/mario/resources/img/logo/logo-mario-white.png" width="180px"> </a>
			<p>Інтернет-магазин <span> mario.in.ua </span>є офіційним дистриб'ютором ТМ Маріо в Україні. Компанія "Маріо" спеціалізується на виготовленні водяних і електричних рушникосушок з високоякісної нержавіючої сталі.</p>
			<a class="link-more" href="">Детальніше</a>
		</div>
		<div class="footer-menu">
			<h3>Навігація по сайту</h3>
			<div class="footer-menu__wrap">
				
			</div>
		</div>
		<div class="client-info">

		</div>
		<div class="footer-contacts">
			<ul class="list">
				<li class="footer-contacts__tel">
					<a href="tel:+380737011707">
						+38 (073) 70-11-707
					</a>
				</li>
				<li class="footer-contacts__tel">
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
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
