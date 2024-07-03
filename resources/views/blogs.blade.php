@extends('main')

@section('content')
    @foreach ($posts as $post)
        <hr>
        <p><b>judul : </b>{{ $post['title'] }}</p>
        <p><b>penulis : </b>{{ $post['author'] }}</p>
        <p><b>kategori : </b>{{ $post['category'] }}</p>
        <a href="/blogs/{{$post['slug'] }}">Buka Post</a>
        <hr>    
    @endforeach
 @endsection   