<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url(); ?>assets/bootstrap/docs/favicon.ico">

  <title><?php echo $title;?></title>

  <!-- Custom CSS & js-->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <link type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>
  <div id="nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="nav navbar-nav">
            <li <?php if ($page == 'dashboard')  echo 'class="active"'?>>
              <a href="<?php echo base_url('admin/dashboard/'); ?>"><i class="glyphicon glyphicon-home" ></i> BankSaku</a>
            </li>          
          </ul>

          <ul class="nav navbar-nav pull-right">    
            
              <li <?php if ($page == 'dashboard')  echo 'class="active"'?>><a href="<?php echo base_url('admin/dashboard/');?>"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
            
              <li <?php if ($page == 'user')  echo 'class="active"'?>><a href="<?php echo base_url('admin/user/'); ?>"><i class="glyphicon glyphicon-user"></i> Pengguna</a></li>
          
              <li <?php if ($page == 'user_cat')  echo 'class="active"'?>><a href="<?php echo base_url('admin/userCategory/'); ?>"><i class="glyphicon glyphicon-menu-hamburger"></i> Kategori Pengguna</a></li>

              <li <?php if ($page == 'saldo')  echo 'class="active"'?>><a href="<?php echo base_url('admin/saldo/'); ?>"><i class="glyphicon glyphicon-credit-card"></i> Saldo</a></li>
          
              <li <?php if ($page == 'transaksi')  echo 'class="active"'?>><a href="<?php echo base_url('admin/transaksi/'); ?>"><i class="glyphicon glyphicon-usd"></i> Transaksi</a></li>  

              <li <?php if ($page == 'transaksi_cat')  echo 'class="active"'?>><a href="<?php echo base_url('admin/transaksiCategory/'); ?>"><i class="glyphicon glyphicon-menu-hamburger"></i> Kategori Transaksi</a></li>

              <li <?php if ($page == 'product')  echo 'class="active"'?>><a href="<?php echo base_url('admin/product/'); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> Produk</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Admin<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('admin/dashboard/profile'); ?>">Profile</a></li>
                <li><a href="<?php echo site_url('site/logout'); ?>">Logout</a></li>
              </ul>
            </li>
          </ul>          
        </div>
      </div>
    </div>
  </div>
 <br> 
 <style type="text/css">
   #nav{
    background-color: gradient-linear(to right #0DFB67, #3DFF10, #52DC15);
   }
 </style>