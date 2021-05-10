<?php
/**
 * Hooks for the footer.
 *
 * @package    ThemeGrill
 * @subpackage ColorMag
 * @since      ColorMag 2.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! function_exists( 'colormag_main_section_inner_end' ) ) :

	/**
	 *  Main section inner ends.
	 */
	function colormag_main_section_inner_end() {
		?>
		</div><!-- .inner-wrap -->
		<?php
	}

endif;


if ( ! function_exists( 'colormag_main_section_end' ) ) :

	/**
	 * Main section ends.
	 */
	function colormag_main_section_end() {
		?>
		</div><!-- #main -->
		<?php
	}

endif;


if ( ! function_exists( 'colormag_advertisement_above_footer_sidebar' ) )  :

	/**
	 * Advertisement above footer sidebar area.
	 */
	function colormag_advertisement_above_footer_sidebar() {

		if ( is_active_sidebar( 'colormag_advertisement_above_the_footer_sidebar' ) ) :
			?>
			<div class="advertisement_above_footer">
				<div class="inner-wrap">
					<?php dynamic_sidebar( 'colormag_advertisement_above_the_footer_sidebar' ); ?>
				</div>
			</div>
			<?php
		endif;

	}

endif;


if ( ! function_exists( 'colormag_footer_start' ) ) :

	/**
	 * Footer starts.
	 */
	function colormag_footer_start() {
		?>
		<footer id="colophon" class="clearfix <?php echo esc_attr( colormag_footer_layout_class() ); ?>">
		<?php
	}

endif;


if ( ! function_exists( 'colormag_footer_sidebar' ) ) :

	/**
	 * Footer sidebar.
	 */
	function colormag_footer_sidebar() {
		get_sidebar( 'footer' );
	}

endif;


if ( ! function_exists( 'colormag_footer_socket_inner_wrapper_start' ) ) :

	/**
	 * Footer socket inner wrapper starts.
	 */
	function colormag_footer_socket_inner_wrapper_start() {
		?>
		<div class="footer-socket-wrapper clearfix">
			<div class="inner-wrap">
		<?php
	}

endif;


if ( ! function_exists( 'colormag_footer_socket_area_start' ) ) :

	/**
	 * Footer socket area starts.
	 */
	function colormag_footer_socket_area_start() {
		?>
		<div class="footer-socket-area">
		<?php
	}

endif;


if ( ! function_exists( 'colormag_footer_socket_right_section' ) ) :

	/**
	 * Footer socket area right section.
	 */
	function colormag_footer_socket_right_section() {

		$social_links_enable   = get_theme_mod( 'colormag_social_icons_activate', 0 );
		$social_links_location = get_theme_mod( 'colormag_social_icons_footer_activate', 1 );
		?>

		<div class="footer-socket-right-section">
			<?php
			if ( 1 == $social_links_enable && 1 == $social_links_location ) {
				colormag_social_links();
			}
			?>
		</div>

		<?php

	}

endif;


if ( ! function_exists( 'colormag_footer_socket_left_section' ) ) :

	/**
	 * Footer socket area left section.
	 */
	function colormag_footer_socket_left_section() {
		?>
		<div class="footer-socket-left-section">
			<?php do_action( 'colormag_footer_copyright' ); ?>
		</div>
		<?php
	}

endif;


if ( ! function_exists( 'colormag_footer_socket_area_end' ) ) :

	/**
	 * Footer socket area ends.
	 */
	function colormag_footer_socket_area_end() {
		?>
		</div><!-- .footer-socket-area -->
		<?php
	}

endif;


if ( ! function_exists( 'colormag_footer_socket_inner_wrapper_end' ) ) :

	/**
	 * Footer socket inner wrapper ends.
	 */
	function colormag_footer_socket_inner_wrapper_end() {
		?>
			</div><!-- .inner-wrap -->
		</div><!-- .footer-socket-wrapper -->
		<?php
	}

endif;


if ( ! function_exists( 'colormag_footer_end' ) ) :

	/**
	 * Footer ends.
	 */
	function colormag_footer_end() {
		?>
		</footer><!-- #colophon -->
		<?php
	}

endif;


if ( ! function_exists( 'colormag_scroll_top_button' ) ) :

	/**
	 * Scroll to top button.
	 */
	function colormag_scroll_top_button() {
		?>
		<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
		<?php
	}

endif;


if ( ! function_exists( 'colormag_page_end' ) ) :

	/**
	 * Page end.
	 */
	function colormag_page_end() {
		?>
		</div><!-- #page -->
		<?php
	}

