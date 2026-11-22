<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $judul }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h3 {
            text-align: center;
            color: #333;
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-weight: 600;
        }
        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }
        input:focus {
            border-color: #4e73df;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #4e73df;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background-color: #2e59d9;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #eaecf4;
            border-radius: 6px;
            text-align: center;
            font-size: 16px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="card">
        <h3>{{ $judul }}</h3>
        <form action="/kalkulator/segitiga" method="post">
            @csrf
            <div class="form-group">
                <label>Alas:</label>
                <input type="number" step="any" name="alas" value="{{ $alas }}" required>
            </div>
            <div class="form-group">
                <label>Tinggi:</label>
                <input type="number" step="any" name="tinggi" value="{{ $tinggi }}" required>
            </div>
            <button type="submit">HITUNG LUAS</button>
        </form>
        
        <div class="result">
            Hasil Luas: {{ $hasil }}
        </div>
    </div>
</body>
</html>