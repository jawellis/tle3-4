<?php
session_start();

//Require database and error forms
require_once "includes/database.php";
require_once "includes/functions.php";
/** @var mysqli $db */

if (isset($_POST['submit'])) {
    $username = mysqli_escape_string($db, $_POST['username']);
    $password = $_POST['password'];

    if (emptyInputLogin($username, $password) !== false) {
        header("location: login.php?error=emptyinput");
    }

    LoginUser($db, $username, $password);
}
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>Dakker</title>
</head>

<body>

<form method="post">

    <header>
        <h1>Login</h1>
    </header>

    <div class="wrapper">

        <section class="login">

        <?php
            if (isset($_GET["error"])) {

                if ($_GET["error"] == "emptyinput") {
                    echo "<p class='error_message'>Vul alle velden in.</p>";
                }
                if ($_GET["error"] == "stmtfailed") {
                    echo "<p class='error_message'>Er is iets fout gegaan.</p>";
                }

                if ($_GET["error"] == "username") {
                    echo "<p class='error_message'>Verkeerde username. Vul alle velden in.</p>";
                }

                if ($_GET["error"] == "wronglogin") {
                    echo "<p class='error_message'>Verkeerd wachtwoord.</p>";
                }

                if ($_GET["error"] == "notloggedin") {
                    echo "<p class='error_message'>Je bent niet ingelogd.</p>";
                }
            }
        ?>

            <div class="form_input">
                <label for="username" class="form_label">
                    <input type="text" name="username" class="input_field"
                           placeholder="Your username">
                </label>
            </div>

            <div class="form_input">
                <label for="password" class="form_label">
                    <input type="password" name="password" class="input_field"
                           placeholder="Your password">
                </label>
            </div>

            <button class="submit_button">
                <label for="submit">
                    <input type="submit" name="submit" value="Login" class="submit_input">
                </label>
            </button>
        </section>
    </div>

</form>

</body>
</html>