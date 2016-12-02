<?php
session_start();
$username = 'admin';
$password = 'password';

$_SESSION['isLoggedIn'] = false;
$error = '';


if (!empty($_POST)) {
    $tempUsername = $_POST['username']; 
    $tempPassword = $_POST['password'];
    $firstname = $_POST['firstName'];
    $surname = $_POST['surname'];


if ($username === $tempUsername && $password === $tempPassword){
    $_SESSION['isLoggedIn'] = true;
    header('Location: admin/index.php');
    exit;
    }

    if (!$_SESSION['isLoggedIn']) {
        $error = 'You\'re not authorised to view this pape';
    }
}
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form action="" method="POST">
            Username:
            <input type="text" name="username" />
            <br />
            Password:
            <input type="password" name="password" />
            <br />
            First Name:
            <input type="text" name="firstName" />
            <br />
            Surname:
            <input type = "text" name="surname" />
            <br />            
            <input type="submit" value="submit" />
        </form>    
        <?php
        echo $error;
        ?>
    </body>
</html>
