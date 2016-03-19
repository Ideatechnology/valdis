
<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">


<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Edit Side Banner</h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('bbanner_side/submitedit',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
                                    
                                    
                                    <?php #echo $id_banner; ?>
                                    
                                    <input type="hidden" name="id_banner" id="id_banner" class="input-large" data-rule-required="true" value="<?php echo $id_banner; ?>"> 
                                    
                                    
									
									<div class="control-group">
											
											<label for="textfield" class="control-label">Title</label>
											<div class="controls">
												
                                                <input type="text" name="banner_name" id="banner_name" class="input-xxlarge" data-rule-required="true" value="<?php echo $banner_name; ?>"> 
												
											</div>
										</div>
										
										<div class="control-group">
											
											<label for="textfield" class="control-label">Link</label>
											<div class="controls">
												
                                                <input type="text" name="link" id="link" class="input-xxlarge" data-rule-required="true" value="<?php echo $link; ?>"> 
												
											</div>
										</div>
                                        
									
											<!--	<div class="controls">
											
                                            
                                            
									
										<textarea name="banner_desc" class='ckeditor span12' rows="7"><?php echo $banner_desc; ?></textarea>
								
							
									
										
									</div>-->
                                    
                                    		<div class="control-group">
										<label class="control-label" for="textfield">Publish</label>
										
										<div class="controls">
                                        <select name="publish">
                                          <option value="Y" <?php if ($publish=="Y") { echo "selected";}?>>Yes</option>
                                          <option value="N"  <?php if ($publish=="N") { echo "selected";}?>>No</option>
                                        </select>
										</div>
									</div>
                                    
                                    <?php 
									$linksArray=explode('.', $file_foto);
 				$data= array_filter($linksArray);
				if(!empty($data)){
				  $the = $data[0]."_thumb.".$data[1];	
				}else{
				   $the ='';	
				}
									?>
									
									
                                    	<div class="control-group">
										<label class="control-label" for="textfield">Image File</label>
										
										<div class="controls">
											<input type="file" name="userfile"  />(File Type Allowed : Jpg,Jpeg,Png / Max.File Size 500kb / Width=305px (10 cm) Height=64px (2 cm)
											<img src="<?=base_url()?>uploads/banner_side/<?php echo $the; ?>" alt="">
										</div>
									</div>
									
                                    
									<hr>
                                    
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>bbanner_side/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>



</div>

							
</div>