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
		<th><p>Supplier</th></p>
		<th><p>No Part</p></th>
		<th><p>Nama Part</th></p>
		<th><p>Isi per Pack</th></p>
		<th><p>Jumlah</th></p>
		<th><p>Tanggal Pengecekan</p></th>
		<th><p>Keputusan</p></th>
		<th width="110px"><p>Aksi</th></p>
	</tr>
	</thead>
	<tbody>
	<tr>
	<?php 
	foreach ($record->result() as $d)
	{ 
		echo "<tr>
		<td style='display: none;'>$d->id</td>
		<td>$d->supplier</td>
		<td>$d->no_part</td>
		<td>$d->nama_part</td>
		<td>$d->isi_per_pack</td>
		<td>$d->jumlah</td>
		<td>$d->tgl_cek</td>
		<td>$d->keputusan</td>
		<td>".anchor('barang/setSent/'.$d->id,'Kirim',array('class'=> 'btn btn-primary btn-xs btn-block', 'data-target' => '#ModalSend', 'data-toggle' => 'modal'))."</td>
		</tr>";

	}
	?>
	<div class="col-md-12" style="text-align:left; margin-bottom: 10px; margin-top: -5px; ">

	
	</tbody>
	</table>

</div>


	 </div>
	 
<!-- ini modal -->
<div id="ModalSend" class="modal fade" tabindex="-1" role="dialog">
	
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Kirim Barang</h4>
					</div>

					<div class="modal-body">
			
<?php
echo form_open('barang/setSent', "name='modal_popup'");
?>

</form>
</div>
</div>
</div>
</div>
</section>