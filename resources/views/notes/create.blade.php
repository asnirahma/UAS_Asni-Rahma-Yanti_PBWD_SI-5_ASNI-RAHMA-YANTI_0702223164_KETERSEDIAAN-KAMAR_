<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
</head>
<body>
    <div class="diary-container">
        <header>
            <div style="font-family: 'Comic Sans MS', cursive;">Tambah Catatan</div>
        </header>

        <form action="{{ route('notes.store') }}" method="POST">
            @csrf
            <label for="title">Judul:</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="address">Alamat:</label><br>
            <input type="text" id="address" name="address"><br>
            <label for="date">Tanggal:</label><br>
            <input type="date" id="date" name="date"><br>
            <label for="description">Deskripsi:</label><br>
            <textarea id="description" name="description"></textarea><br>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
