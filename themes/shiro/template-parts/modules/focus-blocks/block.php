<?php
/**
 * Handles single focus block.
 *
 * @package shiro
 */

$template_args = wmf_get_template_data();

if ( empty( $template_args['image'] ) && empty( $template_args['heading'] ) && empty( $template_args['content'] ) && empty( $template_args['link_uri'] ) ) {
	return;
}

$image = ! empty( $template_args['image'] ) ? $template_args['image'] : '';
$image = is_numeric( $image ) ? wp_get_attachment_image_src( $image, 'image_4x3_small' )[0] : $image;

$class = empty( $template_args['class'] ) ? 'img-right-content-left' : $template_args['class'];

?>
<a href="<?php echo esc_url( $template_args['link_uri'] ); ?>" class="w-32p mod-margin-bottom_sm focus-block rounded shadow">

			<span class="card">
				<?php if ( ! empty( $image ) ) : ?>
				<span class="bg-img-container">
					<div class="bg-img" style="background-image: url(<?php echo esc_url( $image ); ?>);"></div>
				</span>
				<?php endif; ?>

				<span class="card-content ">

					<?php if ( ! empty( $template_args['heading'] ) ) : ?>
					<h2 class="h2"><?php echo esc_html( $template_args['heading'] ); ?></h2>
					<?php endif; ?>

					<?php if ( ! empty( $template_args['content'] ) ) : ?>
					<span class="mar-bottom">
						<p ><?php echo esc_html( $template_args['content'] ); ?></p>
					</span>
					<?php endif; ?>

					<?php if ( ! empty( $template_args['link_uri'] ) && ! empty( $template_args['link_text'] ) ) : ?>
						<span class="arrow-link stick-to-bottom" href="<?php echo esc_url( $template_args['link_uri'] ); ?>"><?php echo esc_html( $template_args['link_text'] ); ?></span>
					<?php endif; ?>

				</span>
			</span>
	
</a>
