@extends('layout.template')

@section('konten')
    
</head>
<body class="bg-light">
    <main class= "container">
    <h1>MY NOTES</h1>
    <hr>

    <form action=' {{ url('notes') }}' method="POST">
    @csrf
    <table>
        <tr>
            <th style= "text-align: left;">
                <label for= "">No</label>
            </th>
            <td>:</td>
            <td>
                <input type="number" name="no">
            </td>
        </tr>
        <tr>
            <th style= "text-align: left;">
                <label for= "">tanggal</label>
            </th>
            <td>:</td>
            <td>
                <input type="number" name="tanggal">
            </td>
        </tr>
        <tr>
        <th style= "text-align: left;">
                <label for= "">judul</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="judul">
            </td>
        </tr>
        <th style= "text-align: left;">
                <label for= "">alamat</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="alamat">
            </td>
            <td colspan="3">
                <button style="width:100%">SIMPAN</button>
            </td>
        </tr>
    </table>

    </form>
</body>
@endsection