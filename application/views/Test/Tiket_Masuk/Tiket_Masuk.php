<div class="panel panel-info">
  <div class="panel-heading" style="font-size: 18px"><b>Data Tiket Masuk</b> 
    <div class="pull-right"><a href="#tm-add" data-toggle="modal"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-plus-square">  Tambah</i></button></a></div>
  </div>

    <div class="panel-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>ID Tiket</th>
            <th>Tanggal</th>
            <th>Cabang</th>
            <th>Kategori</th>
            <th>Masalah</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>US-001</td>
            <td>Sungai Liat</td>
            <td> 4</td>
            <td>Sungai Liat</td>
            <td> 4</td>
            <td><div class="btn btn-sm btn-warning">Proses</div></td>
          </tr>
          <tr>
            <td>1</td>
            <td>US-001</td>
            <td>Sungai Liat</td>
            <td> 4</td>
            <td>Sungai Liat</td>
            <td> 4</td>
            <td><div class="btn btn-sm btn-warning">Proses</div></td>
          </tr>
          <tr>
            <td>1</td>
            <td>US-001</td>
            <td>Sungai Liat</td>
            <td> 4</td>
            <td>Sungai Liat</td>
            <td> 4</td>
            <td><div class="btn btn-sm btn-warning">Proses</div></td>
          </tr>
          <tr>
            <td>1</td>
            <td>US-001</td>
            <td>Sungai Liat</td>
            <td> 4</td>
            <td>Sungai Liat</td>
            <td> 4</td>
            <td><div class="btn btn-sm btn-warning">Proses</div></td>
          </tr>
          </tbody>
          <tfoot>
          <tr>
            <th>No</th>
            <th>ID Tiket</th>
            <th>Tanggal</th>
            <th>Cabang</th>
            <th>Kategori</th>
            <th>Masalah</th>
            <th>Aksi</th>
          </tr>
          </tfoot>
        </table>
        </div>
      </div>
       <!-- /.panel -->
<!--Add Modal -->
 <div id="tm-add" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form action="tm-add" method="post" method="post" enctype="multipart/form-data">>
            <div class="panel panel-default">
                <div class="panel-heading bg-success">
                    <h8 class="modal-title"><i class="fa fa-plus-square"><b> Entry Tiket</b></i></h8>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="panel-body">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="id_tiket"><b>ID Tiket</b></label>
                            <input name="id_tiket" type="text" class="form-control" value="<?php ////echo $id; ?>" readonly>
                          </div>
                           <div class="form-group">
                           <label for="kategori"><b>Kategori</b></label>
                            <select name="kategori" id="kategori" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Pilih ')" oninput="setCustomValidity('')">
                              <option value="">-Pilih-</option>
                              <option value="Kategori 1">Kategori 1</option>
                              <option value="Kategori 2">Kategori 1</option>
                              <option value="Kategori 1">Kategori 1</option>
                              <option value="Kategori 1">Kategori 1</option>
                              <option value="Kategori 1">Kategori 1</option>
                            </select>
                          </div> 
                          <div class="form-group">
                            <label for="deskripsi"><b>Deskripsi</b></label>
                            <textarea class="form-control" rows="5" name="deskripsi" id="deskripsi" placeholder="Deskripsi TroubleT"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="lampiran"><b>Lampiran</b></label>
                            <input name="lampiran" type="file" class="form-control" placeholder="Lampiran" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" >
                          </div>
                  </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" name="submit" class="btn btn-sm btn-primary"><span class="fa fa-save"></span> Simpan</button></div>
                </div>
            </div>
        </form>
        <script>
$('#datepicker').datetimepicker({
locale:'id',
});
</script>
<!--Add Modal -->