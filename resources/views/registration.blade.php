<!DOCTYPE html>
<html>
<head>
    <title>Регистрация пользователя</title>
</head>
<body>
    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form method="post" action="{{ route('registration.process') }}" style="display:flex; flex-direction:column; justify-content:center;align-items:center;">
        {{ csrf_field() }}
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required>
        @if ($errors->has('login'))
            <div style="color: red;">{{ $errors->first('login') }}</div>
        @endif
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        @if ($errors->has('email'))
            <div style="color: red;">{{ $errors->first('email') }}</div>
        @endif
        <br>

        <label for="age">Возраст:</label>
        <input type="number" id="age" name="age" required>
        @if ($errors->has('age'))
            <div style="color: red;">{{ $errors->first('age') }}</div>
        @endif
        <br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        @if ($errors->has('password'))
            <div style="color: red;">{{ $errors->first('password') }}</div>
        @endif
        <br>

        <label for="password_confirmation">Подтверждение пароля:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        @if ($errors->has('password_confirmation'))
            <div style="color: red;">{{ $errors->first('password_confirmation') }}</div>
        @endif
        <br>

        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>

