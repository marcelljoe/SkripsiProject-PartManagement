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
echo form_open ('akun/edit');
?>

<table class="table table-bordered">
	<tr style="display: none;">	
	<td> <input type="text" class="form-control" name="id" value="<?= $record['id']?>" placeholder="ID" readonly></td>
	</tr>
	<tr>	
	<td>Nama<input type="text" class="form-control" name="name" value="<?= $record['name']?>" placeholder="Nama"></td>
	</tr>
	<tr>
	<td>Email<input type="email" class="form-control" name="email" value="<?= $record['email']?>" placeholder="Email"></td>
	</tr>
	<tr>
	<td>Password<input type="password" class="form-control" name="password" placeholder="Password"></td>
	</tr>
	<tr>
	<td>Masukkan Hak Akses<select name="role" class="form-control">
		<option>--Pilih Tipe User--</option>
		<option value="Warehouse">Warehouse Leader</option>
		<option value="QC">QC</option>
		<option value="Produksi">Produksi</option></select>
	</td>
	</tr>
	<tr>
		<td>
			<button type="submit" class ="btn btn-primary" name="submit">Simpan</button></td>
	</tr>
</table>
 </div>
</div>
	</section>
