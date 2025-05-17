<!DOCTYPE html>
<html> 
    <head>
        <title>Students</title>
        <link rel="stylesheet" href="{{ asset('css/students.css') }}">
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>email</th>
                    <th>jenis kelamin</th>
                    <th>alamat</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->email }}</td>
                        <td>{{ $s->jenis_kelamin }}</td>
                        <td>{{ $s->alamat }}</td>
                        <td>{{ $s->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 30px;">
            <a href="/logout">
                Logout
            </a>
        </div>
    </body>

</html>


