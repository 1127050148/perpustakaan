<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contoh Web Juragan Coding</title>
	<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/Icon/1.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	
 
</head>
<body background="<?php echo base_url(); ?>assets/images/backblur.jpg">


		<div class="container">
			<div class="col-md-12">
<br>
				
				<center><h2>Selamat Datang Di Contoh Aplikasi Web Juragan</h2></center>
				<center><h5>Juragancoding.com</h5></center>


			</div>
			<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
					  	<div class="panel-body">
							   <?php echo form_open("auth/cek_login"); ?>
								<p align="center"> <img  class="img-thumbnail img-circle" width="125" height="125" src="<?php echo base_url();?>assets/images/tum.png"> <br>
								<p>
								<input placeholder="Nama Akun" required  class="form-control" type="text" name="username">
								</p>
								<p> 
								<input placeholder="Sandi" required class="form-control" type="password" name="password"></p>
								
						
								<p><button class="btn btn-primary " type="submit">Login</button>			</p>
								



								<?php echo form_close(); ?>
								<?php echo $this->session->flashdata('gagal') ?>

					 	 </div>
					</div>

			</div>
		</div>
		<center style="color:white;"><b><h5>Copyright &copy; 2015 juragancoding.com</h5></b></center>
		
</body>
</html>
