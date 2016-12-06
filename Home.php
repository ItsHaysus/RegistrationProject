<?php
ob_start();
session_start();
require_once 'Connect.php';

if (!isset($_SESSION['user'])) {
    header("Location: LogIn.php");
    exit;
}
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['user']);
$userRow = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Home Page</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a>
        </nav> 
        <div id="wrapper">

            <h1>Logged in</h1>

        </div>
    </body>
</html>
<?php ob_end_flush(); ?><?php
