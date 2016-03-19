
<div class="row-fluid">
<div class="span12">
<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Upload Images Gallery Photo : <?php echo $albumphoto_name; ?></h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('balbumphoto_satuan/submiteditimage',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
									
								
									
									
                                     <input type="hidden" name="id_albumphoto" id="id_albumphoto" class="input-large" data-rule-required="true" value="<?php echo $id_albumphoto; ?>"> 
									 <input type="hidden" name="albumphoto_gallery_name" id="albumphoto_gallery_name" class="input-large" data-rule-required="true" value="<?php echo $albumphoto_name; ?>"> 
									  <input type="hidden" name="create_time" id="create_time" class="input-large" data-rule-required="true" value="<?php echo $create_time; ?>"> 
									 
                                    	<div class="control-group">
										<label class="control-label" for="textfield">Publish</label>
										
										<div class="controls">
                                        <select name="publish">
                                          <option value="Y" >Yes</option>
                                          <option value="N" >No</option>
                                        </select>
										</div></div>
                                        
                                            
										
										
								
								 
                                   

								   <div id="screen4">
								   <div class="control-group">
										<label class="control-label" for="textfield">File Photo</label>
										
										<div class="controls">
											<input type="file" name="userfile"  data-rule-required="true"/>
											Maximal : 1024 x 768 pixels. Under 1 Mb (LANDSCAPE)
										</div>
									</div>
                                    </div>
                                    	
									
                                    
									<hr>
                                    
									
									
									
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>balbumphoto_satuan/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>


</div>
</div>


<div class="row-fluid">








<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3>Details <?php echo $albumphoto_name; ?></h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content ">
 
 
 
  
  <ul class="gallery">
  
  <?php 
									
									$sql = "select  * from albumphoto_gallery where id_albumphoto='".$this->uri->segment(3)."' order by id_albumphoto_gallery";
									$query = $this->db->query($sql);
									
									foreach($query->result_array() as $row){ 
									
									$linksArray=explode('.', $row['file_foto']);
 				$data= array_filter($linksArray);
				if(!empty($data)){
				  $the = $data[0]."_thumb.".$data[1];	
				}else{
				   $the ='';	
				}
									
									
									?>
										<li>
											
											<?php if ($row['type']=="0") { ?>
											<a href="#">
												<img alt="" src="<?=base_url()?>uploads/albumphoto/<?php echo $the; ?>">
											</a>
											<?php } else { ?>
											<img alt="" src="<?php echo $row['file_foto_youtube']; ?>">
											<?php } ?>
											
											<div class="extras">
												<div class="extras-inner">
													
													<?php if ($row['type']=="0") { ?>
													<a rel="group-1" class="colorbox-image cboxElement" href="<?=base_url()?>uploads/albumphoto/<?php echo $the; ?>">
													<i class="icon-search"></i>
													</a>
													<?php } else { ?>
														<a rel="group-1" class="colorbox-image cboxElement" href="<?php echo $row['file_foto_youtube']; ?>">
													<i class="icon-search"></i>
													</a>
													<?php } ?>
													
													<!--<a href="#"><i class="icon-pencil"></i>
													</a>
													
													<a class="del-gallery-pic" href="#"><i class="icon-trash"></i>
													</a>
													-->
													
													
													<a title="" rel="tooltip" class="btn btn-mini btn-danger" href="<?php echo site_url('balbumphoto_satuan/submithapusimage/'.$row['id_albumphoto_gallery'].'/'.$row['id_albumphoto']);?>" onclick="return confirm('Anda Yakin ingin Menghapus?'); "><i class="icon-delete"></i> Delete</a>                            
                            &nbsp;
                            
                            <?php if ($row['publish']=="Y") { ?>
                                          <a title="" rel="tooltip" class="btn btn-mini btn-success" href="<?php echo site_url('balbumphoto_satuan/submitpublishimage/'.$row['id_albumphoto_gallery'].'/'.$row['id_albumphoto'].'/'.'N');?>" onclick="return confirm('Not Publish?'); "><i class="icon-delete"></i>Unpublish</a> <?php } else { ?>
                   
                   <a title="" rel="tooltip" class="btn btn-mini btn-success" href="<?php echo site_url('balbumphoto_satuan/submitpublishimage/'.$row['id_albumphoto_gallery'].'/'.$row['id_albumphoto'].'/'.'Y');?>" onclick="return confirm('Publish?'); "><i class="icon-delete"></i>Publish</a> 
                   
                   <?php } ?>   
													
													
												</div>
											</div>
										</li>
										
										 <?php } ?>      
										
									</ul>
  
					

</div>

</div>




							
</div>

