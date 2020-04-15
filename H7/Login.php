<?php
session_start();

$users = array(
    "piet@worldonline.nl" => array('wachtwoord' => 'doetje123', 'rol' => 'administrator'),
    "klaas@carpets.nl" => array('wachtwoord' => 'snoepje777', 'rol' => 'gebruiker'),
     "truushendriks@wegweg.nl" => array('wachtwoord' => 'arkiearkie201', 'rol' => 'administrator')
);

if (isset($_GET['loguit'])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['knop'])
        && isset($users[$_POST['inlognaam']])
        && $users[$_POST['inlognaam']] ['wachtwoord']== $_POST['wachtwoord']) {
    $_SESSION['user'] = array('naam' => $_POST['inlognaam'],
                             'wachtwoord' => $users[$_POST['inlognaam']] ['wachtwoord'],
                                'rol' => $users[$_POST['inlognaam']] ['rol']);
    $message = "Welkom ".$_SESSION['user']['naam']." met de rol "
                        .$_SESSION['user']['rol'];
} else {
    $message = "Inloggen";
}
print_r($_SESSION);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulier</title>
    <style>
        body {
            text-align: left;
            background-color: #FDEEF4;
        }
        .opmaak{
            margin: 5px;
        }

    </style>
</head>
<body>
<h1><?php  echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
    <div class="opmaak">
        <label for="inlognaam">Inlognaam:</label>
        <input type='text' name='inlognaam'><br>
    </div>
    <div class="opmaak">
        <label for="wachtwoord">Wachtwoord:</label>
        <input type='password' name='wachtwoord'><br>
    </div>
    <input type='submit' name='knop'>
    <p><a href="Website.php">Website</a></p>
    <p><a href="Admin.php">Admingedeelte website</a></p>
    <p><a href="Login.php?loguit">Uitloggen</a></p>
</form>
</body>
</html>