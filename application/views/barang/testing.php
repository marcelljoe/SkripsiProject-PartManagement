<!-- ini modal 1-->
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
	<td>Tanggal Sampai<input type="date" class="form-control" name="tgl_sampai"/> </td>
	</tr>	
	<tr>	
	<td>Supplier<input type="text" class="form-control" name="supplier"/> </td>
	</tr>
	<tr>	
	<td>Nomor Part<input type="text" class="form-control" name="no_part"> </td>
	</tr>
	<tr>
	<td>Nama Part<input type="text" class="form-control" name="nama_part"></td>
	</tr>
	<tr>
	<td>Isi/Pack<input type="text" class="form-control" name="isi_per_pack"></td>
	</tr>
	<tr>
	<td>Jumlah<input type="text" class="form-control" name="jumlah"></td>
</tr>
	
	<tr>
		<td>
			<button type="submit" class ="btn btn-primary" onclick="return confirm('Anda yakin semua sudah terisi? Tolong periksa kembali!')" name="submit">Simpan</button></td>
	</tr>
</table>
</div>
</div>