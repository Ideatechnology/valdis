
<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">


<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Add Users</h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('busers/submit',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
									
									
									
                                  
							
                                    
                                      <div class="control-group">
											<label for="textfield" class="control-label">Username</label>
											<div class="controls">
												<input type="text" name="sys_user_name" id="sys_user_name" class="input-xxlarge" data-rule-required="true">
												
											</div>
										</div>
										
										
										 <div class="control-group">
											<label for="textfield" class="control-label">Password</label>
											<div class="controls">
												<input type="password" name="sys_password" id="sys_password" class="input-xxlarge" data-rule-required="true">
												
											</div>
										</div>
										
										
										<div class="control-group">
											<label for="textfield" class="control-label">Nama</label>
											<div class="controls">
												<input type="text" name="sys_name" id="sys_name" class="input-xxlarge" data-rule-required="true">
												
											</div>
										</div>
										
										<div class="control-group">
											<label for="textfield" class="control-label">No.HP</label>
											<div class="controls">
												<input type="text" name="sys_hp" id="sys_hp" class="input-xxlarge" data-rule-required="true">
												
											</div>
										</div>
									
									
										
                                    
                                    		<div class="control-group">
										<label class="control-label" for="textfield">Role</label>                                        
                                        <div class="controls">
                                        <select name="sys_type">
                                          <option value="1">Administrator</option>
                                          <option value="2">Operator</option>
										  <option value="3">Translator</option>
                                        </select>
										</div>
									</div>
                                    
                                    
                                    
                         <!--            <div class="control-group">
										<label class="control-label" for="textfield">File Photo</label>
										
										<div class="controls">
											<input type="file" name="userfile"  /> (JPG,JPEG,PNG Max Size : 1 Mb)
										</div>
									</div>
                                    	
									-->
                                    
									<hr>
                                    
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>busers/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>



</div>

							
</div>