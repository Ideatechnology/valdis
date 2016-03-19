
<div class="row-fluid">



					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Center Image Slide Show</h3>
							</div>
                            
                            
                            
                            
						  <div class="box-content nopadding">
                            <br />
                            
                            
                            
                          
                            <div align="center">
                            <a title="" rel="tooltip" class="btn btn-green" href="<?php echo site_url();?>bslider_center/add" data-original-title="New Data"><i class="icon-plus-sign"></i> Add Data</a>
                            </div>
                            
                            
                            <br>
                            <form action="<?php echo site_url('bslider_center/index'); ?>" method="post" name="form1" class="form-horizontal" >
                      <input type="text" placeholder="Search" class="form-control input-sm pull-right" name="cari_global" value="<?php echo $this->session->userdata('s_cari_global'); ?>">
                      <div class="input-group-btn">
                        <!--<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>-->
                      </div>
					  </form>
                            
                     <br>
							  <table class="table table-hover table-nomargin  table-bordered">
								  <thead>
									  <tr>
									    <th>Title </th>
									   
									   
										  
										  <th>Publish</th>
										  <th>Create Time</th>
										  <th>By</th>
								         
								          <th>&nbsp;</th>
								    </tr>
								  </thead>
								  <tbody>
                                    
									
									<?php
				if (count($query) > 0) {
					$no=1;
					foreach($query as $row)
					{
						?>
									
									  <tr>
									    <td><?php 
								
										$linksArray=explode('.', $row['file_foto']);
 				$data= array_filter($linksArray);
				if(!empty($data)){
				  $the = $data[0]."_thumb.".$data[1];	
				}else{
				   $the ='';	
				}
										
										echo  $row['slider_name']; ?><hr>
										<img src="<?php echo base_url();?>uploads/slider_center/<?php echo $the;?>">
										
										</td>
									    
                                            
                                         
                                          <td><?php echo  $row['publish']; ?></td>
                                         
									     
								          <td><?php echo  $row['create_time']; ?></td>
							              <td><?php echo  $row['create_author']; ?></td>
					                     
					                      <td>
                            <div align="center">
                            
                           
                            
                            <a title="" rel="tooltip" class="btn btn-mini btn-warning " href="<?php echo site_url();?>bslider_center/edit/<?php echo  $row['id_slider']; ?>" data-original-title="Edit Data"><i class="icon-pencil"></i> Edit</a> &nbsp;
                            
                            <a title="" rel="tooltip" class="btn btn-mini btn-danger" href="<?php echo site_url('bslider_center/submithapus/'.$row['id_slider']);?>" onclick="return confirm('Anda Yakin ingin Menghapus?'); "><i class="icon-delete"></i> Delete</a>                            </div>                        </td>
									  </tr>
                                        
                                     <?php
				
				$paging=(!empty($pagermessage) ? $pagermessage : '');
						echo "</div>";
						$no++;
					}
					echo "<tr><td colspan='13'><div style='background:000; float:right;'>$paging &nbsp;".$this->pagination->create_links()."</div></td></tr>";
				} else {
					echo "<tbody><tr><td colspan='13' style='padding:10px; background:#F00; border:none; color:#FFF;'>Data Masih Kosong</td></tr></tbody>";
				}
				?>
								  </tbody>
							  </table>
						  </div>
						</div>
					</div>
				</div>





