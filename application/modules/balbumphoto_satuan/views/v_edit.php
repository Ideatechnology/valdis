
<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">


<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Edit Gallery Photo</h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('balbumphoto_satuan/submitedit',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
                                    
                                    
                                    <?php #echo $id_albumphoto_category; ?>
                                    
                                    <input type="hidden" name="id_albumphoto" id="id_albumphoto" class="input-large" data-rule-required="true" value="<?php echo $id_albumphoto; ?>"> 
                                    
                                     
									<div class="control-group">
											<label for="textfield" class="control-label">Date</label>
											<div class="controls">
												<input type="text" name="create_time" id="create_time" class="input-medium datepick" data-date-format="yyyy-mm-dd" data-rule-required="true" value="<?php echo $create_time; ?>">
												
											</div>
										</div>
									
									 <div class="control-group">
											<label for="textfield" class="control-label">Album Name (Bahasa)</label>
											<div class="controls">
												<input type="text" name="albumphoto_name" id="albumphoto_name" class="input-xxlarge" data-rule-required="true" value="<?php echo $albumphoto_name; ?>">
												
											</div>
										</div>
										
										<div class="control-group">
											<label for="textfield" class="control-label">Album Name (English)</label>
											<div class="controls">
												<input type="text" name="albumphoto_name_eng" id="albumphoto_name_eng" class="input-xxlarge" data-rule-required="true" value="<?php echo $albumphoto_name_eng; ?>">
												
											</div>
										</div>
										
										
										<div class="control-group">
											<label for="textfield" class="control-label">Description Name (Bahasa)</label>
											<div class="controls">
												<textarea name="albumphoto_desc" class='ckeditor span12' rows="7"><?php echo $albumphoto_desc; ?></textarea>
												
											</div>
										</div>
										
										<div class="control-group">
											<label for="textfield" class="control-label">Description Name (English)</label>
											<div class="controls">
												<textarea name="albumphoto_desc_eng" class='ckeditor span12' rows="7"><?php echo $albumphoto_desc_eng; ?></textarea>
												
											</div>
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