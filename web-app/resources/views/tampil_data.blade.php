
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
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #333;
        }

        .tambah {
            display: inline-block;
            padding: 10px 15px;
            background: #198754;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #4e73df;
            color: white;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        .edit {
            color: #0d6efd;
            text-decoration: none;
        }

        .hapus {
            color: #dc3545;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>{{ $judul }}</h2>

        <a class="tambah" href="{{ url('/employe/create') }}">
            + Tambah Data Pegawai
        </a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>Gaji</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($employes as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->gender }}</td>
                    <td>Rp {{ number_format($row->gaji, 0, ',', '.') }}</td>
                    <td>
                        <a class="edit" href="{{ url('/employe/edit/' . $row->id) }}">Edit</a>
                        |
                        <a class="hapus"
                           href="{{ url('/employe/delete/' . $row->id) }}"
                           onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
