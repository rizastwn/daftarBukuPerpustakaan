@include('inc.header')

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
		<center>
		<img style="width: 50%" src="/storage/coverBuku/{{$bukuln->gambarBukuDepan}}">
		</center>
		<h1>{{$bukuln->namaBuku}}</h1>
		<p>Penulis : {{$bukuln->penulis}}</p>
		<p>Nama Penerbit : {{$bukuln->namaPenerbit}}</p>
		<p>Tahun terbit buku : {{$bukuln->tahunTerbit}}</p>
		<p>Asal kota Penerbit buku : {{$bukuln->kotaPenerbit}}</p>
		<p>Mata pelajaran : {{$bukuln->mataPelajaran}}</p>
		<p>Bahasa : {{$bukuln->bahasa}}</p>
		<p>Tingkat pendidikan : {{$bukuln->tingkatPendidikan}}</p>
		<p>Jurusan/Fakultas : {{$bukuln->jurusan}}</p>
		<p>Edisi buku : {{$bukuln->edisi}}</p>
		<p>Tempat rak buku : {{$bukuln->rakBuku}}</p>
		<p>Jumlah buku yang tersedia : {{$bukuln->jumlahBuku}}</p>
		
		</div>
	</div>
</div>