<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observer( 'roles', [
		'update' => function ( Underpin $plugin, $args ) {
			require_once( plugin_dir_path( __FILE__ ) . 'Role.php' );
			require_once( plugin_dir_path( __FILE__ ) . 'Role_Instance.php' );
			$plugin->loaders()->add( 'roles', [
				'name'        => 'Roles',
				'description' => 'Handles setting custom roles in WordPress',
				'instance'    => 'Underpin_Roles\Abstracts\Role',
				'default'     => 'Underpin_Roles\Factories\Role_Instance',
			] );
		},
	] )
);