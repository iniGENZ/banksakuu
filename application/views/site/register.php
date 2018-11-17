<?php $this->load->view('header'); ?>

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><i class="glyphicon glyphicon-off"></i> BankSaku</li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h3>Daftar Pengguna Baru</h3>
      <form class="form-horizontal" action="<?php echo base_url('site/proses_register'); ?>" method="post">

        <div class="form-group">
          <label class="col-sm-2 control-label">Username</label>
          <div class ="col-sm-4">
            <input name="username" type="text" class="form-control" maxlength="50" placeholder="Username"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Password</label>
          <div class ="col-sm-4">
            <input name="password" type="password" class="form-control" maxlength="50" placeholder="Password"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Lengkap</label>
          <div class ="col-sm-4">
            <input name="fullname" type="text" class="form-control" maxlength="50" placeholder="Nama Lengkap"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Email</label>
          <div class ="col-sm-4">
            <input name="email" type="text" class="form-control" maxlength="50" placeholder="Email"/>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">No. HP</label>
          <div class ="col-sm-4">
            <input name="no_hp" type="text" class="form-control" maxlength="50" placeholder="No. HP"/>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Jenis Kelamin</label>
          <div class ="col-sm-4">
            <select name="j_kel" class="col-md-4 form-control">
            	<option value="1">Laki-laki</option>
            	<option value="2">Perempuan</option>
            </select>
          </div>
        </div>

        <div class="form-actions col-sm-offset-2">
          <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Daftar</button>
          <a class="btn btn-primary" href="<?php echo base_url('site'); ?>"><i class="glyphicon glyphicon-download-alt"></i> Masuk</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $this->load->view('footer'); ?>