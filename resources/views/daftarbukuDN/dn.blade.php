
@include('inc.header')
<div id="page-wrapper">
		<div class="row">
               <div>
               
				<h1>Daftar Buku Dalam Negeri</h1>
				</div>
				<table class="table table-striped">
				<thead>
      				</div><br />
                    <tr>
                    <th>Nama Buku</th>
                    <th>Penulis</th>
                    <th>Nama Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Mata Pelajaran</th>
                    <th>Bahasa</th>
                    <th>Tingkat Pendidikan</th>
                    <th>Edisi Buku</th>
                    <th >Action</th>
                </tr>
				</thead>
				<tbody>
				
				
				 @if(isset ($bukudns))
					@foreach($bukudns as $bukudn)
				
			      <tr>
			        <td>{{$bukudn->namaBuku}} </td>
			        <td>{{$bukudn->penulis}} </td>
			        <td>{{$bukudn->namaPenerbit}} </td>
			        <td>{{$bukudn->tahunTerbit}} </td>
			        <td>{{$bukudn->mataPelajaran}} </td>
			        <td>{{$bukudn->bahasa}} </td>
			        <td>{{$bukudn->tingkatPendidikan}} </td>
			        <td>{{$bukudn->edisi}} </td>
			        <td>
			        	<a href="{{action('bukudnController@show', $bukudn['id'])}}" class="btn btn-info">Lihat</a>
			        </td>
			        @if(!Auth::guest())
			        <td><a href="{{action('bukudnController@edit', $bukudn['id'])}}" class="btn btn-warning">Ubah</a></td>
        			<td>
          				<form action="{{action('bukudnController@destroy', $bukudn['id'])}}" method="post">
            			@csrf
            			<input name="_method" type="hidden" value="DELETE">
           				<button class="btn btn-danger" type="submit">Hapus</button>
          				</form>
        			</td>
        			@endif
			      </tr>
			      	  @endforeach
			      @else
			      <p>No Posts!</p>
			      @endif
			    
			      </tbody>
				</tbody>
                </table>
		</div>
</div>
