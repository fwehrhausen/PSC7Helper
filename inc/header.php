<?php

session_start();
echo "UserId: ".$_SESSION['userID']."<br>";
if (!isset($_SESSION['userID'])){
    echo"Logout";
    //header('Location: ./index.php?logout=1');
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <title>PSC7 Helper</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>PSC7Helper</h1>
    <p>Ein Plentymarkets-Community Projekt</p>
</div>

<nav class="navbar navbar-inverse">
    <div class="container">

        <ul class="nav navbar-nav">
            <li><a href="./dashboard.php">Dashboard</a></li>
            <li><a href="./connector-page.php">Connector-Befehle</a></li>
            <li><a href="#">Platzhalter_2</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="./index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
    </div>
</nav>
