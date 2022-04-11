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
 
    <button type='button' onclick='init()'>Start</button>
    <div id="webcam-container"></div>
    <div id="label-container"></div>

    <script src="teachableMachine.js"></script>
    
    <header>
        <h1> Plant Tool </h1>
    </header>
    <nav>
        <ul>
            <li><a href=""> sensor 1 </a></li>
            <li><a href=""> sensor 2 </a></li>
            <li><a href=""> sensor 3 </a></li>
        </ul>
    </nav>

    <main>
        <section class="sensor-output">
            <h3> Sensor 1: Aloë Vera </h3>
            <p> Your plant could use some more water!</p>
            <p> It's a little to warm for your plant at the moment. You might want to move it to the shadows a bit.</p>
        </section>



    </main>
    
</body>

</html>
