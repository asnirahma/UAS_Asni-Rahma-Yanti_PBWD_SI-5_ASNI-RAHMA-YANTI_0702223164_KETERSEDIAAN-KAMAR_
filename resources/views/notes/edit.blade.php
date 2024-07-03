<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
</head>
<body>
    <div class="diary-container">
        <header>
            <div style="font-family: 'Comic Sans MS', cursive;">Edit Catatan</div>
        </header>

        <form action="{{ route('notes.update', $note->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Judul:</label><br>
            <input type="text" id="title" name="title" value="{{ $note->title }}"><br>
            <label for="address">Alamat:</label><br>
            <input type="text" id="address" name="address" value="{{ $note->address }}"><br>
            <label for="date">Tanggal:</label><br>
            <input type="date" id="date" name="date" value="{{ $note->date }}"><br>
            <label for="description">Deskripsi:</label><br>
            <textarea id="description" name="description">{{ $note->description }}</textarea><br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
