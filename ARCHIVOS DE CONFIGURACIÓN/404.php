<?php
// Grupo Carlos, Luis e Isaac
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Sports
 */

get_header(); ?>

<div class="container">
	<main id="maincontent" role="main">
		<div class="page-content">
	    	<h1><?php esc_html_e('NO ES EL PARTIDO QUE BUSCABAS','vw-sports');?></h1>
			<img src="http://localhost:2000/wp-content/uploads/2023/05/messitroste.jpg" style="height: 300px; width: auto;">

			<div class="more-btn mt-4 mb-4">
			    <a class="p-3" href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('VOLVER','vw-sports');?><i class="fas fa-angle-double-right ms-2"></i><span class="screen-reader-text"><?php esc_html_e('GO BACK','vw-sports');?></span></a>
			</div>
		</div>
		<div class="clearfix"></div>
	</main>
</div>

<?php get_footer(); ?>
