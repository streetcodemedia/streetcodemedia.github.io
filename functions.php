
<?

function wpse54388_scripts_styles() {

    wp_enqueue_style( 'sassstyle', get_template_directory_uri() . '/css/sassstyle.css' );

   

}
add_action( 'wp_enqueue_scripts', 'wpse54388_scripts_styles' );




?>