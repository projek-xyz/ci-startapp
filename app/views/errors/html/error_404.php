<?php $this->layout('common::layouts/error_page', ['title' => '404 Page Not Founds']) ?>

<div id="container">
    <h1><?=$this->e($heading)?></h1>
    <p><?=$this->e($message)?></p>
</div>
