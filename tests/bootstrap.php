<?php

/*
 *---------------------------------------------------------------
 * OVERRIDE FUNCTIONS
 *---------------------------------------------------------------
 *
 * This will "override" later functions meant to be defined
 * in core\Common.php, so they throw errors instead of output strings
 */

function show_error($message, $status_code = 500, $heading = 'An Error Was Encountered')
{
	throw new PHPUnit_Framework_Exception($message, $status_code);
}

function show_404($page = '', $log_error = TRUE)
{
	throw new PHPUnit_Framework_Exception($page, 404);
}

/**
 * Override default CI CLI argument parser
 * This avoid hardcode overriding core\URI.php file
 */
$_SERVER['argv'] = [];

/*
 *---------------------------------------------------------------
 * BOOTSTRAP
 *---------------------------------------------------------------
 *
 * Bootstrap CodeIgniter from index.php as usual
 */

require_once __DIR__.'/../public/index.php';

/*
 *---------------------------------------------------------------
 * Abstract Test Cases
 *---------------------------------------------------------------
 */
// require_once __DIR__.'/units/CI_TestCase.php';
// require_once __DIR__.'/units/CI_DB_TestCase.php';
