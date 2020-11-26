<?php
    session_start();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>

<?php
    if(count($_SESSION)>0){

		if ($_SESSION['id_role'] == 1) {
			echo "<p><h1>Hello Admin<h2></p>";
		} else{
			echo "<p><h1>Hello User<h2></p>";
        }
        
        echo<<<html
            <div class='info'>
                <p><h2>Some important information, that we can't show to unauthorised users <h2></p>
            </div>
        html;
    }
    else{
        echo<<<html
        <div class='info'>
            <h1>You haven't authorised, please Log in or Sign upto see the content<h1>
            <p><a href="login.php">Log in</a></p>
            <p><a href="signUp.php">Sign up</a></p>
        </div>
    html;
    }
?>

</body>
</html>