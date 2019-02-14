@include('inc.header')

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
		<center>
		<img style="width: 50%" src="/storage/coverBuku/{{$bukudn->gambarBukuDepan}}">
		<h1>{{$bukudn->namaBuku}}</h1>
		<p>Penulis : {{$bukudn->penulis}}</p>
		<p>Nama Penerbit : {{$bukudn->namaPenerbit}}</p>
		<p>Tahun terbit buku : {{$bukudn->tahunTerbit}}</p>
		<p>Asal kota Penerbit buku : {{$bukudn->kotaPenerbit}}</p>
		<p>Mata pelajaran : {{$bukudn->mataPelajaran}}</p>
		<p>Bahasa : {{$bukudn->bahasa}}</p>
		<p>Tingkat pendidikan : {{$bukudn->tingkatPendidikan}}</p>
		<p>Jurusan/Fakultas : {{$bukudn->jurusan}}</p>
		<p>Edisi buku : {{$bukudn->edisi}}</p>
		<p>Tempat rak buku : {{$bukudn->rakBuku}}</p>
		<p>Jumlah buku yang tersedia : {{$bukudn->jumlahBuku}}</p>
		</center>
		</div>
	</div>
</div>