<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Pengecekan Raw Material (Setelah di Cek)
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('user/index');?>"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active">Pengecekan Raw Material</li>
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
		<th><p>Keputusan</th></p>
		<th width="75px"><p>Aksi</th></p>
	</tr>
	</thead>
	<tbody>
	<tr>
	<?php 
	foreach ($record->result() as $d)
	{ 
		echo "<tr>
		<td>$d->tgl_sampai</td>
		<td>$d->supplier</td>
		<td>$d->id_rm</td>
		<td>$d->no_part</td>
		<td>$d->nama_part</td>
		<td>$d->isi_per_pack</td>
		<td>$d->jumlah</td>
		<td>$d->keputusan</td>
		<td>".anchor('whtoqcfull/detail/'.$d->no_part,'Detail',array('class' => 'btn btn-default btn-xs', 'data-target' => '#ModalDetail', 'data-toggle' => 'modal'))."  ".anchor('whtoqcfull/edit/'.$d->no_part,'Edit',array('class' => 'btn btn-primary btn-xs', 'data-target' => '#ModalEdit', 'data-toggle' => 'modal'))."</td>
		</tr>";

	}
	?>
	<div class="col-md-12" style="text-align:left; margin-bottom: 10px; margin-top: -5px; ">

	<!--<?php 
	echo anchor('whtoqc/post','Tambah Data',array('class'=> 'btn btn-success'));
	 ?> -->
	 
	</tbody>
	</table>

</div>


	 </div>
	 

<!-- ini modal 1-->
<div id="ModalDetail" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>

					<div class="modal-body">
			
<?php
echo form_open('whtoqcfull/detail', "name='modal_popup'");
?>

</div>
</div>
</div>
</div>

<!-- ini modal 2-->
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>

					<div class="modal-body">
			
<?php
echo form_open('whtoqcfull/edit', "name='modal_popup'");
?>

</div>
</div>
</div>
</div>
<script>
	$('#ModalEdit').on('hidden.bs.modal', function() {
		document.location.reload();
	})
	</script>
</section>
