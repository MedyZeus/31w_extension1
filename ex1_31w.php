<?php
    /**
     * Plugin Name: Extension de l'exercice 1
     * Author: Mahdi NADIR
     * Description: Une première extension pour l'exercice 1
     * Author URI: https://github.com/MedyZeus/31w_extension1
     */
?>
<?php
function fonction_generale( ) {
    function mon_31w_enqueue() {
        wp_enqueue_style(  'mon-31w_enqueue-style', 
                            get_stylesheet_uri(), 
                            array(), 
                            _S_VERSION );
    }
    add_action( 'wp_enqueue_scripts', 'mon_31w_enqueue' );
}

    add_action('init', "fonction_generale")
?>