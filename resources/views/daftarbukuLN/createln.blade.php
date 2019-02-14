@include('inc.header')

   <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms Buku Luar Negeri</h1>
                </div>
                 <form action="{{url('bukuln')}}" method="post" name="form1" enctype="multipart/form-data">
                 @csrf
                    <div class="form-group">
                        <label >Nama Buku :</label>
                        <input type="text" class="form-control" placeholder="masukan judul buku" name="namaBuku" >
                    </div>
                    <div class="form-group">
                        <label >Penulis</label>
                        <input type="text" class="form-control" placeholder="masukan nama penulis buku" name="penulis" >
                    </div>
                     <div class="form-group">
                        <label >Nama Penerbit :</label>
                        <input type="text" class="form-control"  placeholder="masukan nama penerbit " name="namaPenerbit" >
                    </div>
                    <div class="form-group">
                        <label >Tahun Terbit :</label>
                        <input type="number" class="form-control" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" placeholder="masukan tahun keluar buku " name="tahunTerbit" >
                    </div>
                    <div class="form-group">
                        <label >Asal Kota Penerbit :</label>
                        <input type="text" class="form-control" placeholder="masukan asal kota penerbit buku " name="kotaPenerbit" >
                    </div>
                    <div class="form-group">
                        <label >Asal Negara Penerbit :</label>
                        <input type="text" class="form-control" placeholder="masukan asal negara penerbit buku " name="negeriPenerbit" >
                    </div>
                    <div class="form-group">
                        <label >Mata Pelajaran :</label>
                        <input type="text" class="form-control" placeholder="masukan jenis mata pelajaran " name="mataPelajaran" >
                    </div>
                    <div class="form-group">
                        <label >Bahasa :</label>
                        <input type="text" class="form-control"  placeholder="masukan jenis bahasa dalam buku " name="bahasa" >
                    </div>
                    <div class="form-group">
                        <label>Tingkat Pendidikan :</label>
                        <select class="form-control" name="tingkatPendidikan" id="selector">
                          <option> </option>
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMA">SMA</option>
                          <option value="SMK">SMK</option>
                          <option value="universitas">Universtias</option>
                        </select>
                    </div>

                    <div class="SMA  op" style="display:none">
                          <label>Jurusan</label>
                          <select class="form-control" name="jurusan">
                          <option>IPA</option>
                          <option>IPS</option>
                          </select>
                    </div>

                    <div class="SMK  op" style="display:none">
                          <label>Jurusan</label>
                          <input type="text" class="form-control"  placeholder="masukan jenis jurusan " name="jurusan" >
                    </div>

                    <div class="universitas  op" style="display:none">
                          <label>Fakultas</label>
                          <input type="text" class="form-control"  placeholder="masukan jenis fakultas " name="jurusan" >
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
                        <input type="number" class="form-control" min="0" step="1" data-bind="value:replyNumber" placeholder="masukan edisi " name="edisi" >
                    </div>
                    <div class="form-group">
                        <label >Rak Buku</label>
                        <input type="text" class="form-control"  placeholder="masukan tempat rak buku yang akan disimpan" name="rakBuku" >
                    </div>
                    <div class="form-group">
                        <label >Jumlah Buku</label>
                        <input type="number" class="form-control"  min="0" step="1" data-bind="value:replyNumber" placeholder="masukan jumlah buku yang akan disimpan" name="jumlahBuku"  >
                    </div>
                    <div class="form-group">
                    <label>Masukan cover depan buku</label>
                    <input type="file" name="gambarBukuDepan"  >
                    </div>

                    <button type="submit" class="btn btn-default" id="Submit" name="Submit">Submit</button>
  </form>
            </div>
    </div>

