<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $class ) {
	if ( 'Underpin\Underpin' === $class ) {
		require_once( plugin_dir_path( __FILE__ ) . 'Role.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'Role_Instance.php' );
		Underpin\underpin()->loaders()->add( 'roles', [
			'instance' => 'Underpin_Roles\Abstracts\Role',
			'default'  => 'Underpin_Roles\Factories\Role_Instance',
		] );
	}
} );