<html> 
    <head> 
    <title>Baca Buku</title> 
         <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
         <script type="text/javascript">
tinyMCE.init({
         // General options
         mode : "textareas",
         theme : "modern",
});
</script>
    </head> 
    <body> 
    <?php $this->load->view('template/nav'); ?>
        
        <a href="<?php echo base_url(); ?>member/c_member"> <button class="btn btn-default"> Kembali </button></a>

   <div class="row">
        <div class="col-sm-8 ">
        <div class="panel panel-default">
            <div class="panel-body">
                 <?php foreach($list->result() as $a):?>
                    <center><h2><?php echo $a->nama_buku; ?></h2></center>
                    <div class="col-md-10 col-md-offset-1">
                      <?php echo $a->isi_buku; ?>
                    </div>
                 <?php endforeach; ?> 
            </div>
        </div>
      </div>

       <div class="col-sm-4 ">
        <div class="panel panel-default">
            <div class="panel-body">
                 <button class="btn btn-danger"> Download PDF </button>
                 <button class="btn btn-default"> Share </button>
            </div>
        </div>
      </div>
   </div>
           <center><b><h5>Copyright &copy; 2015 juragancoding.com</h5></b></center>
                 <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    </body> 
</html> 