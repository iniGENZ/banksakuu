<?php $this->load->view('user/header'); ?>

<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><i class="glyphicon glyphicon-credit-card"></i> Saldo</li>
      </ul>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <form class="form-inline" method="post">
        <select name="contest_id" class="col-md-3">
          <option value="0">(Jenis Saldo)</option>
          <option value="1">(Saldo Masuk)</option>
          <option value="2">(Saldo Keluar)</option>
        </select>
        <button type="submit" class="btn btn-default" rel="tooltip" title="Filter"><i class="glyphicon glyphicon-search"></i></button>
      </form>
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="id-th"><i class="glyphicon glyphicon-tag"></i></th>
            <th><i class="glyphicon glyphicon-list-alt "></i> Jumlah Saldo</th>
            <th><i class="glyphicon glyphicon-pushpin "></i> Jenis Saldo</th>
            <th><i class="glyphicon glyphicon-calendar "></i> Tanggal</th>
            <th class="submission-language-th"><i class="glyphicon glyphicon-record"></i> Status</th>
          </tr>
        </thead>

        <tbody>
          <?php for ($i=1; $i <=5 ; $i++) { ?>
          <tr>
            <td class="id-td"><?php echo $i; ?></td>
            <td> Rp 100000</td>
            <td> Saldo Masuk</td>
            <td> 10 November 2018</td>
            <td> Terverifikasi</td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>