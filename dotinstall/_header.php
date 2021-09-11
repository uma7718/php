<?php

$message = 'こんにちは！' . date('l');

$n = mt_rand(2, 3);

if ($n === 1) {
    $message = '<script>alert(1);</script> 1111111111';
} elseif ($n === 2) {
    $message = '2222222222';
} else {
    $message = '3333333333';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .works a {
            text-decoration: none;
            display: block;
            text-align: center;
            font-size: 14px;
            background: #08c;
            border-radius: 4px;
            padding: 12px;
            color: #fff;
        }
        .works a:hover {
            opacity: 0.8;
        }
    </style>
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8');?> ポートフォリオ</title>
</head>
<body>
    <p><?php echo $message; ?></p>
    <p><?= $message; ?></p>
    <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>

    <section class="works">
        <h1>WORKS</h1>