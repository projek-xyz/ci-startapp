<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Creasi\Common\Core\Controller;

class Home extends Controller
{
    public function index()
    {
        $this->load->view('home_message');
    }
}
