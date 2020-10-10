<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemrograman Framework</title>
</head>
<body>
    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf
        <label for="">Nama : </label>
        <input type="text" name="nama">
        <label for="">NIM : </label>
        <input type="number" min="0" name="nim">
        <label for="">Jurusan : </label>
        <input type="text" name="jurusan">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>