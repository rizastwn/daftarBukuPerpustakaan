@include('inc.header')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms Edit Buku</h1>
                </div>
                 <form action="{{action('bukudnController@update', $id)}}" method="post" name="form1" enctype="multipart/form-data">
                 @csrf
                 <input name="_method" type="hidden" value="PATCH">
                    <div class="form-group">
                        <label >Nama Buku :</label>
                        <input type="text" class="form-control" name="namaBuku" required="" value="{{$bukudn->namaBuku}}">
                    </div>
                    <div class="form-group">
                        <label >Mata Pelajaran :</label>
                        <input type="text" class="form-control"  name="mataPelajaran" required="" value="{{$bukudn->mataPelajaran}}">
                    </div>
                    <div class="form-group">
                        <label >Bahasa :</label>
                        <input type="text" class="form-control" name="bahasa" required="" value="{{$bukudn->bahasa}}">
                    </div>
                    <div class="form-group">
                        <label >Tingkat Pendidikan :</label>
                        <select class="form-control"  name="tingkatPendidikan" id="selector">
                            <option value="SD" @if($bukudn->tingkatPendidikan=="SD") selected @endif >SD</option>
                            <option value="SMP" @if($bukudn->tingkatPendidikan=="SMP") selected @endif >SMP</option>
                            <option value="SMA" @if($bukudn->tingkatPendidikan=="SMA") selected @endif>SMA</option>
                            <option value="SMK" @if($bukudn->tingkatPendidikan=="SMK") selected @endif>SMK</option>
                            <option value="Universitas" @if($bukudn->tingkatPendidikan=="Universitas") selected @endif>Universitas</option>
                        </select>
                    </div>

                    <div class="SMA  op" style="display:none">
                          <label>Jurusan</label>
                          <select class="form-control" name="jurusan">
                          <option @if($bukudn->tingkatPendidikan=="IPA") selected @endif>IPA</option>
                          <option @if($bukudn->tingkatPendidikan=="IPS") selected @endif>IPS</option>
                          </select>
                    </div>
                    <div class="SMK  op" style="display:none">
                          <label>Jurusan</label>
                          <input type="text" class="form-control" value="{{$bukudn->jurusan}}" name="jurusan" >
                    </div>

                    <div class="universitas  op" style="display:none">
                          <label>Fakultas</label>
                          <input type="text" class="form-control"  value="{{$bukudn->jurusan}}" name="jurusan"  value="{{$bukudn->rakBuku}}">
                    </div>

                    <script type="text/javascript">
                         $('#selector').on('change',function() {
                            var divClass = $(this).val();
                            $(".op").hide();
                            $(".op :text").prop("disabled", true);
                            $("."+divClass).slideDown('medium');
                            $("."+ divClass + " :text").prop("disabled", false);
                        });
                    </script>

                    <div class="form-group">
                        <label >Edisi :</label>
                        <input type="number" class="form-control" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" name="edisi" required="" value="{{$bukudn->edisi}}">
                    </div>
                    <div class="form-group">
                        <label >Nama Penerbit :</label>
                        <input type="text" class="form-control" name="namaPenerbit" required="" value="{{$bukudn->namaPenerbit}}">
                    </div>
                    <div class="form-group">
                        <label >Tahun Keluar :</label>
                        <input type="number" class="form-control" id="replyNumber" min="0" step="1" data-bind="value:replyNumber"  name="tahunTerbit" required="" value="{{$bukudn->tahunTerbit}}">
                    </div>
                    <div class="form-group">
                        <label >kota Penerbit :</label>
                        <input type="text" class="form-control"  value="{{$bukudn->kotaPenerbit}}" name="kotaPenerbit" required="">
                    </div>
                    <div class="form-group">
                        <label >Penulis</label>
                        <input type="text" class="form-control" name="penulis"  required="" value="{{$bukudn->penulis}}">
                    </div>
                    <div class="form-group">
                        <label >Rak Buku</label>
                        <input type="text" class="form-control"  name="rakBuku" required="" value="{{$bukudn->rakBuku}}">
                    </div>
                    <div class="form-group">
                        <label >Jumlah Buku</label>
                        <input type="number" class="form-control" min="0" step="1" data-bind="value:replyNumber"  name="jumlahBuku" required="" value="{{$bukudn->jumlahBuku}}">
                    </div>
                    <div class="form-group">
                    <label>Masukan cover depan buku</label>
                    <input type="file" name="gambarBukuDepan" >
                    </div>

                    <button type="submit" class="btn btn-default" id="Submit" name="Submit">Submit</button>
                </form>
            </div>
    </div>
