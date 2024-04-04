<?php
add_action( 'wp_enqueue_scripts', 'travel_agency_files' );
function travel_agency_files() {
	wp_enqueue_script( 'main-travel-agency-js', get_theme_file_uri( './build/index.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' );
	wp_enqueue_style( 'custom-google-font', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700' );
	wp_enqueue_style( 'travel-agency-main-style', get_theme_file_uri( '/style.css' ), array(), '1.0', 'all' );
}

function page_banner( $args = array() ) {
	if ( ! isset( $args['tagline'] ) || empty( $args['tagline'] ) ) {
		$args['tagline'] = get_bloginfo( 'description' );
	}

	if ( ! isset( $args['title'] ) || empty( $args['title'] ) ) {
		$args['title'] = 'Travel, enjoy and live a new and full life';
	}

	if ( ! isset( $args['description'] ) || empty( $args['description'] ) ) {
		$args['description'] = 'Built Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed listening. Park gate sell they west hard for the.';
	}

	if ( ! isset( $args['text_btn1'] ) || empty( $args['text_btn1'] ) ) {
		$args['text_btn1'] = 'Find out more';
	}

	if ( ! isset( $args['icon_btn2'] ) || empty( $args['icon_btn2'] ) ) {
		$args['icon_btn2']['id'] = get_theme_file_uri( '/images/play-button.png' );
	}

	if ( ! isset( $args['text_btn2'] ) || empty( $args['text_btn2'] ) ) {
		$args['text_btn2'] = 'Play Demo';
	}

	if ( ! isset( $args['image'] ) || empty( $args['image'] ) ) {
		$args['image']['url'] = get_theme_file_uri( '/images/image-head.png' );
	}

	if ( ! isset( $args['background_image'] ) || empty( $args['background_image'] ) ) {
		$args['background_image']['url'] = get_theme_file_uri( '/images/bg.png' );
	}
	?>

	<section class="page-banner center" style="background-image: url(<?php echo esc_url( $args['background_image']['url'] ); ?>)">
	<div class="container margin-padding">
		<div class="main">
			<p class="sub-head">
				<?php echo esc_attr( $args['tagline'] ); ?>
			</p>
			<h1 class="tagline">
				<?php echo esc_attr( $args['title'] ); ?>
			</h1>
			<p class="main-description">
				<?php echo esc_attr( $args['description'] ); ?>
			</p>
			<div class="main-button">
				<a href="#" class="main-btn link">
					<?php echo esc_attr( $args['text_btn1'] ); ?>					
				</a>
				<?php
				$image_attributes = wp_get_attachment_image_src( $args['icon_btn2']['id'], 'icon_button' );
				?>
			<a href="#" class="demo-btn link">
				<img src="<?php echo esc_url( $image_attributes[0] ); ?>" width="<?php echo esc_attr( $image_attributes[1] ); ?>" height="<?php echo esc_attr( $image_attributes[2] ); ?>">
				<?php echo esc_attr( $args['text_btn2'] ); ?>	
			</a>
			</div>
			<img src="<?php echo esc_url( get_theme_file_uri( '/images/decore.png' ) ); ?>" class="line-decore">
		</div>
		<img src="<?php echo esc_attr( $args['image']['url'] ); ?>" class="main-image">
	</div>
</section>
	<?php
}

add_action( 'after_setup_theme', 'travel_agency_features' );

function travel_agency_features() {
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'testimonial_image', 65, 65, true );
	add_image_size( 'icon_button', 80, 80, true );
}

/**
 * Add a sidebar.
 */
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );
function wpdocs_theme_slug_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Footer Logo', 'textdomain' ),
			'id'   => 'footer-1',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Company', 'textdomain' ),
			'id'   => 'footer-2',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Contact', 'textdomain' ),
			'id'   => 'footer-3',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Other', 'textdomain' ),
			'id'   => 'footer-4',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Social Media', 'textdomain' ),
			'id'   => 'footer-5',
		)
	);
}

// redirect subscriber to homepage
add_action( 'admin_init', 'redirect_subscriber' );
function redirect_subscriber() {
	$current_user = wp_get_current_user();

	if ( count( $current_user->roles ) == 1 && $current_user->roles[0] == 'subscriber' ) {
		wp_redirect( site_url( '/' ) );
		exit;
	}
}

// hide admin bar
add_action( 'wp_loaded', 'hide_admin_bar' );
function hide_admin_bar() {
	$our_current_user = wp_get_current_user();

	if ( count( $our_current_user->roles ) == 1 && $our_current_user->roles[0] == 'subscriber' ) {
		show_admin_bar( false );
	}
}

// customize login screen
add_filter( 'login_headerurl', 'ourHeaderUrl' );
function ourHeaderUrl() {
	return esc_url( site_url( '/' ) );
}

add_action( 'login_enqueue_script', 'login_css' );
function login_css() {
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' );
	wp_enqueue_style( 'custom-google-font', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700' );
	wp_enqueue_style( 'travel-agency-main-style', get_theme_file_uri( '/style.css' ), array(), '1.0', 'all' );
}

add_filter( 'login_headertitle', 'login_title' );
function login_title() {
	return get_bloginfo( 'name' );
}
