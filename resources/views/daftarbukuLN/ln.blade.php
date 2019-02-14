 @include('inc.header')
<div id="page-wrapper"> 
		<div class="row">
               <div class="col-lg-12">
				<h1>Daftar Buku Luar Negeri</h1>
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
				
				
				 @if(isset ($bukulns))
					@foreach($bukulns as $bukuln)
				
			      <tr>
			        <td>{{$bukuln->namaBuku}} </td>
			        <td>{{$bukuln->penulis}} </td>
			        <td>{{$bukuln->namaPenerbit}} </td>
			        <td>{{$bukuln->tahunTerbit}} </td>
			        <td>{{$bukuln->mataPelajaran}} </td>
			        <td>{{$bukuln->bahasa}} </td>
			        <td>{{$bukuln->tingkatPendidikan}} </td>
			        <td>{{$bukuln->edisi}} </td>
			        <td>
			        	<a href="{{action('bukulnController@show', $bukuln['id'])}}" class="btn btn-info">lihat</a>
			        </td>
			        @if(!Auth::guest())
			        <td><a href="{{action('bukulnController@edit', $bukuln['id'])}}" class="btn btn-warning">Ubah</a></td>
        			<td>
          				<form action="{{action('bukulnController@destroy', $bukuln['id'])}}" method="post">
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
