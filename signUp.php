
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="css/layout.css">
</head>
<body>

	<form action="addUser.php" method="post">

		<label>Имя</label><br>
    	<input type="text" name="first_name" placeholder="Введите свое имя"><br>
    	<label>Фамилия</label><br>
		<input type="text" name="last_name" placeholder="Введите свою фамилию"><br>
		<label>Логин</label><br>
        <input type="text" name="login" placeholder="Введите свой логин"><br>
        <label>Пароль</label><br>
        <input type="password" name="password" placeholder="Введите пароль"><br><br>
		<select id="role" name='role'>
                <option disabled="disabled" selected="selected">Роль</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
        </select><br><br>

    	<button type="submit">Зарегистрироваться</button>
	</form>

</body>
</html>