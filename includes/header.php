
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- TITLE WILL CHANGE ON EACH PAGE -->
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet" href="css/nav.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="css/contact.css" type="text/css" rel="stylesheet">
</head>

<body class="<?php echo $body; ?>">
    <div class="wrapper">
    <header>
    <div class="banner">
        <a href="../index.php"><img class="myLogo" src="images/logo.png" alt="Business Logo"></a>
    </div>

    <div class="navbar">
        <?php
            echo makeLinks($nav);
        ?>
    </div>
    </header>