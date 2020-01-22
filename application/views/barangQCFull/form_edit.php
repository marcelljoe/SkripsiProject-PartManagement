<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Pengolahan Data Barang
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
echo form_open ('whtoqcfull/edit');
?>

<table class="table table-bordered">
<tr style="display: none;">
	<td>ID<input type="text" class="form-control" name="id" value="<?= $record['id']?>" placeholder="ID" readonly/></td>
	</tr>
	<tr>
	<td>Nomor Part<input type="text" class="form-control" name="no_part" value="<?= $record['no_part']?>" placeholder="No Part" readonly/></td>
	</tr>
	<tr>
	<td>Nama Part<input type="text" class="form-control" name="nama_part" value="<?= $record['nama_part']?>" placeholder="Nama Part" readonly/></td>
	</tr>
	<tr>
	<td>Diameter Keseluruhan<select name="diameter_all" class="form-control">
		<option>--Pilih Kondisi--</option>
		<option value="OK">OK</option>
		<option value="NG">NG</option></select>
	</td>
	</tr>
	<tr>
	<td>Jarak<select name="jarak" class="form-control">
		<option>--Pilih Kondisi--</option>
		<option value="OK">OK</option>
		<option value="NG">NG</option></select></td>
	</tr>
	<tr>	
	<td>Panjang<select name="panjang" class="form-control">
		<option>--Pilih Kondisi--</option>
		<option value="OK">OK</option>
		<option value="NG">NG</option></select>
	</td>
	</tr>
	<tr>
	<td>Kehalusan<select name="kehalusan" class="form-control">
		<option>--Pilih Kondisi--</option>
		<option value="OK">OK</option>
		<option value="NG">NG</option></select>
	</td>
	</tr>
	<tr>
	<td>Penampilan<select name="penampilan" class="form-control">
		<option>--Pilih Kondisi--</option>
		<option value="OK">OK</option>
		<option value="NG">NG</option></select></td>
	</tr>
	<tr>
	<td>Tanggal Pengecekan<input type="date" class="form-control" name="tgl_cek" value="<?= $record['tgl_cek'];?>" placeholder="Tanggal Pengecekan"></td>
	</tr>
	<tr>
	<td>Keputusan<select name="keputusan" class="form-control">
		<option>--Pilih Kondisi--</option>
		<option value="OK">OK</option>
		<option value="NG">NG</option></select></td>
	</tr>
	<tr style="display: none;">
	<td>Status<input type="text" class="form-control" name="status_p" value="<?= $record['status_p'];?>" placeholder="Status" readonly></td>
	</tr>
	<tr>
		<td>
			<button type="submit" class ="btn btn-primary" onclick="return confirm('Anda yakin barang tersebut OK? Tolong periksa kembali!')" name="submit">Simpan</button>
			<button type="button" class ="btn btn-danger" data-dismiss="modal">Close</button>
		</td>
	</tr>
</table>
<script>
	$('#ModalEdit').on('hidden.bs.modal', function() {
		document.location.reload();
	})
	</script>
 </div>
</div>
	</section>
