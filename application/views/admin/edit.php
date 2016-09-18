<html> 
    <head> 
    <title>Edit Buku</title> 
         <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    </head> 
    <body> 
      
      <?php $this->load->view('template/nav'); ?>  
      
        <fieldset> 
            <center><legend><h3>Update Buku</h3></legend> </center>
           <div class="col-md-6 col-md-offset-3">
             <?php echo form_open_multipart('admin/c_admin/proses_edit');?>
                <?php foreach($daftar->result() as $a):?>

                    <input type="hidden"  name="id" value="<?php echo($a->number);?>"/> <br>
                    <input type="text" required class="form-control" name="namabuku" value="<?php echo $a->nama_buku;?>"/><br>
                
                    <textarea rows="9" class="form-control ckeditor" name="detailbuku"><?php echo $a->isi_buku;?></textarea><br>
                  
                    <input type="submit" name="simapn" class="btn btn-success btn-sm" value="Update" class="submitButton"> 
                   
                <?php endforeach; ?> 
            </form> 
           </div>
        </fieldset> 
        <center><b><h5>Copyright &copy; 2015 juragancoding.com</h5></b></center>
          
           
           <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    </body> 
</html> 