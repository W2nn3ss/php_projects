<html>
<head>
    <title>Simple</title>
</head>
<body>
<form action="sender.php" method="post" enctype="multipart/form-data">
    <div>
        <p>Логин:</p>
        <input type ="text" name="login">
    </div>
    <div>
        <p>Пароль:</p>
        <input type ="text" name="password">
    </div>
    <div>
        <p>Имя:</p>
        <input type ="text" name="first_name">
    </div>
    <div>
        <p>Фамилия:</p>
        <input type="text" name="last_name">
    </div>
    <div>
        <p>Tелефон:</p>
        <input type="text" name="phone">
    </div>
    <div>
        <p>Email:</p>
        <input type="text" name="email">
    </div>
    <div>
        <input type="submit" value="Отправить запрос">
    </div>

</form>
</body>
</html>