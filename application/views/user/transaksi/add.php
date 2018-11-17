<?php $this->load->view('user/header'); ?>

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><i class="glyphicon glyphicon-book"></i> Transaksi</li>
        <li><i class="glyphicon glyphicon-list-alt"></i> Transaksi Baru</li>
      </ul>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <h3>Tambah Transaksi</h3>
      
      <form class="form-horizontal" action="" method="post">
        <div class="form-group">
          <label class="col-sm-2 control-label">Name</label>
          <div class="col-sm-4">
            <input name="name" type="text" class="col-md-4 form-control" maxlength="50" value=""/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Jenis Penarikan</label>
          <div class="col-sm-4">
            <select name="tarik" class="col-md-4 form-control">
                <option value="1" >Tarik Tunai</option>
                <option value="2" >Voucher Pulsa</option>
                <option value="3">Voucher Listrik</option>
                <option value="4">Produk</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Jumlah Penarikan</label>
          <div class="col-sm-4">
            <input name="satuan" type="text" class="col-md-4 form-control" maxlength="50" value=""/>
          </div>
        </div>

        <div class="col-sm-offset-2 form-actions">
          <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
          <a class="btn btn-default" href="<?php echo base_url('user/transaksi'); ?>">Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $this->load->view('footer'); ?>