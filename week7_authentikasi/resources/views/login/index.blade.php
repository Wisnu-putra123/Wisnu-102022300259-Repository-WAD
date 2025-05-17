<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <h2>Login</h2>
            <form method="POST" action="/login">
                @csrf
                <label for="email">Email:</label><br>
                <input type="email" name="email" required><br><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" required><br><br>

                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>
