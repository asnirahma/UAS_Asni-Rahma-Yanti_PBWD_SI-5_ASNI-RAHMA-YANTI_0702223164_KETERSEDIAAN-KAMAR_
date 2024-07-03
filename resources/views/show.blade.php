<h1>Halaman Blog</h1>
<p>Selamat Datang Di Blog Saya.</p>
@foreach ($posts as $post)
  @if (spot['slug'] == $slug)
  <hr>
  <p><b>judul : </b>{{$post['title'] }}</p>
  <p><b>penulis : </b>{{$post['author'] }}</p>
  <p><b>kategori : </b>{{$post['category'] }}</p>
  <hr>   
  @endif   
@endforeach
<a href="/blogs">kembali</a>