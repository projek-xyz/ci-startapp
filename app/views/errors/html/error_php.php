<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

    <p>Severity: <?php echo $severity; ?></p>
    <p>Message:  <?php echo $message; ?></p>
    <p>Filename: <?php echo str_replace(FCPATH, '', $filepath); ?></p>
    <p>Line Number: <?php echo $line; ?></p>

</div>
