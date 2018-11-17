<?php $this->load->view('admin/header'); ?>

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><i class="glyphicon glyphicon-shopping-cart"></i> Produk</li>
        <li><i class="glyphicon glyphicon-plus"></i> <a href="<?php echo base_url('admin/product/add/0'); ?>"> Tambah Produk</a></li>
      </ul>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="id-th"><i class="glyphicon glyphicon-menu-hamburger"></i></th>
            <th><i class="glyphicon glyphicon-pencil "></i> Nama Produk</th>
            <th><i class="glyphicon glyphicon-sort "></i> Jumlah Produk</th>
            <th><i class="glyphicon glyphicon-usd "></i> Harga Satuan</th>
            <th><i class="glyphicon glyphicon-calendar "></i> Tanggal Update</th>
            <th><i class="glyphicon glyphicon-picture "></i> Gambar Produk</th>
            <th><i class="glyphicon glyphicon-record "></i> Status</th>
            <th class="operations-th"><i class="glyphicon glyphicon-cog "></i></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="id-td">1</td>
            <td> Vas Bunga Plastik</td>
            <td> 100</td>
            <td> Rp 20000</td>
            <td> 12 November 2018</td>
            <td> pictures123.jpg</td>
            <td> Tersedia</td>
            <td class="operations-td"> 
              <a href="cek" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="cek" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="cek" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>

          <tr>
            <td class="id-td">2</td>
            <td> Kotak Sampah Mini</td>
            <td> 50</td>
            <td> Rp 10000</td>
            <td> 10 November 2018</td>
            <td> gambarlucu.jpg</td>
            <td> Tersedia</td>
            <td class="operations-td"> 
              <a href="cek" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="cek" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="cek" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>

          <tr>
            <td class="id-td">3</td>
            <td> Kotak Pensil Karakter</td>
            <td> 10</td>
            <td> Rp 25000</td>
            <td> 12 Oktober 2018</td>
            <td> pictures123.jpg</td>
            <td> Tersedia</td>
            <td class="operations-td"> 
              <a href="cek" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="cek" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="cek" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>

          <tr>
            <td class="id-td">4</td>
            <td> Asesoris</td>
            <td> 100</td>
            <td> Rp 5000</td>
            <td> 12 Agustus 2018</td>
            <td> pictures123.jpg</td>
            <td> Tersedia</td>
            <td class="operations-td"> 
              <a href="#" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="<?php echo base_url('admin/product/add/0'); ?>" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
</div>

<?php $this->load->view('footer'); ?>