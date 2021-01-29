<header class="site-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="d-flex justify-content-between">
				<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo.svg'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
					<?php
					wp_nav_menu([
						'theme_location' => 'primary',
						'depth' => 1,
						'container' => false,
					]);
					?>
				</div>
			</div>
		</div>
	</div>
</header>


