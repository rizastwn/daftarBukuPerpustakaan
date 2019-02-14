@include('inc.header')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms Edit Buku</h1>
                </div>
                 <form action="{{action('bukulnController@update', $id)}}" method="post" name="form1" enctype="multipart/form-data">
                 @csrf
                 <input name="_method" type="hidden" value="PATCH">
                    <div class="form-group">
                        <label >Nama Buku :</label>
                        <input type="text" class="form-control" name="namaBuku" required="" value="{{$bukuln->namaBuku}}">
                    </div>
                    <div class="form-group">
                        <label >Mata Pelajaran :</label>
                        <input type="text" class="form-control" name="mataPelajaran" required="" value="{{$bukuln->mataPelajaran}}">
                    </div>
                    <div class="form-group">
                        <label >Bahasa :</label>
                        <input type="text" class="form-control" name="bahasa" required="" value="{{$bukuln->bahasa}}">
                    </div>
                   <div class="form-group">
                        <label >Tingkat Pendidikan :</label>
                        <select class="form-control"  name="tingkatPendidikan" id="selector">
                            <option value="SD" @if($bukuln->tingkatPendidikan=="SD") selected @endif >SD</option>
                            <option value="SMP" @if($bukuln->tingkatPendidikan=="SMP") selected @endif >SMP</option>
                            <option value="SMA" @if($bukuln->tingkatPendidikan=="SMA") selected @endif>SMA</option>
                            <option value="SMK" @if($bukuln->tingkatPendidikan=="SMK") selected @endif>SMK</option>
                            <option value="Universitas" @if($bukuln->tingkatPendidikan=="Universitas") selected @endif>Universitas</option>
                        </select>
                    </div>

                    <div class="SMA  op" style="display:none">
                          <label>Jurusan</label>
                          <select class="form-control" name="jurusan">
                          <option @if($bukuln->tingkatPendidikan=="IPA") selected @endif>IPA</option>
                          <option @if($bukuln->tingkatPendidikan=="IPS") selected @endif>IPS</option>
                          </select>
                    </div>
                    <div class="SMK  op" style="display:none">
                          <label>Jurusan</label>
                          <input type="text" class="form-control" value="{{$bukuln->jurusan}}" name="jurusan" >
                    </div>

                    <div class="universitas  op" style="display:none">
                          <label>Fakultas</label>
                          <input type="text" class="form-control"  value="{{$bukuln->jurusan}}" name="jurusan"  value="{{$bukuln->rakBuku}}">
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
                        <input type="number" class="form-control" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" name="edisi" value="{{$bukuln->edisi}}">
                    </div>
                    <div class="form-group">
                        <label >Nama Penerbit :</label>
                        <input type="text" class="form-control" name="namaPenerbit" value="{{$bukuln->namaPenerbit}}">
                    </div>
                    <div class="form-group">
                        <label >Tahun Terbit :</label>
                        <input type="number" class="form-control" id="replyNumber" min="0" step="1" data-bind="value:replyNumber"  name="tahunTerbit" value="{{$bukuln->tahunTerbit}}">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Kota Penerbit :</label>
                        <input type="text" class="form-control"  name="kotaPenerbit" value="{{$bukuln->kotaPenerbit}}">
                    </div>
                    <div class="form-group">
                        <label >Negara Penerbit :</label>
                        <input type="text" class="form-control" value="{{$bukuln->negeriPenerbit}}" name="negeriPenerbit"
                    </div>
                    <div class="form-group">
                        <label >Penulis</label>
                        <input type="text" class="form-control"  name="penulis"  value="{{$bukuln->penulis}}">
                    </div>
                    <div class="form-group">
                        <label >Rak Buku</label>
                        <input type="text" class="form-control"  name="rakBuku" value="{{$bukuln->rakBuku}}">
                    </div>
                    <div class="form-group">
                        <label >Jumlah Buku</label>
                        <input type="number" class="form-control" id="replyNumber"  min="0" step="1" data-bind="value:replyNumber" name="jumlahBuku" value="{{$bukuln->jumlahBuku}}">
                    </div>
                    <div class="form-group">
                    <label>Masukan cover depan buku</label>
                    <input type="file" name="gambarBukuDepan" >
                    </div>

                    <button type="submit" class="btn btn-default" id="Submit" name="Submit">Submit</button>
                </form>
            </div>
    </div>
