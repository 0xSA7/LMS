<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body style="text-align:center ;">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login.add') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required autofocus>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
