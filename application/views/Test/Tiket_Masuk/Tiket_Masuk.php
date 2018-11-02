<div class="panel panel-info">
  <div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
  <div class="panel-heading" style="font-size: 18px"><b>Data Tiket Masuk</b> 
    <div class="pull-right"><a href="#tm-add" data-toggle="modal"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-plus-square">  Tambah</i></button></a></div>
  </div>
<pre><?php print_r($data) ?></pre>
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

 <form action="<?php echo current_url() ?>" method="post" method="post" enctype="multipart/form-data">> -->
  <div class="panel panel-default">
      <div class="panel-heading bg-success">
          <h8 class="modal-title"><i class="fa fa-plus-square"><b> Entry Tiket</b></i></h8>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <input type="hidden" name="id_user" class="form-control" value="<?php echo $get->id_user; ?>">
      </div>

      <div class="panel-body">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="id_masuk"><b>ID Tiket</b></label>
                  <input name="id_masuk" type="text" class="form-control" value="<?php echo $id_masuk; ?>" readonly>
                </div>
                 <div class="form-group">
                 <label for="kategori"><b>Kategori</b></label>
                 <select name="id_kategori" class="form-control select2" data-placeholder="Pilih Nama Konversi" style="width: 100%;">
                  <option value="id_kategori">===Pilih Nama Category===</option>
                    <?php foreach($category as $key => $get) :?>
                      <option value="<?php echo $get->id_kategori ?>"><?php echo $get->isi_kategori ?></option> 
                    <?php endforeach; ?>
                  </select>
                  <p class="help-block"><?php echo form_error('id_kategori', '<small class="text-danger">', '</small>'); ?></p>
                </div> 
                <div class="form-group">
                  <label for="deskripsi"><b>Deskripsi</b></label>
                  <textarea class="form-control" rows="5" name="deskripsi" id="deskripsi" value="<?php echo set_value('deskripsi'); ?>" placeholder="Deskripsi TroubleT"></textarea>
                </div>
                 <p class="help-block"><?php echo form_error('deskripsi', '<small class="text-danger">', '</small>'); ?></p>

                <div class="form-group">
                  <label for="lampiran"><b>Lampiran</b></label>
                  <input name="file" type="file" class="form-control" placeholder="Lampiran">

                </div>
                <p class="help-block"><?php echo form_error('lampiran', '<small class="text-red">', '</small>'); ?></p>
        </div>
      </div>
      <div class="panel-footer">
          <button type="submit" class="btn btn-sm btn-primary"><span class="fa fa-save"></span> Simpan</button></div>
      </div>
  </div>
</form>
        <script>
          $('#datepicker').datetimepicker({
          locale:'id',
          });
        </script>
    </div>
  </div>
<!--Add Modal -->
