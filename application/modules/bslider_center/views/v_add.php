
<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">


<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Add Center Image Slide Show</h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('bslider_center/submit',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
									
									
									
                                  
									
                                    
                                    
                                    <div class="control-group">
											<label for="textfield" class="control-label">Title</label>
											<div class="controls">
												<input type="text" name="slider_name" id="slider_name" class="input-xxlarge" data-rule-required="true">
												<input type="hidden" name="sort_number" id="sort_number" class="input-xxlarge" data-rule-required="true" data-rule-number="true">
											</div>
										</div>
										
								<!--		<div class="control-group">
											<label for="textfield" class="control-label">Sort Number</label>
											<div class="controls">
												<input type="text" name="sort_number" id="sort_number" class="input-xxlarge" data-rule-required="true" data-rule-number="true">
												
											</div>
										</div>
									
											<div class="controls">
											
                                            
                                            
									
										<textarea name="slider_desc" class='ckeditor span12' rows="10"></textarea>
								
							
									
										
									</div>-->
                                    
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
										<label class="control-label" for="textfield">File Photo</label>
										
										<div class="controls">
											<input type="file" name="userfile"  data-rule-required="true"/>
											(File Type Allowed : Jpg,Jpeg,Png / Max.File Size 800kb / Width=770px (27,16 cm) Height=469px (16,55 cm)
										</div>
									</div>
                                    	
									
                                    
									<hr>
                                    
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>bslider_center/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>



</div>

							
</div>