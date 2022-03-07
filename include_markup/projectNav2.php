<!DOCTYPE html>
<html lang="en-US">
<head>
    <title><?php echo $metatitle;?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" content=<?php echo '"' . $metadesc . '"';?>>

    <!-- Include Analyticstracking -->
    <?php 
        if (file_exists('analyticstracking.php')) {
            include_once('analyticstracking.php');
        } else if (file_exists('../analyticstracking.php')) {
            include_once('../analyticstracking.php');
        }
        else if (file_exists('../../analyticstracking.php')) {
            include_once('../../analyticstracking.php');
        }     
    ?>

    <!-- JQuery -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap Javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="../../stylesheets/final.css" type="text/css">

    <!-- Oxygen Font -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="container-fluid homeMainContainer">
        <a name="topTarget"></a>
        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#homeNavbarCollapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="../../index.php" class="navbar-left"><img class="navLogo" src="../../images/Logo_Dr2_Blackbck.png"></a>
                </div>
                <div class="collapse navbar-collapse homeNavBar" id="homeNavbarCollapse">
                    <ul class="nav navbar-nav">
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../../user-portal.php">User Portal</a></li>
                        <li><a href="../../premium.php">Premium</a></li>
                        <li><a href="../../projects.php">Projects</a></li>
                        <li><a href="../../educational.php">Education</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="../../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="../../signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>