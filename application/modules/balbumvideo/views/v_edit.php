
<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">


<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Edit Gallery Video</h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('balbumvideo/submitedit',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
                                    
                                    
                                    <?php #echo $id_albumvideo_category; ?>
                                    
                                    <input type="hidden" name="id_albumvideo" id="id_albumvideo" class="input-large" data-rule-required="true" value="<?php echo $id_albumvideo; ?>"> 
                                    
                                     
									
									
									<div class="control-group">
											<label for="textfield" class="control-label">Album Name</label>
											<div class="controls">
												
                                                <input type="text" name="albumvideo_name" id="albumvideo_name" class="input-large" data-rule-required="true" value="<?php echo $albumvideo_name; ?>"> 
												
											</div>
										</div>
                                        
									
												<div class="controls">
											
                                            
                                            
									
										<textarea name="albumvideo_desc" class='ckeditor span12' rows="7"><?php echo $albumvideo_desc; ?></textarea>
								
							
									
										
									</div>
                                    
                                    		<div class="control-group">
										<label class="control-label" for="textfield">Publish</label>
										
										<div class="controls">
                                        <select name="publish">
                                          <option value="Y" <?php if ($publish=="Y") { echo "selected";}?>>Yes</option>
                                          <option value="N"  <?php if ($publish=="N") { echo "selected";}?>>No</option>
                                        </select>
										</div>
									</div>
                                    
                                         <div class="control-group">
											<label for="textfield" class="control-label">Position Number</label>
											<div class="controls">
												
                                                <input type="text" name="sort_number" id="sort_number" class="input-large"  value="<?php echo $sort_number; ?>"> 
												
											</div>
										</div>
                                    	
									
                                    
									<hr>
                                    
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>balbumvideo/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>



</div>

							
</div>