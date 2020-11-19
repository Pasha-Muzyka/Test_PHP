<?php
    session_start();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="layout.css">
</head>
<body>

<?php
    if($_SESSION['auth'] == True){
        echo<<<html
            <div class='info'>
                <h1>Some important information, that we can't show to unauthorised users<h1>
            </div>
        html;
    }
    else{
        echo<<<html
        <div class='info'>
            <h1>You haven't authorised, please log in to see the content<h1>
            <p><a href="login.php">Log in</a></p>
        </div>
    html;
    }
?>

</body>
</html>