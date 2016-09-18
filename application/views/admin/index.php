<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Admin</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <style type="text/css">

   .tambah{
   	border-radius: 0px;

   }
   .ok{
   	color: green;
   }

    </style>

</head>
<body>


<?php echo $this->load->view('template/nav'); ?> <!-- Load navbar -->



	
	<!-- Button trigger modal -->
<button type="button" class="btn btn-success tambah pull-left" data-toggle="modal" data-target="#myModal">
  Tambah Data <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
	
<br>
<br>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Masukan Data</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
		
		<?php echo form_open_multipart('admin/c_admin/do_buku');?>
			<input type="text" required  name="namabuku" class="form-control" placeholder="Nama">
			<br>
			<textarea class="form-control" required name="detailbuku" cols="100" placeholder="Detail" rows="6"></textarea>
			<br>
			<input type="submit" name="btnsimpan" class="btn btn-primary btn-sm" value="Simpan Data">
		</form>
			
		</div>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>

	
	<br>
	<?php echo $this->session->flashdata('pesan') ?>
	
	<?php echo $this->session->flashdata('berhasil'); ?>
	 <!-- Pemberitahuan Pesan -->
	<?php echo $this->session->flashdata('update'); ?>
	<div class="col-md-12">
	
	<br />
			<div class="row">
				<div class="col-md-8">
				
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
				<div class="col-md-4">
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">Jumlah Data</h3>
					  </div>
					  <div class="panel-body">
					   <?php 
						$this->db->from('buku');
						echo $this->db->count_all_results();
						?> 
							Data Terindeks  <span class="glyphicon glyphicon-ok ok" aria-hidden="true"></span>
							<br />
						<p>
						  	<a href="http://www.juragancoding.com/" target="_blank"> Juragancoding.com </a> <br />
						  	<a href="https://www.facebook.com/chandradotnet" target="_blank"> Facebook Saya </a> <br />
						  	<span> 085659305086 </span>
						 </p>
					  </div>
					  
					</div>
				</div>
			</div>
		</div>
	
<center><b><h5>Copyright &copy; 2015 juragancoding.com</h5></b></center>


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ckeditor.js"></script>
</body>
</html>
