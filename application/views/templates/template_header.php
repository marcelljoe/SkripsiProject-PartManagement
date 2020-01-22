<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT Galih Ayom Paramesti</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="sidebar-mini wysihtml5-supported skin-green" style="height: auto; min-height: 100%;">

<?php
$akses=$this->session->userdata('role');
?>
<?php 
    $query1 = $this->db->query("SELECT * FROM data_barang where keputusan='Unchecked'");
    $jml = $query1->num_rows();     
        ?>

<?php 
    $query2 = $this->db->query("SELECT * FROM data_barang where keputusan='Unchecked'");
    $jmlrd = $query2->num_rows();     
        ?>

<div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('user/index');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>AP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?=$this->fungsi->user_login()->role;?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url('assets/')?>dist/img/photo1.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->fungsi->user_login()->name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url('assets/')?>dist/img/photo1.jpg" class="img-circle" alt="User Image">

                <p>
                <?=$this->fungsi->user_login()->name;?>
                  <small><?=$this->fungsi->user_login()->email;?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('auth/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
  <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('assets/')?>dist/img/photo1.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=ucfirst($this->fungsi->user_login()->name);?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigation</li>
        <li>
          <a href="<?= base_url('user/index');?>"><i class="fa fa-dashboard"></i><span>Halaman Utama</span></a>
        </li>
        <li>
        </li>
        <?php if ($akses=='Warehouse')
        {
          ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cubes"></i>
            <span>Pengolahan Data Material</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('barang');?>"><i class="fa fa-circle-o"></i>Kelola Data Material</a>
            <li><a href="<?= base_url('qctowh/indexok');?>"><i class="fa fa-circle-o"></i>Kelola Data Kondisi Material</a></li>
            <li><a href="<?= base_url('qctowh/indexng');?>"><i class="fa fa-circle-o"></i>Material untuk Retur</a></li>
            <li><a href="<?= base_url('barang/indexReq');?>"><i class="fa fa-circle-o"></i>Konfirmasi Permintaan Material</a></li>
          </ul>
        </li>
        <?php
        }
        ?>

<?php if($akses =='QC')
        {
          ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cubes"></i>
            <span>Pengecekan Data Barang</span>
            <span class="pull-right-container">
            <small class="label pull-right bg-yellow"><?=$jml;?></small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('whtoqc');?>"><i class="fa fa-circle-o"></i>Input Status Data R/M<small class="label pull-right bg-yellow"><?=$jml;?></small></a></li>
            <li><a href="<?= base_url('whtoqcfull');?>"><i class="fa fa-circle-o"></i>Data Setelah Inspeksi</a></li>
          </ul>
        </li>
        <?php
        }
        ?>


<?php if($akses =='Produksi')
        {
          ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cubes"></i>
            <span>Permintaan Raw Material</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('produksi/indexready');?>"><i class="fa fa-circle-o"></i>Permintaan Raw Material<small class="label pull-right bg-yellow"><?=$jml;?></small></a></li>
            <li><a href="<?= base_url('produksi/indexreq');?>"><i class="fa fa-circle-o"></i>Raw Material Requested</a></li>
            <li><a href="<?= base_url('produksi/indexsent');?>"><i class="fa fa-circle-o"></i>Raw Material Sent</a></li>
          </ul>
        </li>
        <?php
        }
        ?>

<?php if ($akses=='Warehouse')
        {
          ?>
		    <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Manajemen User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('akun');?>"><i class="fa fa-circle-o"></i>Kontrol User</a></li>
            </ul>
        </li>
        <?php
        }
        ?>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-close"></i> <span>Keluar</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>  
  <div class="content-wrapper">

  
