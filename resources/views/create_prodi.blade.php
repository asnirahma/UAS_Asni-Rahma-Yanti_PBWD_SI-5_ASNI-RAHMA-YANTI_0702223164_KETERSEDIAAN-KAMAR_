@extends('layout.template')

@section('konten')
    
</head>
<body class="bg-light">
    <main class= "container">
    <h1>Form Prodi Mahasiswa</h1>
    <hr>

    <form action=' {{ url('prodi') }}' method="POST">
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
                <label for= "">ID prodi</label>
            </th>
            <td>:</td>
            <td>
                <input type="number" name="id_prodi">
            </td>
        </tr>
        <tr>
        <th style= "text-align: left;">
                <label for= "">Nama Prodi</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="nama_prodi">
            </td>
        </tr>
        <th style= "text-align: left;">
                <label for= "">Himpunan_mahasiswa</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="himpunan_mahasiswa">
            </td>
            <td colspan="3">
                <button style="width:100%">SIMPAN</button>
            </td>
        </tr>
    </table>

    </form>
</body>
@endsection