add_action( 'wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles' );
// Enqueue Slick scripts and styles
function themeprefix_slick_enqueue_scripts_styles() {
 wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/assets/slick/slick.js');
 wp_enqueue_script( 'slickjs-init', get_stylesheet_directory_uri(). '/assets/slick/slick-init.js', array( 'slickjs' ), '1.6.0', true );
 wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/assets/slick/slick.css', '1.6.0', 'all');
 wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/assets/slick/slick-theme.css', '1.6.0', 'all');
}


* ATENÇÃO --> preste atenção no caminho onde se encontra seus arquivos.
