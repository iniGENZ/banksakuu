<?php $this->load->view('admin/header'); ?>

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><i class="glyphicon glyphicon-usd"></i> Transaksi</li>
        <li><i class="glyphicon glyphicon-plus"></i> <a href="<?php echo base_url('admin/transaksi/add/0'); ?>">Tambah Transaksi</a></li>
      </ul>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <form class="form-inline" method="post">
        <select name="contest_id" class="col-md-3">
          <option value="0">(Kategori Transaksi)</option>
          <option value="1">(Setoran)</option>
          <option value="2">(Penarikan)</option>
        </select>
        <button type="submit" class="btn btn-default" rel="tooltip" title="<?php echo $this->lang->line('filter'); ?>"><i class="glyphicon glyphicon-search"></i></button>
      </form>
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="id-th"><i class="glyphicon glyphicon-menu-hamburger"></i></th>
            <th><i class="glyphicon glyphicon-pencil "></i> Nama Transaksi</th>
            <th><i class="glyphicon glyphicon-calendar "></i> Tanggal</th>
            <th><i class="glyphicon glyphicon-pushpin "></i> Jenis Transaksi</th>

            <th class="submission-language-th"><i class="glyphicon glyphicon-usd"></i> Satuan</th>
            <th class="submission-time-th"><i class="glyphicon glyphicon-sort "></i> Jumlah</th>
            <th class="submission-verdict-th"><i class="glyphicon glyphicon-th-large "></i> Total</th>
            <th class="operations-th"><i class="glyphicon glyphicon-cog "></i></th>
          </tr>
        </thead>

        <tbody>
          <?php for ($i=1; $i <=5 ; $i++) { ?>
          <tr>
            <td class="id-td"><?php echo $i; ?></td>
            <td> Jual Sampah 2 Kg</td>
            <td> 12 Januari 2018</td>
            <td> Setor</td>
            <td> 2000</td>
            <td> 2 kg</td>
            <td> 4000</td>
            <td class="operations-td">
              <a href="#" rel="tooltip" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="<?php echo base_url('admin/transaksi/add/0'); ?>" rel="tooltip" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="edit" rel="tooltip" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  
</div>

<?php $this->load->view('footer'); ?>