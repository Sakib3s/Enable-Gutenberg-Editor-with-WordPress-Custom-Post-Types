// Register MyCustom Post
function myDomain_post_type() {
    register_post_type( 'posttypename',
        array(
            'labels' => array(
                'name' => __( 'PostTypeName' ),
                'singular_name' => __( 'PostTypeName' )
            ),
            'has_archive' => true,
            'public' => true,
            'rewrite' => array('slug' => 'posttypename'),
            'show_in_rest' => true,
            'supports' => array('editor')
        )
    );
}
 
add_action( 'init', 'myDomain_post_type' );
