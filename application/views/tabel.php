
	<div class="container">
<div class="row">

	<div class="col-md-2">
				
				<div style="position:fiexed" class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Jumlah Buku</h3>
				  </div>
				  
				  <div class="panel-body">
				    Anda Pengunjung ke 21
				  </div>
				</div>
	</div>
	
	

	<div class="col-md-10 baca">
			<table class ="table table-bordered ">

			<tr>
				<th width="30px" style="color:white;">No</th>
				<th style="color:white;">Nama Buku</th>
				<th width="10" style="color:white;">Pilih</th>
			</tr>
			<?php $no=1; foreach($data as $c){?>
			<tr>
				<td style="color:white;"><?php echo $no++;?></td>
				<td style="color:white;"><?php echo $c['nama_buku'];?></td>
				<td style="color:white;" width="200" ><a href="<?php echo base_url(); ?>member/c_member/baca/<?php echo $c['number'] ?>">Baca Selengkapnya</a></td>
			</tr>	
			<?php }?>
			</table>
		</div>
	</div>



	
</div>

<center style="color:white;"> Copright 2015 &copy Aditia_Rahmatullah. </center>