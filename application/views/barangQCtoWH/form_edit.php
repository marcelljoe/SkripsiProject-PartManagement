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
echo form_open ('barang/edit');
?>

<table class="table table-bordered">
	<tr style="display: none;">
	<td>ID<input type="text" class="form-control" name="id" value="<?= $record['id']?>" placeholder="ID" readonly></td>
	</tr>
	<tr>
	<td>Tanggal Sampai<input type="date" class="form-control" name="tgl_sampai" value="<?= $record['tgl_sampai']?>" placeholder="Tanggal Sampai"></td>
	</tr>
	<tr>
	<td>Supplier<input type="text" class="form-control" name="supplier" value="<?= $record['supplier']?>" placeholder="Supplier"></td>
	</tr>
	<tr>
	<td>Nomor Part<input type="text" class="form-control" name="no_part" value="<?= $record['no_part']?>" placeholder="No Part" readonly/></td>
	</tr>
	<tr>	
	<td>Nama Part<input type="text" class="form-control" name="nama_part" value="<?= $record['nama_part']?>" placeholder="Nama Part"></td>
	</tr>
	<tr>
	<td>Isi per Pack<input type="text" class="form-control" name="isi_per_pack" value="<?= $record['isi_per_pack']?>" placeholder="Isi/Pack"></td>
	</tr>
	<tr>
	<td>Jumlah<input type="text" class="form-control" name="jumlah" value="<?= $record['jumlah']?>" placeholder="Jumlah"></td>
	</tr>
	
	<tr>
		<td>
			<button type="submit" class ="btn btn-primary"  name="submit">Simpan</button></td>
	</tr>
</table>
 </div>
</div>
	</section>
