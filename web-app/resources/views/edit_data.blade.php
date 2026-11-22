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
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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

        <form action="{{ url('/employe/update/' . $employe->id) }}" method="POST">
            @csrf

            <p>Nama:</p>
            <input type="text" name="nama" value="{{ $employe->nama }}" required>

            <p>Alamat:</p>
            <textarea name="alamat" required>{{ $employe->alamat }}</textarea>

            <p>Gender:</p>
            <select name="gender" required>
                <option value="L" {{ $employe->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $employe->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>

            <p>Gaji:</p>
            <input type="number" name="gaji" value="{{ $employe->gaji }}" required>

            <br><br>
            <button type="submit">Simpan Perubahan</button>
        </form>

        <br>
        <a class="kembali" href="{{ url('/employe') }}">Kembali</a>
    </div>
</body>
</html>
