<div class="row">

<div class="col-lg-12" >
	
				<?php				
								if ($this->session->userdata('sesi_bahasa')=="ind") 
								{
							?><img src="<?php echo base_url()?>assets_frontend_revisi/classic_pejabat/header_pejabat.png" class="img-responsive">  <?php } 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{
						?><img src="<?php echo base_url()?>assets_frontend_revisi/classic_pejabat/header_pejabat.png" class="img-responsive"> <?php
								}
								else 
								{
									?><img src="<?php echo base_url()?>assets_frontend_revisi/classic_pejabat/header_pejabat.png" class="img-responsive"> <?php
									
								}
								?>
</div>
</div>

<div class="row">
<div class="col-lg-12" >&nbsp;</div>
</div>


<style> #galleria{height:800px} </style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="<?php echo base_url()?>assets_frontend_revisi/classic_pejabat/galleria-1.4.2.min.js"></script>


<div class="row">
<div class="col-lg-12" >


<div id="galleria" >
            
			<?php foreach($query as $row) {	
			
			$linksArray=explode('.',$row['file_foto']);
	$data= array_filter($linksArray);
	if(!empty($data)){$thumb = $data[0]."_thumb.".$data[1];}else{$thumb ='';}
			?>
			
			<a href="<?php echo base_url();?>uploads/fotopejabat/<?php echo  $row['file_foto']; ?>">
                  <img src="<?php echo base_url();?>uploads/fotopejabat/<?php echo  $thumb; ?>",
                    data-title="<?php echo  $row['nama_pejabat']; ?><hr style='border:solid 1px #CC0000'>"
                    data-description="<?php echo  $row['jabatan']; ?>"
                >
				
            </a>
			<?php } ?>
			
		
        </div>
		
		
		
		<script>

    // Load the classic theme
    Galleria.loadTheme('<?php echo base_url()?>assets_frontend_revisi/classic_pejabat/galleria.classic.min.js');

    // Initialize Galleria
    //Galleria.run('#galleria');
	Galleria.run('#galleria',{autoplay:2000});

    </script>


</div>
</div>


     
		
<div class="row">
<div class="col-lg-12" >&nbsp;</div>
</div>		
		
		
		
		
		
    
	