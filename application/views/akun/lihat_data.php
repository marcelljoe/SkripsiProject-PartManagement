<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Kontrol User
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('user/index');?>"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active">Manajemen Hak Akses</li>
      </ol>
    </section>

<section class="content">
<div class="box" id="panel"> 
 <div class="panel-body">

<table class="table table-bordered table-striped" width="100%" id="example1">
	<thead>
	<tr>
		<th><p>Nama</th></p>
		<th><p>Email</th></p>
		<th><p>Role</th></p>
		<th width="108px"><p>Aksi</th></p>
	</tr>
	</thead>
	<tbody>
	<tr>
	<?php 
	foreach ($record->result() as $d)
	{ 
		echo "<tr>
		<td>$d->name</td>
		<td>$d->email</td>
		<td>$d->role</td>
		<td>".anchor('akun/edit/'.$d->id,'Ubah',array('class'=> 'btn btn-primary btn-xs'))."  ".anchor('akun/delete/'.$d->id,'Hapus',array('class'=> 'btn btn-danger btn-xs'))." </td>
		</tr>";

	}
	?>
	<div class="col-md-12" style="text-align:left; margin-bottom: 10px; margin-top: -5px; ">

	<!--<?php 
	echo anchor('akun/post','Tambah Data',array('class'=> 'btn btn-success'));

	
		
	 ?> -->
	 <button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal">Tambah Akun</button>
	</tbody>
	</table>

</div>


	 </div>
	 
<!-- ini modal -->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" data-backdrop='static' data-keyboard='false'>
	
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Data User</h4>
					</div>

					<div class="modal-body">
			
<?php
echo form_open('akun/post', "name='modal_popup'");
?>
<table class="table table-bordered">
	<tr>	
	<td> <input type="text" class="form-control" name="name" placeholder="Nama"></td>
	</tr>
	<tr>
	<td> <input type="email" class="form-control" name="email" placeholder="Email"></td>
	</tr>
	<tr>
	<td> <input type="password" class="form-control" name="password" placeholder="Password"></td>
	</tr>
	<tr>
	<td><select name="role" class="form-control">
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
</form>
</div>
</div>
</div>
</div>
</section>