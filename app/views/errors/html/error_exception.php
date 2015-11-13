<?php $this->layout('common::layouts/error_php', ['title' => 'An uncaught Exception was encountered']) ?>

<p>Type: <?php echo $heading; ?></p>
<p>Message: <?php echo $message; ?></p>
<p>Filename: <?php echo $filename; ?></p>
<p>Line Number: <?php echo $line; ?></p>
