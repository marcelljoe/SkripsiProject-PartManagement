<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Pengolahan Data Barang
        <small>Detail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('user/index');?>"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active">Data Raw Material</li>
      </ol>
	</section>
	
	<section class="content">
<div class="box" id="panel"> 
 <div class="panel-body">

<?php 
echo form_open ('whtoqcfull/detail');
?>

<table class="table table-bordered">
	<tr style="display: none;">	
	<td> <input type="text" class="form-control" name="id" value="<?= $record['id']?>" placeholder="ID" readonly></td>
	</tr>
	<tr>	
	<td>No Part<input type="text" class="form-control" name="no_part" value="<?= $record['no_part']?>" placeholder="No Part" readonly></td>
	</tr>
	<tr>
	<td>Nama Part<input type="text" class="form-control" name="nama_part" value="<?= $record['nama_part']?>" placeholder="Nama Part" readonly></td>
	</tr>
	<tr>
	<td>Diameter Keseluruhan<input type="text" class="form-control" name="diameter_all" value="<?= $record_detail['diameter_all']?>" placeholder="Diameter" readonly></td>
	</tr>
	<tr>
	<td>Jarak Keseluruhan<input type="text" class="form-control" name="jarak" value="<?= $record_detail['jarak']?>" placeholder="Jarak" readonly></td>
	</tr>
	<tr>
	<td>Panjang Keseluruhan<input type="text" class="form-control" name="panjang" value="<?= $record_detail['panjang']?>" placeholder="Panjang" readonly></td>
	</tr>
	<tr>
	<td>Kehalusan<input type="text" class="form-control" name="kehalusan" value="<?= $record_detail['kehalusan']?>" placeholder="Kehalusan" readonly></td>
	</tr>
	<tr>
	<td>Penampilan<input type="text" class="form-control" name="penampilan" value="<?= $record_detail['penampilan']?>" placeholder="Penampilan" readonly></td>
	</tr>
	<tr>
		<td>
			<button type="button" class ="btn btn-danger" data-dismiss="modal">Close</button>
			</td>
		</tr>
</table>
<script>
	$('#ModalDetail').on('hidden.bs.modal', function() {
		document.location.reload();
	})
	</script>
 </div>
</div>
	</section>
