<?php

/**
 * @Project NUKEVIET 3.0
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @copyright 2009
 * @createdate 12/30/2009 0:51
 */

if ( ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$js = $nv_Request->get_int( 'js', 'get', 0 );
if ( $js )
{
    nv_insert_logs( NV_LANG_DATA, "login", "[" .$admin_info['username'] . "] " . strtolower( $lang_global['admin_logout_title'] )," Client IP:" . NV_CLIENT_IP, 0 );
	$nv_Request->unset_request( 'admin,online', 'session' );
    include ( NV_ROOTDIR . "/includes/header.php" );
    die( "1" );
}

$ok = $nv_Request->get_int( 'ok', 'get', 0 );
if ( $ok )
{
    nv_insert_logs( NV_LANG_DATA, "login", "[" .$admin_info['username'] . "] " . strtolower( $lang_global['admin_logout_title'] )," Client IP:" . NV_CLIENT_IP, 0 );
	$nv_Request->unset_request( 'admin,online', 'session' );
    $info = $lang_global['admin_logout_ok'];
    $info .= "<meta http-equiv=\"Refresh\" content=\"5;URL=" . $global_config['site_url'] . "\" />";
}
else
{
    $url = ( $client_info['referer'] != "" ) ? $client_info['referer'] : ( isset( $_SERVER['SCRIPT_URI'] ) ? $_SERVER['SCRIPT_URI'] : "" );
    $info = $lang_global['admin_logout_question'] . " ?<br /><br />\n";
    $info .= "<a href=\"" . NV_BASE_SITEURL . "index.php?second=admin_logout&amp;ok=1\">" . $lang_global['ok'] . "</a> | \n";
    $info .= "<a href=\"" . $url . "\">" . $lang_global['cancel'] . "</a>\n";
}

nv_info_die( $global_config['site_description'], $lang_global['admin_logout_title'], $info );

?>