<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body style="text-align:center ;">
    <h2>Register</h2>
    <form method="POST" action="{{ route('reg.add') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required autofocus>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>
