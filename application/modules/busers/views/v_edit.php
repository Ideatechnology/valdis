
<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">


<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Edit Users</h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('busers/submitedit',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
                                    
                                    
                                    <?php #echo $sys_user_name; ?>
                                    
                                    <input type="hidden" name="sys_user_name" id="sys_user_name" class="input-large" data-rule-required="true" value="<?php echo $sys_user_name; ?>"> 
                                    
                                    
									<div class="control-group">
											
											<label for="textfield" class="control-label">Username</label>
											<div class="controls">
												
                                                <?php echo $sys_user_name; ?>
												
											</div>
										</div>
										
										<div class="control-group">
											
											<label for="textfield" class="control-label">Password</label>
											<div class="controls">
												
                                                <?php echo $sys_password; ?>
												
											</div>
										</div>
									
									
									<div class="control-group">
											
											<label for="textfield" class="control-label">Nama</label>
											<div class="controls">
												
                                                <input type="text" name="sys_name" id="sys_name" class="input-xxlarge" data-rule-required="true" value="<?php echo $sys_name; ?>"> 
												
											</div>
										</div>
										
										<div class="control-group">
											
											<label for="textfield" class="control-label">No.HP</label>
											<div class="controls">
												
                                                <input type="text" name="sys_hp" id="sys_hp" class="input-xxlarge" data-rule-required="true" value="<?php echo $sys_hp; ?>"> 
												
											</div>
										</div>
                                        
									
                                    
                                    		<div class="control-group">
										<label class="control-label" for="textfield">Role</label>
										
										<div class="controls">
                                        <select name="sys_type">
                                          <option value="1" <?php if ($sys_type=="1") { echo "selected";}?>>Administrator</option>
                                          <option value="2"  <?php if ($sys_type=="2") { echo "selected";}?>>Operator</option>
										  <option value="3"  <?php if ($sys_type=="2") { echo "selected";}?>>Translator</option>
                                        </select>
										</div>
									</div>
                          
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>busers/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>



</div>

							
</div>