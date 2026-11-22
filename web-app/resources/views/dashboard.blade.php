<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6fb;
            color: #1e293b;
        }

        .sidebar {
            background: #1e293b;
            padding: 20px;
            display: flex;
            gap: 25px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .sidebar a:hover {
            color: #93c5fd;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 35px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px #00000010;
        }

        .welcome {
            color: #2563eb;
        }

        .email {
            background: #eff6ff;
            padding: 15px;
            border-radius: 8px;
            color: #1d4ed8;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <a href="/dashboard">Home</a>
        <a href="/daftar/mahasiswa">Mahasiswa</a>
        <a href="/employe">CRUD</a>
        <a href="/kalkulator/segitiga">Kalkulator</a>
        <a href="/logout">Logout</a>
    </div>

    <div class="container">
        <h1>Dashboard</h1>

        <h2 class="welcome">Selamat Datang!</h2>

        <p>Anda berhasil login sebagai:</p>

        <div class="email">
            {{ session('email') }}
        </div>
    </div>

</body>
</html>
