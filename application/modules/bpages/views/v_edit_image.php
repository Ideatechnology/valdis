
<div class="row-fluid">
<div class="span12">
<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Upload Images Facilities : <?php echo $rs_name; ?></h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('brs/submiteditimage',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
									
									
									<div class="control-group">
											<label for="textfield" class="control-label">Image Name</label>
											<div class="controls">
												<input type="hidden" name="id_rs" id="id_rs" value="<?php echo $id_rs; ?>"> 
                                                <input type="text" name="rs_gallery_name" id="rs_gallery_name" class="input-large" data-rule-required="true" value=""> 
												
											</div>
										</div>
									<label for="textfield" class="control-label">Image Desc</label>
												<div class="controls">
											
                                            
                                            
									
										<textarea name="rs_gallery_desc" rows="7"></textarea>
								
							
									
										
									</div>
                                    
                                    	
										<label class="control-label" for="textfield">Publish</label>
										
										<div class="controls">
                                        <select name="publish">
                                          <option value="Y" >Yes</option>
                                          <option value="N" >No</option>
                                        </select>
										</div>
									
                                    <div class="control-group">
										<label class="control-label" for="textfield">File</label>
										
										<div class="controls">
											<input type="file" name="userfile"  data-rule-required="true"/>
										</div>
									</div>
                                    
                                    	
									
                                    
									<hr>
                                    
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>brs/">Back</a>
										
									</div>
								</form>
							</div>       
 
 
</div>


</div>
</div>


<div class="row-fluid">








<div class="span12">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3>Details <?php echo $rs_name; ?></h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content ">
 
 
 
  <table class="table table-hover table-nomargin dataTable table-bordered">
								  <thead>
									  <tr>
									    <th>Name</th>
										  <th>Images</th>
										  <th>Publish</th>
										  <th>&nbsp;</th>
								    </tr>
								  </thead>
								  <tbody>
                                    
                                    <?php 
									
									$sql = "select  * from rs_gallery where id_rs='".$this->uri->segment(3)."'";
									$query = $this->db->query($sql);
									
									foreach($query->result_array() as $row){ 
									
									$linksArray=explode('.', $row['file_foto']);
 				$data= array_filter($linksArray);
				if(!empty($data)){
				  $the = $data[0]."_thumb.".$data[1];	
				}else{
				   $the ='';	
				}
									
									
									?>
									  <tr>
									    <td><?php echo  $row['rs_gallery_name']; ?></td>
										  <td><a href="#">
												<img src="<?=base_url()?>uploads/rs/<?php echo $the; ?>" alt="">
											</a>										                                    </td>
									      <td><?php echo  $row['publish']; ?></td>
								          <td>
                            <div align="center">
                            
                          
                            
                            <a title="" rel="tooltip" class="btn btn-mini btn-danger" href="<?php echo site_url('brs/submithapusimage/'.$row['id_rs_gallery'].'/'.$row['id_rs']);?>" onclick="return confirm('Anda Yakin ingin Menghapus?'); "><i class="icon-delete"></i> Delete</a>                            </div>                        </td>
									  </tr>
                                        
                                     <?php } ?>
								  </tbody>
							  </table>
					

</div>

</div>




							
</div>