@extends('layout.template')

@section('konten')
    
</head>
<body>

    <center>
    <h1> Prodi Mahasiswa </h1>

    <h4> Halaman Prodi Mahasiswa </h4>

        <table border="1" style="border-collapse: collapse;">
            <thead style="background-color: black;">
                <tr style="color: white;">
                    <th> No </th>
                    <th> ID Prodi </th>
                    <th> Nama Prodi </th>
                    <th> Himpunan_mahasiswa </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem() ?>
                @foreach ($data as $item)
                
                <tr>
                    <td> {{ $i }} </td>
                    <td> {{ $item->id_prodi }} </td>
                    <td> {{ $item->nama_prodi }} </td>
                    <td> {{ $item->himpunan_mahasiswa}} </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
        
        <a href="\prodi\create">Tambah Prodi</h1>
    </center>
</body>
@endsection