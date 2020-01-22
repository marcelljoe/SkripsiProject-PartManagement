<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Data Material
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('user/index');?>"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active">Pengolahan Incoming Part</li>
      </ol>
    </section>

<section class="content">
	<?php $this->view('messages')?>
<section class="box" id="panel"> 
 <div class="box-body table-responsive">

<table class="table table-bordered table-striped" width="100%" id="example1">
	<thead>
	<tr>
		<th><p>Tanggal Sampai</th></p>
		<th><p>Supplier</th></p>
		<th><p>ID R/M</p></th>
		<th><p>No Part</p></th>
		<th><p>Nama Part</th></p>
		<th><p>Isi per Pack</th></p>
		<th><p>Jumlah</th></p>
		<th style="display: none;"><p>Keputusan</th></p>
		<th width="75px"><p>Aksi</th></p>
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
		<td>$d->id_rm</td>
		<td>$d->no_part</td>
		<td>$d->nama_part</td>
		<td>$d->isi_per_pack</td>
		<td>$d->jumlah</td>
		<td style='display: none;'>$d->keputusan</td>
		<td>".anchor('barang/edit/'.$d->id,'Ubah',array('class' => 'btn btn-primary btn-xs', 'data-target' => '#ModalEdit', 'data-toggle' => 'modal'))."  " .anchor('barang/delete/'.$d->id,'Hapus',array('class'=> 'btn btn-danger btn-xs', 'onclick'=>"return confirm('Anda yakin ingin Hapus data?')"))." </td>
		</tr>";

	}
	?>
	<div class="col-md-12" style="text-align:left; margin-bottom: 10px; margin-top: -5px; ">

	<!--<?php 
	echo anchor('barang/post','Tambah Data',array('class'=> 'btn btn-success'));

	
		
	 ?> -->
	 <button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal">Tambah Data</button>
	</tbody>
	</table>

</div>


	 </div>
	 
<!-- ini modal 1-->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<section class="content-header">
      <h1>Input Incoming Part
		  <small>Tambah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('user/index');?>"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active">Data Part</li>
		</ol>
	</section>
<div class="modal-header">
	
	
<div class="box" id="panel"> 
<div class="modal-body">
			
<?php
echo form_open('barang/post', "name='modal_popup'");
?>

<table class="table table-bordered">
	<tr>	
	<td>Tanggal Sampai<input type="date" class="form-control" name="tgl_sampai" required> </td>
	</tr>	
	<tr>	
	<td>Supplier<select name="supplier" class="form-control">
			<?php foreach($supp as $row)
				{
					echo '<option value="'.$row->nama_supp.'">'.$row->nama_supp.'</option>';
				}
				?>
		</select> </td>
	</tr>
	<tr>	
	<td>ID Raw Material
		<select name="id_rm" class="form-control">
			<?php foreach($groups as $row)
				{
					echo '<option value="'.$row->id_rm.'">'.$row->id_rm.'</option>';
				}
				?>
		</select> </td>
	</tr>
	<tr>	
	<td>Nomor Part<input type="text" class="form-control" name="no_part" required> </td>
	</tr>
	<tr>
	<td>Nama Part<input type="text" class="form-control" name="nama_part" required></td>
	</tr>
	<tr>
	<td>Isi/Pack<input type="text" class="form-control" name="isi_per_pack" required></td>
	</tr>
	<tr>
	<td>Jumlah<input type="text" class="form-control" name="jumlah" required></td>
	</tr>
	<tr style="display: none;">
	<td>Keputusan<input type="text" class="form-control" name="keputusan" value="Unchecked"></td>
	</tr>
	<tr style="display: none;">
	<td>Request<input type="text" class="form-control" name="request" value="Idle"></td>
	</tr>
	<tr>
	<td><button type="submit" class ="btn btn-primary" onclick="return confirm('Anda yakin semua sudah terisi? Tolong periksa kembali!')" name="submit">Simpan</button>
	<button type="button" class ="btn btn-danger" data-dismiss="modal">Close</button>
	</td>
	</tr>
</table>
<script>
	$('#ModalAdd').on('hidden.bs.modal', function() {
		document.location.reload();
	})
	</script>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<!-- ini modal 2-->
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>

					<div class="modal-body">
			
<?php
echo form_open('barang/edit', "name='modal_popup'");
?>

</div>
</div>
</div>
</div>

</section>
