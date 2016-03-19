<div class="row">

<div class="col-lg-12" >
	
				<?php				
								if ($this->session->userdata('sesi_bahasa')=="ind") 
								{
							?><img src="<?php echo base_url();?>assets_frontend_revisi/label/label_selamat_datang.png" class="img-responsive">  <?php } 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{
						?><img src="<?php echo base_url();?>assets_frontend_revisi/label/label_selamat_datang_eng.png" class="img-responsive"> <?php
								}
								else 
								{
									?><img src="<?php echo base_url();?>assets_frontend_revisi/label/label_selamat_datang.png" class="img-responsive"> <?php
									
								}
								?>
</div>
</div>


<div class="row">

<div class="col-lg-12">
<div style="background-color:#052905; color:#FFFFFF; padding:20px;">
	
	  <?php 
									$sql = "select * from pages where id_pages=1 order by  id_pages asc";
									$selamatdatang = $this->db->query($sql)->row();
								
?>										
                            
                               <img src="<?php echo base_url()?>uploads/pages/<?php echo $selamatdatang->file_foto; ?>" alt="" hspace="20" vspace="0" align="left" style="width:500px;" class="img-responsive">
                            <span style="text-align:justify; color:#a7cf48; font-size:16px;">
							
                            	
											<?php				
								if ($this->session->userdata('sesi_bahasa')=="ind") 
								{echo $selamatdatang->pages_desc;} 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{echo $selamatdatang->pages_desc_eng;}
								else 
								{echo $selamatdatang->pages_desc;}
								?>
                                
                                <span>
	
	</div>
</div>
</div>



<div class="row">

<div class="col-lg-12">
&nbsp;
</div>
</div>
