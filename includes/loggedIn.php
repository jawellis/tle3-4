<?
session_start();

require_once 'includes/functions.php';
require_once 'includes/database.php';
/** @var mysqli $db */

if(isset($_SESSION["loggedIn"]) == 0 && isset($_SESSION["userName"]) == 0){
    header("location: login.php?error=notloggedin");
    die();
}
