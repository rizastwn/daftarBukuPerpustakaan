@include('inc.header')
<div id="page-wrapper">
<div class="row">
	 <h3>Cari Buku</h3>
	 <div class="form-group">
	 	<input type="text" class="form-controller" id="search" name="search"></input>
	 </div>
	 <table class="table table-bordered table-hover">
	 	<thead>
	 		<tr>
	 			<th>Nama Buku</th>
	 			<th>Penulis</th>
	 			<th>Nama Penerbit</th>
	 			<th>Mata Pelajaran</th>
	 			<th>Bahasa</th>
	 			<th>Tingkat Pendidikan</th>
	 			<th>Jurusan</th>
	 			<th>Jumlah Buku</th>
	 			<th>Rak Buku</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 	</tbody>
	 </table>
</div>
</div>

<script type="text/javascript">
 
$('#search').on('keyup',function(){
 
$value=$(this).val();
 
$.ajax({
 
type : 'get',
 
url : '{{URL::to('search')}}',
 
data:{'search':$value},
 
success:function(data){
 
$('tbody').html(data);
 
}
 
});
 
 
 
})
 
</script>
 
<script type="text/javascript">
 
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
 
</script>