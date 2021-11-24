<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observers\Loader( 'roles', [
	'name'        => 'Roles',
	'description' => 'Handles setting custom roles in WordPress',
	'abstraction_class'    => 'Underpin\Roles\Abstracts\Role',
	'default_factory'     => 'Underpin\Roles\Factories\Role_Instance',
] ) );