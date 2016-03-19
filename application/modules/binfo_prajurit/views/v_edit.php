
<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">


<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Edit Info Prajurit</h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('binfo_prajurit/submitedit',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
                                    
                                    
                                    <?php #echo $id_news; ?>
                                    
                                    <input type="hidden" name="id_news" id="id_news" class="input-large" data-rule-required="true" value="<?php echo $id_news; ?>"> 
                                    
                                     <div class="control-group">
											<label for="textfield" class="control-label">Date</label>
											<div class="controls">
												<input type="text" name="create_time" id="create_time" class="input-medium datepick" data-date-format="yyyy-mm-dd" data-rule-required="true" value="<?php echo $create_time; ?>">
												
											</div>
										</div>
									
									<div class="control-group">
											
											<label for="textfield" class="control-label">Title (Bahasa)</label>
											<div class="controls">
												
                                                <input type="text" name="news_name" id="news_name" class="input-xxlarge" data-rule-required="true" value="<?php echo $news_name; ?>"> 
												
											</div>
										</div>
										
										<div class="control-group">
											
											<label for="textfield" class="control-label">Title (English)</label>
											<div class="controls">
												
                                                <input type="text" name="news_name_eng" id="news_name_eng" class="input-xxlarge" data-rule-required="true" value="<?php echo $news_name_eng; ?>"> 
												
											</div>
										</div>
                                        
										<div class="control-group">
											
											<label for="textfield" class="control-label">Description (Bahasa)</label>
									
												<div class="controls">
											
                                            
                                            
									
										<textarea name="news_desc" class='ckeditor span12' rows="7"><?php echo $news_desc; ?></textarea>
								
								</div>
									
										
									</div>
									
									
									
									<div class="control-group">
											
											<label for="textfield" class="control-label">Description (English)</label>
									
												<div class="controls">
											
                                            
                                            
									
										<textarea name="news_desc_eng" class='ckeditor span12' rows="7"><?php echo $news_desc_eng; ?></textarea>
								
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
										<label class="control-label" for="textfield">File Photo</label>
										
										<div class="controls">
											<input type="file" name="userfile"  /> (JPG,JPEG,PNG Max Size : 1 Mb)
											<img src="<?=base_url()?>uploads/info_prajurit/<?php echo $the; ?>" alt=""> 
										</div>
									</div>
									
                                    
									<hr>
                                    
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>binfo_prajurit/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>



</div>

							
</div>