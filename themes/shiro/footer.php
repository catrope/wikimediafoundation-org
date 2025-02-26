<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shiro
 */

use WMF\Images\Credits;

// Automatically add credits to all content that is not an archive or search.
if ( ! is_archive() && ! is_home() ) {
	wmf_get_template_part( 'template-parts/modules/images/credits', Credits::get_instance()->get_ids() );
}
?>
</main>

<?php
$wmf_footer_text                    = get_theme_mod( 'wmf_footer_text', __( 'The Wikimedia Foundation, Inc is a nonprofit charitable organization dedicated to encouraging the growth, development and distribution of free, multilingual content, and to providing the full content of these wiki-based projects to the public free of charge.', 'shiro' ) );
$wmf_twitter_url                    = get_theme_mod( 'wmf_twitter_url' );
$wmf_facebook_url                   = get_theme_mod( 'wmf_facebook_url' );
$wmf_instagram_url                  = get_theme_mod( 'wmf_instagram_url' );
$wmf_projects_menu_label            = get_theme_mod( 'wmf_projects_menu_label', __( 'Projects', 'shiro' ) );
$wmf_movement_affiliates_menu_label = get_theme_mod( 'wmf_movement_affiliates_menu_label', __( 'Movement Affiliates', 'shiro' ) );
$wmf_footer_copyright               = get_theme_mod( 'wmf_footer_copyright', __( 'This work is licensed under a <a href="https://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0</a> unported license. Some images under <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC BY-SA</a>.', 'shiro' ) );
$wmf_other_links_menu_label = get_theme_mod( 'wmf_other_links_menu_label', __( 'Other', 'shiro' ) );
?>
<footer class="bg-black">
	<div class="footer-inner mw-980">

		<div class="footer-row">

			<?php
			if ( has_nav_menu( 'footer-under-text' ) ) {
				wp_nav_menu(
					array(
						'menu'       => 'footer-under-text',
						'menu_class' => '',
						'container'  => '',
					)
				);
			}
			?>

			<div class="footer-logo-container">
				<div class="logo-container">
					<?php
					$wmf_footer_image = get_theme_mod( 'wmf_footer_logo' );

					if ( empty( $wmf_footer_image ) ) :
						?>
					<svg width="279" height="62" viewBox="0 0 279 62" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<title><?php esc_html_e( 'Wikimedia Foundation', 'shiro' ); ?></title>
						<g transform="translate(1992 17360)">
							<g>
								<g>
									<use xlink:href="#path0_fillfull" transform="translate(-1992 -17360)"></use>
								</g>
							</g>
						</g>
						<defs>
							<path id="path0_fillfull" d="M 83.4609 25.8303L 87.8381 11.7278L 93.5763 11.7278L 97.9167 25.8303L 102.809 11.7278L 108.768 11.7278L 100.16 36.2428L 96.0775 36.2428L 90.6704 19.1809L 85.3001 36.2428L 81.2171 36.2428L 72.6099 11.7278L 78.5688 11.7278L 83.4609 25.8303ZM 111.747 11.7278L 117.265 11.7278L 117.265 36.2428L 111.747 36.2428L 111.747 11.7278ZM 123.334 11.7278L 128.851 11.7278L 128.851 21.8114L 138.157 11.7278L 144.962 11.7278L 135.141 22.5787C 135.987 23.7478 137.569 25.9399 139.849 29.1184C 142.13 32.297 143.822 34.6718 144.962 36.2428L 138.525 36.2428L 131.279 26.561L 128.815 29.3011L 128.815 36.2428L 123.297 36.2428L 123.297 11.7278L 123.334 11.7278ZM 148.383 11.7278L 153.901 11.7278L 153.901 36.2428L 148.383 36.2428L 148.383 11.7278ZM 182.076 20.825L 175.419 34.2334L 172.145 34.2334L 165.524 20.825L 165.524 36.2428L 160.007 36.2428L 160.007 11.7278L 167.474 11.7278L 173.837 25.2092L 180.237 11.7278L 187.668 11.7278L 187.668 36.2428L 182.15 36.2428L 182.15 20.825L 182.076 20.825ZM 211.466 11.7278L 211.466 16.5869L 199.181 16.5869L 199.181 21.6653L 210.216 21.6653L 210.216 26.3418L 199.181 26.3418L 199.181 31.4202L 211.871 31.4202L 211.871 36.2428L 193.7 36.2428L 193.7 11.7278L 211.466 11.7278ZM 235.596 14.9428C 237.95 17.0984 239.127 20.0578 239.127 23.8574C 239.127 27.657 237.987 30.6895 235.669 32.9181C 233.389 35.1467 229.858 36.2428 225.149 36.2428L 216.726 36.2428L 216.726 11.7278L 225.444 11.7278C 229.895 11.7278 233.242 12.8238 235.596 14.9428ZM 231.587 29.5203C 232.948 28.2416 233.61 26.4148 233.61 24.0035C 233.61 21.5922 232.948 19.7289 231.587 18.4502C 230.226 17.1349 228.166 16.5138 225.37 16.5138L 222.28 16.5138L 222.28 31.4202L 225.775 31.4202C 228.276 31.4202 230.226 30.7991 231.587 29.5203ZM 243.909 11.7278L 249.426 11.7278L 249.426 36.2428L 243.909 36.2428L 243.909 11.7278ZM 273.078 36.2428L 270.797 30.9452L 260.461 30.9452L 258.181 36.2428L 252.332 36.2428L 262.999 11.7278L 268.333 11.7278L 279 36.2428L 273.078 36.2428ZM 265.611 19.0348L 262.521 26.1591L 268.701 26.1591L 265.611 19.0348ZM 82.6517 47.386L 82.6517 50.3453L 87.4335 50.3453L 87.4335 52.0259L 82.6517 52.0259L 82.6517 56.4467L 80.8125 56.4467L 80.8125 45.7054L 88.022 45.7054L 88.022 47.386L 82.6517 47.386ZM 108.473 54.9122C 107.37 55.9717 106.046 56.4832 104.427 56.4832C 102.809 56.4832 101.485 55.9717 100.381 54.9122C 99.2776 53.8527 98.7259 52.5374 98.7259 50.9664C 98.7259 49.3954 99.2776 48.0801 100.381 47.0206C 101.485 45.9611 102.809 45.4496 104.427 45.4496C 106.046 45.4496 107.37 45.9611 108.473 47.0206C 109.577 48.0801 110.129 49.3954 110.129 50.9664C 110.129 52.5374 109.577 53.8527 108.473 54.9122ZM 107.149 48.2263C 106.414 47.459 105.494 47.0937 104.427 47.0937C 103.361 47.0937 102.441 47.459 101.705 48.2263C 100.97 48.9935 100.602 49.9069 100.602 50.9664C 100.602 52.0625 100.97 52.9758 101.705 53.7065C 102.441 54.4372 103.361 54.8391 104.427 54.8391C 105.494 54.8391 106.414 54.4738 107.149 53.7065C 107.885 52.9393 108.253 52.0259 108.253 50.9664C 108.253 49.8704 107.885 48.957 107.149 48.2263ZM 124.106 53.9623C 124.584 54.5468 125.283 54.8391 126.129 54.8391C 126.975 54.8391 127.637 54.5468 128.152 53.9623C 128.667 53.3777 128.888 52.6105 128.888 51.624L 128.888 45.6688L 130.727 45.6688L 130.727 51.6971C 130.727 53.2316 130.286 54.4372 129.44 55.2775C 128.594 56.1179 127.49 56.5197 126.166 56.5197C 124.842 56.5197 123.738 56.1179 122.892 55.2775C 122.046 54.4372 121.605 53.2681 121.605 51.6971L 121.605 45.6688L 123.444 45.6688L 123.444 51.624C 123.371 52.6105 123.628 53.3777 124.106 53.9623ZM 150.921 45.6688L 152.76 45.6688L 152.76 56.4101L 150.774 56.4101L 144.668 48.5916L 144.668 56.4101L 142.829 56.4101L 142.829 45.6688L 144.668 45.6688L 150.958 53.67L 150.958 45.6688L 150.921 45.6688ZM 173.175 47.0937C 174.205 48.0436 174.72 49.3223 174.72 51.0029C 174.72 52.6836 174.205 53.9988 173.212 54.9487C 172.219 55.9352 170.674 56.4101 168.577 56.4101L 165.009 56.4101L 165.009 45.6688L 168.724 45.6688C 170.637 45.6688 172.145 46.1438 173.175 47.0937ZM 172.917 51.0395C 172.917 48.5916 171.483 47.3494 168.687 47.3494L 166.848 47.3494L 166.848 54.693L 168.871 54.693C 170.196 54.693 171.189 54.4007 171.888 53.7796C 172.55 53.1585 172.917 52.2451 172.917 51.0395ZM 187.888 53.9623L 186.821 56.4101L 184.872 56.4101L 189.617 45.6688L 191.567 45.6688L 196.312 56.4101L 194.362 56.4101L 193.295 53.9623L 187.888 53.9623ZM 192.56 52.2817L 190.61 47.8609L 188.661 52.2817L 192.56 52.2817ZM 210.326 47.3494L 210.326 56.4101L 208.487 56.4101L 208.487 47.3494L 205.213 47.3494L 205.213 45.7054L 213.6 45.7054L 213.6 47.3494L 210.326 47.3494ZM 224.855 45.6688L 226.694 45.6688L 226.694 56.4101L 224.855 56.4101L 224.855 45.6688ZM 247.955 54.9122C 246.852 55.9717 245.527 56.4832 243.909 56.4832C 242.29 56.4832 240.966 55.9717 239.863 54.9122C 238.759 53.8527 238.208 52.5374 238.208 50.9664C 238.208 49.3954 238.759 48.0801 239.863 47.0206C 240.966 45.9611 242.29 45.4496 243.909 45.4496C 245.527 45.4496 246.852 45.9611 247.955 47.0206C 249.059 48.0801 249.61 49.3954 249.61 50.9664C 249.61 52.5374 249.059 53.8527 247.955 54.9122ZM 246.631 48.2263C 245.895 47.459 244.976 47.0937 243.909 47.0937C 242.842 47.0937 241.923 47.459 241.187 48.2263C 240.451 48.9935 240.083 49.9069 240.083 50.9664C 240.083 52.0625 240.451 52.9758 241.187 53.7065C 241.923 54.4372 242.842 54.8391 243.909 54.8391C 244.976 54.8391 245.895 54.4738 246.631 53.7065C 247.367 52.9393 247.734 52.0259 247.734 50.9664C 247.734 49.8704 247.367 48.957 246.631 48.2263ZM 269.252 45.6688L 271.092 45.6688L 271.092 56.4101L 269.105 56.4101L 262.999 48.5916L 262.999 56.4101L 261.16 56.4101L 261.16 45.6688L 262.999 45.6688L 269.289 53.67L 269.252 45.6688ZM 33.8405 49.9434C 43.1466 48.6282 50.2825 40.7001 50.2825 31.1279C 50.2825 25.2823 47.6341 20.0943 43.4777 16.5869L 33.8405 26.1591L 33.8405 49.9434ZM 28.4334 49.9434L 28.4334 26.1591L 18.7962 16.5504C 14.6397 20.0212 11.9913 25.2457 11.9913 31.0913C 11.9913 40.7001 19.1272 48.6282 28.4334 49.9434ZM 47.7813 14.5775C 52.232 18.9982 54.6597 24.8804 54.6597 31.0913C 54.6597 37.3023 52.1953 43.221 47.7813 47.6052C 43.3305 52.0259 37.4084 54.4372 31.1553 54.4372C 24.9022 54.4372 18.9433 51.9894 14.5293 47.6052C 10.1154 43.221 7.61411 37.3388 7.61411 31.0913C 7.61411 24.8438 10.0786 18.9617 14.4926 14.5775C 14.8604 14.2121 15.265 13.8468 15.6696 13.4814L 10.2993 8.14732C 9.89466 8.51267 9.52683 8.87802 9.12221 9.24337C 6.25313 12.0931 4.00936 15.3813 2.46447 19.0713C 0.846012 22.8709 0 26.9263 0 31.0913C 0 35.2563 0.809229 39.3117 2.46447 43.1114C 4.04614 46.8014 6.28991 50.0896 9.12221 52.9393C 11.9913 55.789 15.3018 58.0177 19.0169 59.5522C 22.8423 61.1597 26.9252 62 31.1185 62C 35.3118 62 39.3947 61.1962 43.2202 59.5522C 46.9353 57.9811 50.2457 55.7525 53.1148 52.9393C 55.9839 50.0896 58.2277 46.8014 59.7726 43.1114C 61.391 39.3117 62.237 35.2563 62.237 31.0913C 62.237 26.9263 61.4278 22.8709 59.7726 19.0713C 58.1909 15.3813 55.9471 12.0931 53.1148 9.24337C 52.747 8.87802 52.3424 8.51267 51.9378 8.14732L 46.6042 13.4814C 47.0088 13.8103 47.3767 14.1756 47.7813 14.5775ZM 31.1185 0C 36.4889 0 40.8293 4.31114 40.8293 9.64526C 40.8293 14.9794 36.4889 19.2905 31.1185 19.2905C 25.7482 19.2905 21.4078 14.9794 21.4078 9.64526C 21.4078 4.31114 25.7482 0 31.1185 0Z"></path>
						</defs>
					</svg>
					<?php else : ?>
						<img src="<?php echo esc_url( $wmf_footer_image ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>" />
					<?php endif; ?>
				</div>
			</div>

			<div class="w-55p about-wmf">
				<?php if ( ! empty( $wmf_footer_text ) ) : ?>
				<p><?php echo esc_html( $wmf_footer_text ); ?></p>
				<?php endif; ?>
				<!-- <p>
					<?php
					if ( has_nav_menu( 'footer-under-text' ) ) {
						wp_nav_menu(
							array(
								'menu'       => 'footer-under-text',
								'menu_class' => 'nav-links list-inline',
								'container'  => '',
								'items_wrap' => '%3$s',
								'walker'     => new WMF\Walkers\Span(),
							)
						);
					}
					?>
					<span class="inline-social-list">
						<?php if ( ! empty( $wmf_twitter_url ) ) : ?>
						<a href="<?php echo esc_url( $wmf_twitter_url ); ?>" class="teal" target="_blank">
							<span class="sr-only"><?php esc_html_e( 'Twitter', 'shiro' ); ?></span>
							<?php wmf_show_icon( 'social-twitter' ); ?>
						</a>
						<?php endif ?>
						<?php if ( ! empty( $wmf_facebook_url ) ) : ?>
						<a href="<?php echo esc_url( $wmf_facebook_url ); ?>" class="teal" target="_blank">
							<span class="sr-only"><?php esc_html_e( 'Facebook', 'shiro' ); ?></span>
							<?php wmf_show_icon( 'social-facebook' ); ?>
						</a>
						<?php endif ?>
						<?php if ( ! empty( $wmf_instagram_url ) ) : ?>
						<a href="<?php echo esc_url( $wmf_instagram_url ); ?>" class="teal" target="_blank">
							<span class="sr-only"><?php esc_html_e( 'Instagram', 'shiro' ); ?></span>
							<?php wmf_show_icon( 'social-instagram' ); ?>
						</a>
						<?php endif ?>
					</span>
				</p> -->
			</div>
		</div>

		<div class="footer-row flex flex-medium projects-affiliation">
			<div class="w-50p">
				<h2 class="h3"><?php echo esc_html( $wmf_projects_menu_label ); ?></h2>
				<?php
				if ( has_nav_menu( 'footer-projects' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer-projects',
							'menu_class'     => 'lists-wrap flex flex-all',
							'container'      => '',
							'items_wrap'     => '<div id="%1$s" class="%2$s"><ul class="w-32p">%3$s</ul></div>',
							'walker'         => new WMF\Walkers\Columns(),
						)
					);
				}
				?>
			</div>

			<div class="w-25p">
				<h2 class="h3"><?php echo esc_html( $wmf_movement_affiliates_menu_label ); ?></h2>
				<div class="lists-wrap">
					<?php
					if ( has_nav_menu( 'footer-affiliates' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'footer-affiliates',
								'menu_class'     => '',
								'container'      => '',
							)
						);
					}
					?>
				</div>
			</div>

			<div class="w-25p">
				<h2 class="h3"><?php echo esc_html( $wmf_other_links_menu_label ); ?></h2>
				<div class="lists-wrap">
					<?php
					if ( has_nav_menu( 'footer-legal' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'footer-legal',
								'menu_class'     => '',
								'container'      => '',
							)
						);
					}
					?>
				</div>
				<br>
			</div>

		</div>
	</div><!-- end .footer-inner -->

	<div class="footer-legal color-gray mw-980">
		<p>
			<?php
			echo wp_kses(
				$wmf_footer_copyright, array(
					'a'  => array(
						'href' => array(),
					),
					'br' => array(),
				)
			);
			?>
		</p>
	</div><!-- End .footer-legal -->

</footer>

<?php
$wmf_search_placeholder = get_theme_mod( 'wmf_search_placeholder_copy', __( 'What are you looking for?', 'shiro' ) );
$wmf_search_aria_label  = get_theme_mod( 'wmf_search_aria_label', __( 'Search Wikimedia Foundation site', 'shiro' ) );
$wmf_search_esc_label  = get_theme_mod( 'wmf_search_esc_label', __( 'esc', 'shiro' ) );
?>
<div class="search-overlay">
	<div class="search-container">
		<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="search" placeholder="<?php echo esc_attr( $wmf_search_placeholder ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" aria-label="<?php echo esc_attr( $wmf_search_aria_label ); ?>">
			<button class="btn btn-blue" type="submit"><?php wmf_show_icon( 'search', 'material icon-white' ); ?></button>
			<a href="javascript:void(0);" class="search-close-esc">
				<img src="./wp-content/themes/shiro/assets/src/svg/close.svg" alt="">
				<?php echo esc_attr( $wmf_search_esc_label ); ?>
			</a>
		</form>
		<a href="#" class="search-close-mobile">
			<img src="./wp-content/themes/shiro/assets/src/svg/close.svg" alt="">
		</a>
	</div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
