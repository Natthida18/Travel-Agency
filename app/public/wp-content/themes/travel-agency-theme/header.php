<!DOCTYPE html>
<html	<?php language_attributes(); ?>>
<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
	<?php
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
	?>
		<nav class="navbar">
			<ul class="navbar-menu">
				<li class="navbar-list">
					<a href="#">
						Desinations
					</a>
				</li>
				<li class="navbar-list">
					<a href="#">
						Hotels
					</a>
				</li>
				<li class="navbar-list">
					<a href="#">
						Fights
					</a>
				</li>
				<li class="navbar-list">
					<a href="#">
						Booking
					</a>
				</li>
				<?php
				if ( is_user_logged_in() ) {
					?>
					<li class="navbar-list">
						<a class="sign-up-btn" href="<?php echo esc_url( wp_logout_url( site_url( '/' ) ) ); ?>">
							Log out
						</a>
					</li>
					<?php
				} else {
					?>
					<li class="navbar-list">
						<a href="<?php echo esc_url( wp_login_url() ); ?>">
							Login
						</a>
					</li>
					<li class="navbar-list">
						<a class="sign-up-btn" href="<?php echo esc_url( wp_registration_url() ); ?>">
							Sign up
						</a>
					</li>
					<?php
				}
				?>
				<select class="switch-lang">
					<option>EN</option>
					<option>TH</option>
				</select>
			</ul>
		</nav>
	</header>
