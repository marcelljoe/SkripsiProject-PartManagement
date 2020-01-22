<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'gap');
        ?>

        <?php 
    $queryall = $this->db->query("SELECT * FROM data_barang");
    $jml = $queryall->num_rows();     
        ?>

<?php 
    $queryuc = $this->db->query("SELECT * FROM data_barang where keputusan='OK' and status_p='Unready'");
    $jmluc = $queryuc->num_rows();     
        ?>

<?php 
    $queryuser = $this->db->query("SELECT * FROM user");
    $jmluser = $queryuser->num_rows();     
        ?>
<?php 
    $queryreq = $this->db->query("SELECT * FROM data_barang where request='Requested'");
    $jmlreq = $queryreq->num_rows();     
        ?>
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$jml;?></h3>
              <p>Data Raw Material</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url('barang');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$jmluc;?></h3>

              <p>Data yang Belum Disiapkan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url('qctowh/indexok');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$jmlreq;?></h3>
            
              <p>On-request Items</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?= base_url('Barang/indexReq');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?=$jmluser;?></h3>

                  <p>User Terdaftar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?=base_url('akun');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
      </div>
    </section>
    <!-- /.content -->
  
  