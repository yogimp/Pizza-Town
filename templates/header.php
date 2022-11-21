<?php 

    session_start();

    //$_SESSION['name'] = 'mario';

    if($_SERVER['QUERY_STRING'] == 'noname'){
        //unset($_SESSION['name']);
        session_unset();
    }
    // null coalesce
    $name = $_SESSION['name'] ?? 'Guest';
    // get cookie
    $gender = $_COOKIE['gender'] ?? 'Unknown';

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Pizza Town</title>
    <style>
        .brand {
            background: #cbb09c !important;
        }
        .brand-text {
            color: #cbb09c !important;
        }
        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .pizza {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Pizza Town</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li class="grey-text">Hello <?= htmlspecialchars($name); ?></li>
                <li class="grey-text">(<?= htmlspecialchars($gender); ?>)</li>
                <li><a href="add.php" class="btn brand z-depth-0">Add a pizza</a></li>
            </ul>
        </div>
    </nav>