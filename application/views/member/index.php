<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $username; ?> | Member</title>
	<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/Icon/1.ico">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
     <style type="text/css">
     .baca{
     	
     }
     </style>
</head>
<body>
<?php echo $this->load->view('template/nav'); ?>
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
                <th >Nama Buku</th>
                <th width="10" style="color:white;">Pilih</th>
            </tr>
            <?php $no=1; foreach($list as $c){?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $c['nama_buku'];?></td>
                <td> <width="200" ><a href="<?php echo base_url(); ?>member/c_member/baca/<?php echo $c['number'] ?>"> <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></a></td>
            </tr>   
            <?php }?>
            </table>
        </div>
    </div>



       <center><b><h5>Copyright &copy; 2015 juragancoding.com</h5></b></center>
</div>

      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>
</html>
