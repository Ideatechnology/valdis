
<div class="row-fluid">



					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Gallery Photo </h3>
							</div>
                            
                            
                            
                            
						  <div class="box-content nopadding">
                            <br />
                            
                            
                            
                          <?php if ($this->session->userdata('s_sys_type')!=3) { ?>
                            <div align="center">
                            <a title="" rel="tooltip" class="btn btn-green" href="<?php echo site_url();?>balbumphoto/add" data-original-title="New Data"><i class="icon-plus-sign"></i> Create Album</a>
                            </div>
                           <?php } ?> 
                            
                            <hr>
							
					<div align="center">		
                     <form action="<?php echo site_url('balbumphoto/index'); ?>" method="post" name="form1" class="form-horizontal" >
                      <input type="text" placeholder="Search Album..." class="form-control input-sm pull-right" name="cari_global" value="<?php echo $this->session->userdata('s_cari_global'); ?>">
                     
					  </form>
					  </div>
					  <br>
					
                            
                            
                     
							 <table class="table table-hover table-nomargin  table-bordered">
								  <thead>
									  <tr>
									   
									    <th>Album Name</th>
										  <th>Desc</th>
										  <th>Publish</th>
										  <th>Date</th>
										  <th>By</th>
								          <th>Position</th>
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
									   
									    <td><?php echo  $row['albumphoto_name']; ?><br>
										<em><?php echo  $row['albumphoto_name_eng']; ?></em>
										</td>
										  <td><?php echo  $row['albumphoto_desc']; ?>
                                            
                                          <!--  <a href="#">
												<img src="<?=base_url()?>uploads/999/test.jpg" alt="">
											</a>-->											                                    </td>
									      <td><?php echo  $row['publish']; ?></td>
								          <td><?php echo  $row['create_time']; ?></td>
							              <td><?php echo  $row['create_author']; ?></td>
					                      <td><?php echo  $row['sort_number']; ?></td>
					                      <td>
                            <div align="center">
                            
							<?php if ($this->session->userdata('s_sys_type')!=3) { ?>
                            <a title="" rel="tooltip" class="btn btn-mini " href="<?php echo site_url();?>balbumphoto/edit_image/<?php echo  $row['id_albumphoto']; ?>" data-original-title="Upload Images"><i class="icon-cloud-upload"></i> Images</a> &nbsp;
							<?php } ?>
                            
                            <a title="" rel="tooltip" class="btn btn-mini btn-warning " href="<?php echo site_url();?>balbumphoto/edit/<?php echo  $row['id_albumphoto']; ?>" data-original-title="Edit Data"><i class="icon-pencil"></i> Edit</a> &nbsp;
                            
                            <?php if ($this->session->userdata('s_sys_type')!=3) { ?>
							<a title="" rel="tooltip" class="btn btn-mini btn-danger" href="<?php echo site_url('balbumphoto/submithapus/'.$row['id_albumphoto']);?>" onclick="return confirm('Anda Yakin ingin Menghapus?'); "><i class="icon-delete"></i> Delete</a> 
<?php } ?>
							</div>                        </td>
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



