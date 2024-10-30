<?php
if ( ! class_exists( 'BPOT_Export_Specific_Post_Init' ) ) :
class BPOT_Export_Specific_Post_Init {
    // CONSTRUCT
    public function __construct() {}


    // PLUGIN INIT ACTIONS
    public function init_actions() {
        \add_action( 'plugins_loaded', [$this, 'wp_plugins_loaded'] );
    }


    // PLUGIN LOADED
    public function wp_plugins_loaded() {
        $export_specific_post = new BPOT_Export_Specific_Post();
        $export_specific_post->export_init();
    }
}
endif;