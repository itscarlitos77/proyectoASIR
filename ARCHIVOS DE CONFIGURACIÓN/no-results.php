<?php
// Grupo Carlos, Luis e Isaac
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package VW Sports
 */
?>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'vw-sports' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php else : ?>

<center><h1 style="color: blueviolet;"><?php esc_html_e('PARTIDO NO ENCONTRADO...','vw-sports');?></h1></center><br>
<center><h2 style="color: white;"><?php esc_html_e('HASTA EL BICHO FALLA','vw-sports');?></h1></center><br />
	<center><img src="http://localhost:2000/wp-content/uploads/2023/05/BICHO-e1684525189353.jpg" alt="Image" style="max-width: 250px; height: auto;"></center>
	<div class="more-btn mt-4 mb-4">
		<a class="p-3" href="<?php echo esc_url(home_url() ); ?>"><?php esc_html_e( 'Volver', 'vw-sports' ); ?><i class="fas fa-angle-double-right ms-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Volver', 'vw-sports' ); ?></span></a>
	</div>

<?php endif; ?>
