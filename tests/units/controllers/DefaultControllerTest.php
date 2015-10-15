<?php

class DefaultControllerTest extends CI_TestCase
{
    private $controller;

    public function setUp()
    {
        $this->loadController('Home');
    }

    public function test_should_default_controller_accessable()
    {
        $this->assertTrue(class_exists('Home'));
        $this->controller = new Home;
        $this->assertTrue(method_exists('Home', 'index'));
    }
}
