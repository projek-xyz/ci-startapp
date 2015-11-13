<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('PROJEK_COMMON_PATH', FCPATH . 'vendor/projek-xyz/ci-common/');

define('CI_APPPATH', realpath(BASEPATH . '../application') . '/');

require_once CI_APPPATH . 'config/constants.php';
