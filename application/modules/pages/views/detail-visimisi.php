<div class="row">

<div class="col-lg-12" >
	
				<?php				
								if ($this->session->userdata('sesi_bahasa')=="ind") 
								{
							?><img src="<?php echo base_url();?>assets_frontend_revisi/label/label_visi.png" class="img-responsive">  <?php } 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{
						?><img src="<?php echo base_url();?>assets_frontend_revisi/label/label_visi_eng.png" class="img-responsive"> <?php
								}
								else 
								{
									?><img src="<?php echo base_url();?>assets_frontend_revisi/label/label_visi.png" class="img-responsive"> <?php
									
								}
								?>
</div>
</div>


<div class="row">

<div class="col-lg-12" >
	
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
<div style="background-color:#052905; color:#FFFFFF; padding:20px;">
	
				<span style="text-align:justify; color:#a7cf48; font-size:16px;">
                            	<?php 
									$sql = "select * from pages where id_pages=2 order by  id_pages asc";
									$visimisi = $this->db->query($sql)->row();
								
?>										
											<?php				
								if ($this->session->userdata('sesi_bahasa')=="ind") 
								{echo $visimisi->pages_desc;} 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{echo $visimisi->pages_desc_eng;}
								else 
								{echo $visimisi->pages_desc;}
								?>
			</span>
</div>
</div>
</div>


  <div class="row">

<div class="col-lg-12">
&nbsp;
</div>
</div>