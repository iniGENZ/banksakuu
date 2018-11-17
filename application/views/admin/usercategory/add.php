<?php $this->load->view('admin/header'); ?>

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><i class="glyphicon glyphicon-flag"></i> Kategori Pengguna</li>
        <li><i class="glyphicon glyphicon-list-alt"></i> Tambah Kategori Pengguna Baru</li>
      </ul>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <h3>Tambah Kategori Pengguna</h3>
      
      <form class="form-horizontal" action="" method="post">
        
        <div class="form-group">
          <label class="col-sm-2 control-label">Name</label>
          <div class="col-sm-4">
            <input name="name" type="text" class="col-md-4 form-control" maxlength="50" value=""/>
          </div>
        </div>
        
        <div class="col-sm-offset-2 form-actions">
          <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
          <a class="btn btn-default" href="<?php echo base_url('admin/userCategory'); ?>"> Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $this->load->view('footer'); ?>