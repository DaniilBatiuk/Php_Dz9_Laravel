<!DOCTYPE html>
<html>
<head>
    <title>Информация о пользователе</title>
</head>
<body>
    <h1>Краткая информация о пользователе</h1>
    <p>Логин: {{ $user['login'] }}</p>
    <p>Email: {{ $user['email'] }}</p>
    <p>Возраст: {{ $user['age'] }}</p>
</body>
</html>
