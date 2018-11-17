<?php $this->load->view('admin/header'); ?>

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><i class="glyphicon glyphicon-user"></i> Pengguna</li>
        <li><i class="glyphicon glyphicon-list-alt"></i> Pengguna Baru</li>
      </ul>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <h3>Tambah Pengguna</h3>
      
      <form class="form-horizontal" action="" method="post">
        <div class="form-group">
          <label class="col-sm-2 control-label">Username</label>
          <div class="col-sm-4">
            <input name="username" type="text" class="col-md-4 form-control" maxlength="30" value=""/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Name</label>
          <div class="col-sm-4">
            <input name="name" type="text" class="col-md-4 form-control" maxlength="50" value=""/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Password</label>
          <div class="col-sm-4">
            <input name="password" type="password" class="col-md-4 form-control" maxlength="50" value=""/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Email</label>
          <div class="col-sm-4">
            <input name="email" type="text" class="col-md-4 form-control" maxlength="50" value=""/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">No. HP</label>
          <div class="col-sm-4">
            <input name="no_hp" type="text" class="col-md-4 form-control" maxlength="50" value=""/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-4">
            <select name="j_kel" class="col-md-4 form-control">
                <option value="1" >Laki-laki</option>
                <option value="2" >Perempuan</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Category</label>
          <div class="col-sm-4">
            <select name="category_id" class="col-md-4 form-control">
              <option value="1" >Administrator</option>
              <option value="2" >Pengguna</option>
            </select>
          </div>
        </div>

        <div class="col-sm-offset-2 form-actions">
          <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
          <a class="btn btn-default" href="<?php echo base_url('admin/user'); ?>">Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $this->load->view('footer'); ?>