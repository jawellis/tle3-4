<?php
session_start();

require_once 'includes/functions.php';
require_once 'includes/database.php';
/** @var mysqli $db */

if(isset($_SESSION["loggedIn"]) == 0 && isset($_SESSION["userName"]) == 0){
    header("location: login.php?error=notloggedin");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js" defer></script>  
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8/dist/teachablemachine-image.min.js" defer></script>

    <title>Teachable Machine</title>
</head>

<body>
    <h1>Je bent ingelogd</h1>
    <button type='button' onclick='init()'>Start</button>
    <div id="webcam-container"></div>
    <div id="label-container"></div>

    <script src="teachableMachine.js"></script>
</body>

</html>