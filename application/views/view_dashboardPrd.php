<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'gap');
        ?>

        <?php 
    $queryall = $this->db->query("SELECT * FROM data_barang where status_p='Ready'");
    $jml = $queryall->num_rows();     
        ?>

<?php 
    $queryreq = $this->db->query("SELECT * FROM data_barang where request='Requested'");
    $jmlreq = $queryreq->num_rows();     
        ?>

<?php 
    $queryuser = $this->db->query("SELECT * FROM user");
    $jmluser = $queryuser->num_rows();     
        ?>
<?php 
    $querysent = $this->db->query("SELECT * FROM data_barang where request='Sent'");
    $jmlsent = $querysent->num_rows();     
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
              <p>Raw Material Ready</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url('produksi/indexready');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$jmlreq;?></h3>

              <p>Requested Items</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url('produksi/indexreq');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$jmlsent;?></h3>
              
              <p>Items Sent</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?= base_url('produksi/indexsent');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  
  