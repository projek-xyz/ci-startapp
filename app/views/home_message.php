<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter Skeleton</title>

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/mobile-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/mobile-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/mobile-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/mobile-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/mobile-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/mobile-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/mobile-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/mobile-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/mobile-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicons/favicon-192x192.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#589d8d">
    <meta name="msapplication-TileImage" content="/assets/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#589d8d">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css') ?>">
</head>
<body>

<div id="container">
    <h1>Welcome to CodeIgniter Skeleton!</h1>

    <div id="body">
        <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

        <p>If you would like to edit this page you'll find it located at:</p>
        <code>application/views/welcome_message.php</code>

        <p>The corresponding controller for this page is found at:</p>
        <code>application/controllers/Welcome.php</code>

        <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
