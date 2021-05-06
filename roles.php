<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $file, $class ) {
	require_once( plugin_dir_path( __FILE__ ) . 'Role.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'Role_Instance.php' );
	Underpin\underpin()->get( $file, $class )->loaders()->add( 'roles', [
		'instance' => 'Underpin_Roles\Abstracts\Role',
		'default'  => 'Underpin_Roles\Factories\Role_Instance',
	] );
}, 10, 2 );