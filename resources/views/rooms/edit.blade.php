<!DOCTYPE html>
<html>
<head>
    <title>Edit Room</title>
</head>
<body>
    <h1>Edit Room</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('rooms.update', $room->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="room_number">Nomor Kamar:</label>
            <input type="text" id="room_number" name="room_number" value="{{ old('room_number', $room->room_number) }}">
        </div>

        <div>
            <label for="level_id">Level:</label>
            <select id="level_id" name="level_id">
                @foreach ($levels as $level)
                    <option value="{{ $level->id }}" {{ $level->id == $room->level_id ? 'selected' : '' }}>{{ $level->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>
