<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Data Raw Material Requested
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('user/index');?>"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active">Pengolahan Data Barang</li>
      </ol>
    </section>

<section class="content">
<div class="box" id="panel"> 
 <div class="panel-body">

<table class="table table-bordered table-striped" width="100%" id="example1">
	<thead>
	<tr>
		<th><p>Tanggal Sampai</th></p>
		<th><p>Supplier</th></p>
		<th><p>No Part</p></th>
		<th><p>Nama Part</th></p>
		<th><p>Isi per Pack</th></p>
		<th><p>Jumlah</th></p>
		<th><p>Tanggal Pengecekan</p></th>
		
	</tr>
	</thead>
	<tbody>
	<tr>
	<?php 
	foreach ($record->result() as $d)
	{ 
		echo "<tr>
		<td style='display: none;'>$d->id</td>
		<td>$d->tgl_sampai</td>
		<td>$d->supplier</td>
		<td>$d->no_part</td>
		<td>$d->nama_part</td>
		<td>$d->isi_per_pack</td>
		<td>$d->jumlah</td>
		<td>$d->tgl_cek</td>
		</tr>";

	}
	?>
	<div class="col-md-12" style="text-align:left; margin-bottom: 10px; margin-top: -5px; ">

	
	</tbody>
	</table>

</div>


	 </div>
	 
<!-- ini modal -->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
	
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Data Barang</h4>
					</div>

					<div class="modal-body">
			
<?php
echo form_open('barang/post', "name='modal_popup'");
?>
<table class="table table-bordered">
	<tr>	
	<td> <input type="date" class="form-control" name="tgl_sampai" placeholder="Tanggal"/> </td>
	</tr>	
	<tr>	
	<td> <input type="text" class="form-control" name="supplier" placeholder="Supplier"/> </td>
	</tr>
	<tr>	
	<td> <input type="text" class="form-control" name="no_part" placeholder="Nomor Part"> </td>
	</tr>
	<tr>
	<td> <input type="text" class="form-control" name="nama_part" placeholder="Nama Part"></td>
	</tr>
	<tr>
	<td> <input type="text" class="form-control" name="isi_per_pack" placeholder="Isi/Pack"></td>
	</tr>
	<tr>
	<td> <input type="text" class="form-control" name="jumlah" placeholder="Jumlah"></td>
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