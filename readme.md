# Underpin Role Loader

Loader That assists with adding custom user roles to a WordPress website.

## Installation

### Using Composer

`composer require underpin/role-loader`

### Manually

This plugin uses a built-in autoloader, so as long as it is required _before_
Underpin, it should work as-expected.

`require_once(__DIR__ . '/underpin-roles/roles.php');`

## Setup

1. Install Underpin. See [Underpin Docs](https://www.github.com/underpin-wp/underpin)
1. Register new roles menus as-needed.

## Example

A very basic example could look something like this.

```php
// Register role
underpin()->roles()->add( 'vip', [
	'capabilities' => [ 'read_private_pages', 'read' ],
	'name'         => 'VIP Member',
	'id'           => 'vip_member',
] );
```

Alternatively, you can extend `Role` and reference the extended class directly, like so:

```php
underpin()->roles()->add('role-key','Namespace\To\Class');
```