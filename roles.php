<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $instance ) {
	require_once( plugin_dir_path( __FILE__ ) . 'Role.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'Role_Instance.php' );
	$instance->loaders()->add( 'roles', [
		'instance' => 'Underpin_Roles\Abstracts\Role',
		'default'  => 'Underpin_Roles\Factories\Role_Instance',
	] );
} );