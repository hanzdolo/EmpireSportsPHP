<?php require('inc/all-classes.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" width="width=device-width, initial-scale=1" />
    <title>Welcome to Empire Sports</title>
    <script src="javascripts/jquery-2.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="javascripts/jquery-ui-1.11.4/jquery-ui.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="javascripts/jquery-ui-1.11.4/jquery-ui.js"></script>
    <script src="javascripts/scripts.js"></script>
    <script src="javascripts/NewLang.js"></script>
    <style>
        body{
            overflow: hidden;
        }
        .top-image img{
            width: 100%;
            /*margin-top: -430px;*/
        }
        .event-table{
            margin: 0 auto;
            color: black;

        }
        .event-table th{
            text-align: center;
        }
        .event-table td{
            padding: 3px 5px;
        }
        #quotes-motto-box{

        }

    </style>
</head>
<body>
<div class="wrapper">
    <!--Navigation bar-START-->
    <div class="nav">
        <div id="branding">
            <a href="index.php" class="no-dec"><img id="logo" src="images/empire-sports-logo-white.png" height="65"/></a>
        </div>
        <div class="inner-nav">
            <ul class="top-nav-bar">
                <li><a href="index.php">Home</a></li>

                <li><a>Events <b class="caret"></b></a>
                    <ul class="list-menu">
                        <li><a href="upcoming.php">Upcoming Events</a></li>
                        <li><a href="">Sign Up</a></li>
                    </ul>
                </li>

                <li><a href="updates.php">Updates</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <button class="resp-btn">
            <div class="dropdwn-nav"></div>
            <div class="dropdwn-nav"></div>
            <div class="dropdwn-nav"></div>
        </button>
    </div>