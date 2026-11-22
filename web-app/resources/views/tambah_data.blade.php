<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $judul }}</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background: #198754;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .kembali {
            color: #4e73df;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>{{ $judul }}</h2>

        <form action="{{ url('/employe/store') }}" method="POST">
            @csrf

            <p>ID:</p>
            <input type="number" name="id" required>

            <p>Nama:</p>
            <input type="text" name="nama" required>

            <p>Alamat:</p>
            <textarea name="alamat" required></textarea>

            <p>Gender:</p>
            <select name="gender" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>

            <p>Gaji:</p>
            <input type="number" name="gaji" required>

            <br><br>
            <button type="submit">Simpan</button>
        </form>

        <br>
        <a class="kembali" href="{{ url('/employe') }}">Kembali</a>
    </div>
</body>
</html>
