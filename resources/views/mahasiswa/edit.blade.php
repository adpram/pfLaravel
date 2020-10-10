<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemrograman Framework</title>
</head>
<body>
    <form action="{{ url('/mahasiswa/' . $mahasiswa->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <label for="">Nama : </label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}">
        <label for="">NIM : </label>
        <input type="number" min="0" name="nim" value="{{ $mahasiswa->nim }}">
        <label for="">Jurusan : </label>
        <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}">
        <button type="submit">Perbarui</button>
    </form>
</body>
</html>