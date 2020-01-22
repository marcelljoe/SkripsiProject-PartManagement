<script type="text/javascript">
	window.print();
</script>
 <br>
            <div align="left">
			<table border=0 width="100%">
			<tr>
			<td>
                <img id="logo-header" src="<?php echo base_url();?>assets/GAPlogo.jpg" height="50" width="50">
				</td>
				<td align=right>PT GALIH AYOM PARAMESTI<br>
				Jl. Inspeksi Tarum Barat, <br>Pekopen Lambang Jaya <br> Tambun, Bekasi 17510, Indonesia. <br>
				Phone: 62(21)4605925 
				Fax: 62(21)4605924</TD>
				</table>
                 </div>
        <br>
		<hr>
<!--<h3>Sold To</h3>
<h5><?php echo $record2['alamat'] ?></h5>
<h5>Kp.Legon Kel. Jatimulya Kec. Tambun Selatan. Kab. Bekasi</h5>-->
<p> Tanggal Cetak <?php echo date('Y-m-d'); ?></p>
<h3 align="center">TAG MATERIAL</h3> 

<table border="1px" cellspacing="2" cellpadding="1" width="100%" >
     
         <?php 
		foreach ($record->result() as $d) 
		{ 
		echo "
     	<tr>
    	<th style='text-align:left'>No Part</th>
        <td style='text-align:Left'>$d->no_part</td>          
		</tr>
		<tr>
		<th style='text-align:left'>Nama Part</th>
		<td style='text-align:left'>$d->nama_part</td>
		</tr>
		<tr>
		<th style='text-align:left'>Jumlah</th>  
		<td style='text-align:left'>$d->jumlah</td> 
		</tr>
		<tr>
		<th style='text-align:left'>Keputusan</th>  
		<td style='text-align:left'>$d->keputusan</td> 
		</tr>
		<tr>
		<th style='text-align:left'>Supplier</th>  
		<td style='text-align:left'>$d->supplier</td> 
		</tr>";
		}     	
     ?>
</table>    
<table>
	<tr height="200">
		<td align="center"> Dicetak Oleh </td>
	</tr>
	<tr>
		<td align="center"> Warehouse Leader</td>
	</tr>
	</table>
</div>
</div>
</div>