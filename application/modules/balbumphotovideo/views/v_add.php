
<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">


<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Add Gallery Photo & Video </h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('balbumphotovideo/submit',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
									
									
									
                                    
                                    
                                    
                                    
                                    <div class="control-group">
											<label for="textfield" class="control-label">Album Name</label>
											<div class="controls">
												<input type="text" name="albumphotovideo_name" id="albumphotovideo_name" class="input-large" data-rule-required="true">
												
											</div>
										</div>
									
												<div class="controls">
											
                                            
                                            
									
										<textarea name="albumphotovideo_desc" class='ckeditor span12' rows="7"></textarea>
								
							
									
										
									</div>
                                    
                                    		<div class="control-group">
										<label class="control-label" for="textfield">Publish</label>
										
										<div class="controls">
                                        <select name="publish">
                                          <option value="Y">Yes</option>
                                          <option value="N">No</option>
                                        </select>
										</div>
									</div>
                                    
                                     <div class="control-group">
											<label for="textfield" class="control-label">Position Number</label>
											<div class="controls">
												<input type="text" name="sort_number" id="sort_number" class="input-large" >
												
											</div>
										</div>
                                    	
									
                                    
									<hr>
                                    
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>balbumphotovideo/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>



</div>

							
</div>