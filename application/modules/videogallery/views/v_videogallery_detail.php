
        <!-- wrapper -->

        <div class="wrapper"> 
        
        
        
        	
            
            
       <div class = "row">
        <img src="<?php echo base_url()?>assets_frontend/classic/header_galeri.png" alt=""> 
        </div>     

     <div class = "row" style="background-color:#042503;  padding:10px;">
	 
	 <?php 
		$sqlutama = "select * from albumphoto where id_albumphoto='".$IDX."' ";
		$rowutama = $this->db->query($sqlutama)->row_array();
		
		$albumphoto_name = $rowutama['albumphoto_name'];
		$albumphoto_desc = $rowutama['albumphoto_desc'];
		$id_albumphoto = $rowutama['id_albumphoto'];
		?>
		

			<style>

            
            #galleria{height:600px}

        </style>
                            
							<!-- load jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

        <!-- load Galleria -->
        <script src="<?php echo base_url(); ?>assets_frontend/classic/galleria-1.4.2.min.js"></script>
							
		<div id="galleria">
		
		
		<?php 
		
		$sqlutamadetail = "select  * from albumphoto_gallery where id_albumphoto= '".$id_albumphoto."' order by create_time desc";
		$utamadetail= $this->db->query($sqlutamadetail);
		foreach($utamadetail->result_array() as $rowutamadetail){

	$linksArray1=explode('.',$rowutamadetail['file_foto']);
	$data1= array_filter($linksArray1);
	if(!empty($data1)){$thumb1 = $data1[0]."_thumb.".$data1[1];}else{$thumb1 ='';}
		
		?>
		
            <a href="<?php echo base_url();?>uploads/albumphoto/<?php echo $rowutamadetail['file_foto'];?>">
                <img 
                    src="<?php echo base_url();?>uploads/albumphoto/<?php echo $thumb1;?>",
                    data-big=""
                    data-title="<?php echo $rowutamadetail['albumphoto_gallery_name'];?>"
                    data-description="<?php echo $rowutamadetail['albumphoto_gallery_desc'];?>"
                >
            </a>
		<?php } ?>
			
          
            
           
        </div>
        
        <div style="padding:20px;">
		
		
        <span style="color:#9bcf3c;"><strong><?php echo $albumphoto_name; ?></strong></span> <br>
		<p style="color:#d8ecaf;"><?php echo $albumphoto_desc; ?></p>
        </div>
		
		
		
		
		 <script>

    // Load the classic theme
    Galleria.loadTheme('<?php echo base_url(); ?>assets_frontend/classic/galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>      
     
     </div>               
                 
      <br /> 
				
	<div class = "row" style="background-color:#CCCCCC; padding:10px;">
      <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('photogallery/index'); ?>" method="post" name="formcari">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Album.." name="cari_global" value="<?php echo $this->session->userdata('s_cari_global');?>">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
    </div>
    
    			
	<div class = "row" style="background-color:#042503; opacity:0.7; padding:10px;">
    
  
    
	<?php foreach($query as $row) {	?>
	<?php 
	
	$fotonya=$row['fotonya'];
	if ($fotonya=="") { $fotox="nofoto.jpg"; } else { $fotox=$fotonya;}
	
	$linksArray=explode('.', $fotox);
	$data= array_filter($linksArray);
	if(!empty($data)){$thumb = $data[0]."_thumb.".$data[1];}else{$thumb ='';}
	
	?>
   
   <div class = "col-sm-6 col-md-3" style="padding:10px;">
     <img src = "<?php echo base_url();?>uploads/albumphoto/<?php echo $thumb; ?>" alt = "<?php echo  $row['albumphoto_name']; ?>"><br />
     <a href="<?php echo site_url();?>photogallery/index_detail/0/<?php echo  $row['id_albumphoto']; ?>" style="color:#9bcf3c; font-weight:bold;"><?php echo  $row['albumphoto_name']; ?></a><br />
     <span style="color:#d8ecaf;"><small><?php echo  $row['create_time']; ?></small></span>
   </div>
   
   <?php } 
   $paging=(!empty($pagermessage) ? $pagermessage : '');
   
   ?>
   
    <div style="padding:20px; text-align:right;">
    <?php 
	echo $paging."&nbsp;&nbsp;";
   echo $this->pagination->create_links();
	?>
    </div>
   

							
							
							
							
                      

            </div>
            <!-- widget -->
        
        </div>
        <!-- wrapper -->

		
		
		
		
		
		
		
    