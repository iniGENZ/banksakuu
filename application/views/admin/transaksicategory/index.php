<?php $this->load->view('admin/header'); ?>

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><i class="glyphicon glyphicon-menu-hambuger"></i> Kategori Transaksi</li>
        <li><i class="glyphicon glyphicon-plus"></i> <a href="<?php echo base_url('admin/transaksiCategory/add/0'); ?>">Tambah Kategori Transaksi</a></li>
      </ul>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="id-th"><i class="glyphicon glyphicon-menu-hamburger"></i></th>
            <th><i class="glyphicon glyphicon-pencil "></i> Nama Transaksi</th>
            <th><i class="glyphicon glyphicon-sort "></i> Jumlah Transaksi</th>
            <th><i class="glyphicon glyphicon-record "></i> Status</th>
            <th class="operations-th"><i class="glyphicon glyphicon-cog "></i></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="id-td">1</td>
            <td> Setoran</td>
            <td> 10</td>
            <td> Aktif</td>
            <td class="operations-td"> 
              <a href="#" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="<?php echo base_url('admin/transaksiCategory/add/0'); ?>" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>

          <tr>
            <td class="id-td">2</td>
            <td> Penarikan</td>
            <td> 2</td>
            <td> Aktif</td>
            <td class="operations-td"> 
              <a href="#" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="<?php echo base_url('admin/transaksiCategory/add/0'); ?>" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
  
</div>

<?php $this->load->view('footer'); ?>