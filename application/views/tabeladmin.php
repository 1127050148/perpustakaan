<br>

<div class="container">


	
	
</div><?php echo $this->session->flashdata('pesan') ?>
	<div class="col-md-12">
			<table class ="table table-bordered ">

			<tr>
				
				<th >Nama Buku</th>
				<th >Sinopsis</th>
				<th id="aksi" >Aksi</th>
			</tr>
			<?php foreach($daftar as $c){?>
			<tr>
				<td ><?php echo $c['nama_buku']; ?></td>
				<td ><?php echo $c['isi_buku']; ?></td>
				<?php  ?>
				<td><a class="btn btn-primary btn-xs" href="<?php echo base_url ('admin/c_admin/edit/'.$c['number'])?>">Edit</a> || 
				<a class="btn btn-danger btn-xs" href="<?php echo base_url ('admin/c_admin/hapus/'.$c['number'])?>">Hapus</a></td>

			</tr>	
			<?php }?>
			</table>
		</div>
	



	
</div>

<center style="color:white;"> Copright 2015 &copy Aditia_Rahmatullah. </center>