endif;


if ( ! function_exists( 'colormag_footer_copyright' ) ) :

	/**
	 * Shows the footer copyright information.
	 */
	function colormag_footer_copyright() {

		$site_link = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';

		$wp_link = '<a href="https://wordpress.org" target="_blank" title="' . esc_attr__( 'WordPress', 'colormag' ) . '" rel="nofollow"><span>' . esc_html__( 'WordPress', 'colormag' ) . '</span></a>';

		$tg_link = '<a href="https://themegrill.com/themes/colormag" target="_blank" title="' . esc_attr__( 'ColorMag', 'colormag' ) . '" rel="nofollow"><span>' . esc_html__( 'ColorMag', 'colormag' ) . '</span></a>';

		$default_footer_value = sprintf( /* Translators: %1$s: Current year, %2$s: Site link */ esc_html__( 'Copyright &copy; %1$s %2$s. All rights reserved.', 'colormag' ), date( 'Y' ), $site_link ) . '<br>' . sprintf( /* Translators: %1$s: Theme name, %2$s: ThemeGrill site link */ esc_html__( 'Theme: %1$s by %2$s.', 'colormag' ),  $tg_link, 'ThemeGrill' ) . ' ' . sprintf( /* Translators: %s: WordPress link */ esc_html__( 'Powered by %s.', 'colormag' ), $wp_link );

		$colormag_footer_copyright = '<div class="copyright">' . $default_footer_value . '</div>';

		echo $colormag_footer_copyright; // phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped

	}
endif;
	if ( ! function_exists( 'colormag_footer_alterado' ) ) :

		/**
		 * Shows the footer copyright information.
		 */
		function colormag_footer_alterado() {

			$cssFooter = "
			section {
				padding: 60px 0;
			}
			
			section .section-title {
				text-align: center;
				color: #007b5e;
				margin-bottom: 50px;
				text-transform: uppercase;
			}
			#footer {
				background: #007b5e !important;
			}
			#footer h5{
				padding-left: 10px;
				border-left: 3px solid #eeeeee;
				padding-bottom: 6px;
				margin-bottom: 20px;
				color:#ffffff;
			}
			#footer a {
				color: #ffffff;
				text-decoration: none !important;
				background-color: transparent;
				-webkit-text-decoration-skip: objects;
			}
			#footer ul.social li{
				padding: 3px 0;
			}
			#footer ul.social li a i {
				margin-right: 5px;
				font-size:25px;
				-webkit-transition: .5s all ease;
				-moz-transition: .5s all ease;
				transition: .5s all ease;
			}
			#footer ul.social li:hover a i {
				font-size:30px;
				margin-top:-10px;
			}
			#footer ul.social li a,
			#footer ul.quick-links li a{
				color:#ffffff;
			}
			#footer ul.social li a:hover{
				color:#eeeeee;
			}
			#footer ul.quick-links li{
				padding: 3px 0;
				-webkit-transition: .5s all ease;
				-moz-transition: .5s all ease;
				transition: .5s all ease;
			}
			#footer ul.quick-links li:hover{
				padding: 3px 0;
				margin-left:5px;
				font-weight:700;
			}
			#footer ul.quick-links li a i{
				margin-right: 5px;
			}
			#footer ul.quick-links li:hover a i {
				font-weight: 700;
			}
			
			@media (max-width:767px){
				#footer h5 {
				padding-left: 0;
				border-left: transparent;
				padding-bottom: 0px;
				margin-bottom: 10px;
			}
			}";
			$novoHtmlFooter = '
			<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
			<style>'.$cssFooter.'</style>
			
			<footer>
			<section id="footer">
			<div class="container">
				<div class="row text-center text-xs-center text-sm-left text-md-left">
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Quick links</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="https://github.com/gabriel-ricarte" target="_blank"><i class="fa fa-angle-double-right"></i>Git</a></li>
							<li><a href="https://www.capgemini.com/br-pt/our-company/" target="_blank"><i class="fa fa-angle-double-right"></i>Sobre</a></li>
							<li><a href="https://www.capgemini.com/br-pt/our-services/" target="_blank"><i class="fa fa-angle-double-right"></i>Serviços</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Aqui foi um footer alterado com links abrindo uma nova guia !</h5>					
					</div>
				</div>				
			</div>
		</section>
		</footer>
		';			
	
			echo $novoHtmlFooter; // phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped
	
		}

endif;
