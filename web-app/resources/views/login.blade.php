<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-box {
            background: white;
            padding: 30px;
            width: 320px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #2563eb;
            color: white;
            border: none;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Users</h2>

        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif

        <form action="/login" method="POST">
            @csrf

            <input type="email" name="email"
                   placeholder="Email" required>

            <input type="password" name="password"
                   placeholder="Password" required>

            <button type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>
