<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .login,
        .register {
            padding: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .login {
            background-color: #3498db;
            color: #fff;
        }

        .register {
            background-color: #2ecc71;
            color: #fff;
        }

        .login:hover {
            background-color: #f1c40f;
        }

        .register:hover {
            background-color: #f1c40f;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 0;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="logo">
        <img src="{{ asset('img/petir.png') }}" alt="Logo" width="100">
        <h2>THUNDERBOLT</h2>
    </div>

    <div class="container">
        <div class="login" onclick="location.href='{{ route('login') }}';">
            <h2>Login</h2>
            <p>Welcome back! Please login to your account.</p>
        </div>
        <div class="register" onclick="location.href='{{ route('register') }}';">
            <h2>Register</h2>
            <p>Create a new account to get started.</p>
        </div>
    </div>

</body>

</html>
