<?php $this->load->view('admin/header'); ?>

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><i class="glyphicon glyphicon-user"></i> Pengguna</li>
        <li><i class="glyphicon glyphicon-plus"></i> <a href="<?php echo base_url('admin/user/add/0'); ?>">Tambah Pengguna</a></li>
      </ul>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <form class="form-inline" method="post">
        <select name="contest_id" class="col-md-3">
          <option value="0">(Kategori)</option>
          <option value="1">(Admin)</option>
          <option value="2">(Pengguna)</option>
        </select>

        <button type="submit" class="btn btn-default" rel="tooltip" title="Saring"><i class="glyphicon glyphicon-search"></i></button>
      </form>
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="id-th"><i class="glyphicon glyphicon-menu-hamburger"></i></th>
            <th><i class="glyphicon glyphicon-user "></i> Username</th>
            <th><i class="glyphicon glyphicon-pencil "></i> Nama Lengkap</th>
            <th><i class="glyphicon glyphicon-map-marker "></i> Alamat</th>
            <th><i class="glyphicon glyphicon-user "></i> Jenis Kelamin</th>
            <th><i class="glyphicon glyphicon-envelope "></i> Email</th>
            <th><i class="glyphicon glyphicon-earphone "></i> No. HP</th>
            <th><i class="glyphicon glyphicon-record "></i> Kategori Pengguna</th>
            <th class="operations-th"><i class="glyphicon glyphicon-cog "></i></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="id-td">1</td>
            <td> meirusfandi</td>
            <td> Mei Rusfandi</td>
            <td> Pringsewu</td>
            <td> Laki-laki</td>
            <td> meirusfandi@gmail.com</td>
            <td> 08228119XXXX</td>
            <td> Pengguna</td>
            <td class="operations-td"> 
              <a href="#" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="<?php echo base_url('admin/user/add/0'); ?>" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>

          <tr>
            <td class="id-td">2</td>
            <td> meirusfandi</td>
            <td> Mei Rusfandi</td>
            <td> Pringsewu</td>
            <td> Laki-laki</td>
            <td> meirusfandi@gmail.com</td>
            <td> 08228119XXXX</td>
            <td> Pengguna</td>
            <td class="operations-td"> 
              <a href="#" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="<?php echo base_url('admin/user/add/0'); ?>" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>

          <tr>
            <td class="id-td">3</td>
            <td> meirusfandi</td>
            <td> Mei Rusfandi</td>
            <td> Pringsewu</td>
            <td> Laki-laki</td>
            <td> meirusfandi@gmail.com</td>
            <td> 08228119XXXX</td>
            <td> Pengguna</td>
            <td class="operations-td"> 
              <a href="#" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="<?php echo base_url('admin/user/add/0'); ?>" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>

          <tr>
            <td class="id-td">4</td>
            <td> meirusfandi</td>
            <td> Mei Rusfandi</td>
            <td> Pringsewu</td>
            <td> Laki-laki</td>
            <td> meirusfandi@gmail.com</td>
            <td> 08228119XXXX</td>
            <td> Pengguna</td>
            <td class="operations-td"> 
              <a href="#" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="<?php echo base_url('admin/user/add/0'); ?>" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>

          <tr>
            <td class="id-td">5</td>
            <td> meirusfandi</td>
            <td> Mei Rusfandi</td>
            <td> Pringsewu</td>
            <td> Laki-laki</td>
            <td> meirusfandi@gmail.com</td>
            <td> 08228119XXXX</td>
            <td> Pengguna</td>
            <td class="operations-td"> 
              <a href="#" title="Lihat"><i class="glyphicon glyphicon-search"></i></a>
              <a href="<?php echo base_url('admin/user/add/0'); ?>" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="#" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
</div>

<?php $this->load->view('footer'); ?>