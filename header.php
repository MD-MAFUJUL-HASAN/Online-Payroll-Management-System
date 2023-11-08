<?php
include_once 'config/config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet " type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= ADMIN_URL ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= ADMIN_URL ?>assets/css/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= ADMIN_URL ?>assets/css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= ADMIN_URL ?>assets/css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .info-box:hover {
            transform: scale(1.05);
            /* This will slightly enlarge the info-box */
            transition: transform 0.3s ease-in-out;
            /* This will animate the transformation */
        }

        .navbar {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
    </style>
</head>

<body class="login-page">