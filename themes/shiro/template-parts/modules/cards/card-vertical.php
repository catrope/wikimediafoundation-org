<?php
/**
 * Basic index horizantal card
 *
 * @package shiro
 */

$card_data = wmf_get_template_data();

if ( empty( $card_data ) ) {
	return;
}

$link       = ! empty( $card_data['link'] ) ? $card_data['link'] : '';
$image_id   = ! empty( $card_data['image_id'] ) ? $card_data['image_id'] : '';
$title      = ! empty( $card_data['title'] ) ? $card_data['title'] : '';
$authors    = ! empty( $card_data['authors'] ) ? $card_data['authors'] : '';
$date       = ! empty( $card_data['date'] ) ? $card_data['date'] : '';
$excerpt    = ! empty( $card_data['excerpt'] ) ? $card_data['excerpt'] : '';
$categories = ! empty( $card_data['categories'] ) ? $card_data['categories'] : '';
$sidebar    = ! empty( $card_data['sidebar'] ) && true === $card_data['sidebar'] ? true : false;
$image_size = true === $sidebar ? 'image_4x5_large' : 'image_4x3_large';

?>
<div class="card card-vertical card-blog w-48p">
	<?php if ( ! empty( $image_id ) ) : ?>
		<a href="<?php echo esc_url( $link ); ?>" class="img-container rounded shadow">
			<?php echo wp_get_attachment_image( $image_id, $image_size ); ?>
		</a>
	<?php endif; ?>

	<div class="card-content">
		<div class="module-mu">
			<?php if ( ! empty( $title ) ) : ?>
			<h3 class="h3">
				<a href="<?php echo esc_url( $link ); ?>">
					<?php echo esc_html( $title ); ?>
				</a>
			</h3>
			<?php endif; ?>

			<?php if ( ! empty( $categories ) ) : ?>
			<h4>
				<?php
				foreach ( $categories as $category ) {
					printf( '<a class="category mar-right" href="%1$s">%2$s</a> ', esc_url( get_category_link( $category->term_id ) ), esc_html( $category->name ) );
				}
				?>
			</h4>
			<?php endif; ?>

			<?php if ( ! empty( $excerpt ) ) : ?>
			<div>
				<?php echo wp_kses_post( wpautop( $excerpt ) ); ?>
			</div>
			<?php endif; ?>

			<div class="post-meta ">
				<?php if ( ! empty( $date ) ) : ?>
				<time>
					<?php echo esc_html( $date ); ?>
				</time>
				<?php endif; ?>

				<?php if ( ! empty( $authors ) ) : ?>
				<span>
					<?php echo wp_kses_post( $authors ); ?>
				</span>
				<?php endif; ?>
			</div>

			<a href="<?php echo esc_url( $link ); ?>" class="arrow-link">Read more</a>
		</div>
	</div>
</div>
