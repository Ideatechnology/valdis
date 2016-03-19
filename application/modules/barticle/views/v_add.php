
<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">


<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Add Artikel</h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('barticle/submit',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
									
									
									
                                  
									
                                    <div class="control-group">
											<label for="textfield" class="control-label">Date</label>
											<div class="controls">
												<input type="text" name="create_time" id="create_time" class="input-medium datepick" data-date-format="yyyy-mm-dd" data-rule-required="true">
												
											</div>
										</div>
                                    
                                    <div class="control-group">
											<label for="textfield" class="control-label">Title (Bahasa)</label>
											<div class="controls">
												<input type="text" name="news_name" id="news_name" class="input-xxlarge" data-rule-required="true">
												
											</div>
										</div>
										
										
										 <div class="control-group">
											<label for="textfield" class="control-label">Title (English)</label>
											<div class="controls">
												<input type="text" name="news_name_eng" id="news_name_eng" class="input-xxlarge" data-rule-required="true">
												
											</div>
										</div>
										
										<div class="control-group">
											<label for="textfield" class="control-label">Image Library</label>
											<div class="controls">
												<button class="btn btn-info" onclick="javascript:void window.open('<?php echo site_url();?>image_library','1431534138220','width=1024,height=600,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;" >
												<i class="icon-map-marker"> Cari Gambar</i>
												</button>
												
											</div>
										</div>
									
												 <div class="control-group">
											<label for="textfield" class="control-label">Description (Bahasa)</label>
												
												<div class="controls">
											
                                            
                                            
									
										<textarea name="news_desc" class='ckeditor span12' rows="10"></textarea>
								
							</div>
									
										
									</div>
									
									<div class="control-group">
											<label for="textfield" class="control-label">Description (English)</label>
												
												<div class="controls">
											
                                            
                                            
									
										<textarea name="news_desc_eng" class='ckeditor span12' rows="10"></textarea>
								
							</div>
									
										
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
										<label class="control-label" for="textfield">File Photo</label>
										
										<div class="controls">
											<input type="file" name="userfile"  /> (JPG,JPEG,PNG Max Size : 1 Mb)
										</div>
									</div>
                                    	
									
                                    
									<hr>
                                    
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>barticle/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>



</div>

							
</div>