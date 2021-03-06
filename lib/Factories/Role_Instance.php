<?php

namespace Underpin\Roles\Factories;


use Underpin\Traits\Instance_Setter;
use Underpin\Roles\Abstracts\Role;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Role_Instance extends Role {
	use Instance_Setter;

	public function __construct( $args ) {
		$this->set_values( $args );
	}

}