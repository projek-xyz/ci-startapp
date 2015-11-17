<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|   http://codeigniter.com/user_guide/general/hooks.html
|
*/

$path = str_replace(FCPATH, '', PROJEK_COMMON_PATH);
$_base = [
    'filename' => 'bootstrap.php',
    'filepath' => '../vendor/projek-xyz/ci-common/mod'
];

$hook['pre_system'] = array_merge($_base, [
    'function' => 'pre_system_hook'
]);

if (defined('PHPUNIT_TEST')) {
    $hook['display_override'] = array_merge($_base, [
        'function' => 'display_override_hook'
    ]);
}

