
<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">


<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Edit Foto Pejabat</h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('bfotopejabat/submitedit',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
                                    
                                    
                                    <?php #echo $id_fotopejabat; ?>
                                    
                                    <input type="hidden" name="id_fotopejabat" id="id_fotopejabat" class="input-large" data-rule-required="true" value="<?php echo $id_fotopejabat; ?>"> 
                                    
                                    
									
									<div class="control-group">
											
											<label for="textfield" class="control-label">No.Urut</label>
											<div class="controls">
												
                                                <input type="text" name="sort_number" id="sort_number" class="input-small" data-rule-required="true" value="<?php echo $sort_number; ?>"> 
												
											</div>
										</div>
									
									<div class="control-group">
											
											<label for="textfield" class="control-label">Nama Pejabat</label>
											<div class="controls">
												
                                                <input type="text" name="nama_pejabat" id="nama_pejabat" class="input-xxlarge" data-rule-required="true" value="<?php echo $nama_pejabat; ?>"> 
												
											</div>
										</div>
										
										<div class="control-group">
											
											<label for="textfield" class="control-label">Jabatan</label>
											<div class="controls">
												
                                                <input type="text" name="jabatan" id="jabatan" class="input-xxlarge" data-rule-required="true" value="<?php echo $jabatan; ?>"> 
												
											</div>
										</div>
                                        
									
											<!--	<div class="controls">
											
                                            
                                            
									
										<textarea name="fotopejabat_desc" class='ckeditor span12' rows="7"><?php echo $fotopejabat_desc; ?></textarea>
								
							
									
										
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
									$jabatansArray=explode('.', $file_foto);
 				$data= array_filter($jabatansArray);
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
											<img src="<?=base_url()?>uploads/fotopejabat/<?php echo $the; ?>" alt="">
										</div>
									</div>
									
                                    
									<hr>
                                    
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>bfotopejabat/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>



</div>

							
</div>