<?php
/**
 * Include database information (pdo)
 */

/*
session_start();
//Get the POST variables
$inputUsername = $_POST["user"];
$inputPW = $_POST["pw"];

#ToDo
//For Testing
$inputPW = hash(sha256,$inputPW);
$dbPasswordHash = $inputPW;
$dbUserID = 1;
if (isset($_GET["login"])){
/**
 *check is the user an user
 *check is password, the right password
 */
/*
 if (($inputPW == $dbPasswordHash)){
     //$_SESSION['userID'] = $dbUserID;
     header('Location: ./dashboard.php');
 }
}
echo $inputPW."=".$dbPasswordHash."SessionId= ".$_SESSION['userID'];
define('DS', '/');
define('ROOT_PATH', __DIR__);
//require_once ROOT_PATH . DS . 'vendor' . DS . 'autoload.php';
require_once ROOT_PATH . DS . 'config.php';
include_once('./inc/header_login.php');
var_dump($_SESSION["userID"]);
*/
?>
<div class="container">
<div class="row">
  <div class="col-sm-3">

  </div>
  <div class="col-sm-6">
    <div class="panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
            <form action="/PSC7Helper/index.php?login=1" method="post">
                <div class="form-group">
                    <label for="email">Benutzername:</label>
                    <input type="text" class="form-control" id="user" name="user">
                </div>
                <div class="form-group">
                    <label for="pwd">Passwort:</label>
                    <input type="password" class="form-control" id="pwd" name="pw">
                </div>

                <button type="submit" class="btn btn-default">Anmelden</button>
            </form>
        </div>
    </div>
 </div>

</div>
</div>