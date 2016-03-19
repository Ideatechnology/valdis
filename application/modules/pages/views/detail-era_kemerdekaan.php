<div class="row">

<div class="col-lg-12" >
	
				<?php				
								if ($this->session->userdata('sesi_bahasa')=="ind") 
								{
							?><img src="<?php echo base_url();?>assets_frontend_revisi/label/label_era.png" class="img-responsive">  <?php } 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{
						?><img src="<?php echo base_url();?>assets_frontend_revisi/label/label_era_eng.png" class="img-responsive"> <?php
								}
								else 
								{
									?><img src="<?php echo base_url();?>assets_frontend_revisi/label/label_era.png" class="img-responsive"> <?php
									
								}
								?>
</div>
</div>



<div class="row">
<div class="col-lg-12">

<img src="<?php echo base_url()?>assets_frontend_revisi/label/Visi%20Misi.jpg" class="img-responsive"> 
</div>
</div>


<div class="row">
<div class="col-lg-12">

&nbsp;

</div>
</div>


<div class="row">
<div class="col-lg-12">
<div style="background-color:#052905; color:#FFFFFF; padding:20px; color:#a5ce43;">

				<p>
                            	<?php 
								   $sql = "select * from pages where publish='Y' and id_pages='".$id."'";   
								   $query = $this->db->query($sql)->row_array();
								   					if ($this->session->userdata('sesi_bahasa')=="ind") 
								{echo $query['pages_desc'];} 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{echo $query['pages_desc_eng'];}
								else 
								{echo $query['pages_desc'];}
			
								?> 
								
                                <br /> 
                                  <img src="<?php echo base_url()?>assets_frontend_revisi/label/list2.png" class="img-responsive"></center>
                                <br />                       
                                  </p>                   
                
</div>
</div>
</div>


<div class="row">
<div class="col-lg-12">

&nbsp;

</div>
</div>


  