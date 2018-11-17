<?php $this->load->view('header'); ?>

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><i class="glyphicon glyphicon-home"></i> BankSaku</li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h3>Masuk Pengguna</h3>
      <form class="form-horizontal" action="<?php echo base_url('site/proses_login'); ?>" method="post">
        <div class="form-group">
          <label class="col-sm-2 control-label">Username</label>
          <div class ="col-sm-4">
            <input name="username" type="text" class="form-control" maxlength="50" placeholder="Username"/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Password</label>
          <div class ="col-sm-4">
            <input name="password" type="password" class="form-control" maxlength="50" placeholder="Password"/>
          </div>
        </div>

        <div class="form-actions col-sm-offset-2">
          <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-download-alt"></i> Masuk</button>
          <a class="btn btn-primary" href="<?php echo base_url('site/register'); ?>"><i class="glyphicon glyphicon-plus"></i> Daftar</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $this->load->view('footer'); ?>