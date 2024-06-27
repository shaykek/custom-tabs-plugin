<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'get_field' ) ) {
	return;
}

$tabs         = get_field( 'custom_tabs', 'options' );
$logo_gallery = get_field( 'custom_logo_gallery', 'options' );

if ( ! $tabs ) {
	return;
}

?>
<section class="custom-tabs">
	<div class="custom-tabs__container">
		<div class="custom-tabs__inner">
			<div class="custom-tabs__header" role="tablist">
				<?php foreach ( $tabs as $key => $tab ) : ?>
					<button type="button" data-tab="<?php echo $key; ?>" role="tab" class="custom-tabs__title" aria-selected="<?php echo $key === 0 ? 'true' : 'false'; ?>">
						<?php echo $tab['title']; ?>
					</button>
				<?php endforeach; ?>
			</div>

			<?php foreach ( $tabs as $key => $tab ) : ?>
				<div role="tabpanel" data-tab-panel="<?php echo $key; ?>" class="custom-tabs__tab <?php echo $key === 0 ? 'active' : ''; ?>">
					<div class="custom-tabs__tab--inner">
						<div class="custom-tabs__tab-content">
							<span class="custom-tabs__tab-content--bg" style="background-image:url(<?php echo wp_get_attachment_image_url( $tab['background_image'], 'full' ); ?>)">
							</span>

							<?php if ( $tab['background_image_mobile'] ) : ?>
								<span class="custom-tabs__tab-content--bg mobile" style="background-image:url(<?php echo wp_get_attachment_image_url( $tab['background_image_mobile'], 'full' ); ?>)">
								</span>
							<?php endif; ?>
						   
							<div style="position:relative;">
								<?php if ( $tab['text'] ) : ?>

									<img src="<?php echo esc_url( plugins_url( '/', dirname( __FILE__ ) ) . 'assets/img/quote.svg' ); ?>" class="custom-tabs__tab-content--img" alt="Quote Icon">
									<div class="custom-tabs__tab-content--text">
										<?php echo $tab['text']; ?>
									</div>

								<?php endif; ?>

								<?php if ( $tab['member'] ) : ?>

									<div class="custom-tabs__tab-content__member">

										<?php echo wp_get_attachment_image( $tab['member']['image'] ); ?>

										<div class="custom-tabs__tab-content__member--inner">
											
											<?php if ( $tab['member']['name'] ) : ?>
												<h3 class="custom-tabs__tab-content__member--name">
													<?php echo $tab['member']['name']; ?>
												</h3>
											<?php endif; ?>

											<?php if ( $tab['member']['position'] ) : ?>
												<p class="custom-tabs__tab-content__member--position">
													<?php echo $tab['member']['position']; ?>
												</p>
											<?php endif; ?>
										
										</div>
									</div>

								<?php endif; ?>

								<?php echo wp_get_attachment_image( $tab['logo'], 'full', false, array( 'class' => 'custom-tabs__tab-content--logo' ) ); ?>
							</div>
						</div>

						<div class="custom-tabs__tab-sidebar">

							<?php if ( $tab['counter'] ) : ?>
								<div class="custom-tabs__tab-counter">

									<?php if ( $tab['counter']['text'] ) : ?>
										<h3 class="custom-tabs__tab-counter--num">
											<?php echo $tab['counter']['number']; ?>
										</h3>
									<?php endif; ?>
							

									<?php if ( $tab['counter']['text'] ) : ?>
										<p class="custom-tabs__tab-counter--text">
											<?php echo $tab['counter']['text']; ?>
										</p>
									<?php endif; ?>
								</div>
							<?php endif; ?>

							<?php if ( $tab['link'] ) : ?>
								<a href="<?php echo $tab['link']['url']; ?>" <?php echo $tab['link']['target'] ? 'target = "_blank"' : ''; ?> class="custom-tabs__tab-link">
									<img src="<?php echo esc_url( plugins_url( '/', dirname( __FILE__ ) ) . 'assets/img/arrow.svg' ); ?>" alt="Arrow Icon">
									<?php echo $tab['link']['title']; ?>
								</a>
							<?php endif; ?>
							
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<?php if ( $logo_gallery ) : ?>
			<div class="custom-tabs__logos">

				<?php if ( $gallery_title = get_field( 'custom_logo_gallery_title' ) ) : ?>
					<span class="custom-tabs__logos--title">
						<?php echo $gallery_title; ?>
					</span>
				<?php endif; ?>

				<?php
				foreach ( $logo_gallery as $img ) {
					echo wp_get_attachment_image( $img, 'full' );
				}
				?>
			</div>
		<?php endif; ?>
	</div>
</section>
