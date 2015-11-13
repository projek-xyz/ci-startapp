<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Projek\CI\Common\Controller\Base;

class Home extends Base
{
    public function index()
    {
        $this->load->view('home_message');
    }
}
