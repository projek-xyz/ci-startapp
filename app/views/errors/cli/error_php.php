A PHP Error was encountered

Severity: <?php echo $severity, "\n"; ?>
Message:  <?php echo $message, "\n"; ?>
Filename: <?php echo str_replace(FCPATH, '', $filepath), ':', $line, "\n"; ?>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>
Backtrace:
<?php   foreach (debug_backtrace() as $error): ?>
<?php       if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
 - <?php echo str_replace(FCPATH, '', $error['file']), ':', $error['line'], "\n"; ?>
   <?php echo (isset($error['class']) ? $error['class'].$error['type'] : '').$error['function'], "()\n\n"; ?>
<?php       endif ?>
<?php   endforeach ?>

<?php endif ?>
