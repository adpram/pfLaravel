<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemrograman Framework</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

    </style>
</head>

<body>
    <h3>Data Mahasiswa</h3>
    <a href="{{ route('mahasiswa.create') }}" type="button">Tambah data</a>
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach ( $mahasiswas as $index => $mahasiswa )
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->jurusan }}</td>
                <td>
                    <a href="{{ url('/mahasiswa/' . $mahasiswa->id . '/edit') }}">ubah</a> |
                    <form action="{{  url('/mahasiswa/' . $mahasiswa->id ) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
