<h3> Tambah Data Produk </h3>

<?php 
echo form_open ('barang/post');
?>



<table class="table table-bordered">
	<tr>
		<td> <input type="date" class="form-control" name="tgl_sampai" placeholder="Tanggal"></td>
	</tr>
	<tr>
	<td> <input type="text" class="form-control" name="supplier" placeholder="Supplier"></td>
	</tr>
	<tr>
		<td><input type="text" class="form-control" name="no_part" placeholder="No Part"></td>
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
			<button type="submit" class ="btn btn-primary"  name="submit">Simpan</button></td>
	 
	</tr>
</table>
</form>