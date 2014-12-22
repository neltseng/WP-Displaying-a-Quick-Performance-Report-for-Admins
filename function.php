<?php
 
add_action( 'wp_footer', 'cwp_footer_report' );
 
function cwp_footer_report() {
    $stat = sprintf( '%d queries in %.3f seconds, using %.2fMB memory',
        get_num_queries(),
        timer_stop( 0, 3 ),
        memory_get_peak_usage() / 1024 / 1024
    );
    if( current_user_can( 'manage_options' ) ) {
        echo "<!-- {$stat} -->";
    }
}


?>
