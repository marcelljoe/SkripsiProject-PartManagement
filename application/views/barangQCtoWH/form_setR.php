<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Set Barang Ready
        <small>Edit</small>
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
echo form_open ('qctowh/editR');
?>


<table class="table table-bordered">
<tr style="display: none;">
	<td>ID<input type="text" class="form-control" name="id" value="<?= $record['id']?>" placeholder="ID" readonly/></td>
	</tr>
	<tr>
	<td>Nomor Part<input type="text" class="form-control" name="no_part" value="<?= $record['no_part']?>" placeholder="No Part" readonly/></td>
	</tr>
	<tr style="display: none;">
	<td>Tanggal Sampai<input type="date" class="form-control" name="tgl_sampai" value="<?= $record['tgl_sampai']?>" placeholder="Tanggal Sampai" readonly></td>
	</tr>
	<tr>
	<td>Supplier<input type="text" class="form-control" name="supplier" value="<?= $record['supplier']?>" placeholder="Supplier" readonly></td>
	</tr>
	<tr>	
	<td>Nama Part<input type="text" class="form-control" name="nama_part" value="<?= $record['nama_part']?>" placeholder="Nama Part" readonly></td>
	</tr>
	<tr style="display: none;">
	<td>Isi per Pack<input type="text" class="form-control" name="isi_per_pack" value="<?= $record['isi_per_pack']?>" placeholder="Isi/Pack" readonly></td>
	</tr>
	<tr>
	<td>Jumlah<input type="text" class="form-control" name="jumlah" value="<?= $record['jumlah']?>" placeholder="Jumlah" readonly></td>
	</tr>
	<tr style="display: none;">
	<td>Tanggal Pengecekan<input type="date" class="form-control" name="tgl_cek" value="<?= $record['tgl_cek']?>" placeholder="Tanggal Pengecekan" readonly></td>
	</tr>
	<tr style="display: none;">
	<td>Keputusan<input type="text" class="form-control" name="keputusan" value="<?= $record['keputusan']?>" placeholder="Keputusan" readonly></td>
	</tr>
	<tr style="display: none;">
	<td>Status<input type="text" class="form-control" name="status_p" value='Ready' placeholder="Status" readonly></td>
	</tr>
	<tr>
		<td>
		<a href="<?= base_url('QCtoWH/cetakTag/');?><?= $record['id']?>" target ="_blank">Cetak</a>
			<button type="submit" class ="btn btn-primary" onclick="return confirm('Anda yakin barang tersebut Ready? Tolong periksa kembali Raw Material!')" name="submit">Set Ready</button>
			<button type="button" class ="btn btn-danger" data-dismiss="modal">Close</button>
		</td>
	</tr>
</table>
<script>
	$('#ModalEditR').on('hidden.bs.modal', function() {
		document.location.reload();
	})
	</script>
 </div>
</div>
	</section>
