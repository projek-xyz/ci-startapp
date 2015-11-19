<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Projek\CI\Common\Controller;

class Home extends Controller
{
    public function index()
    {
        $this->load->view('home_message', $this->data);
    }
}
