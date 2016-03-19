
<div class="row-fluid">



					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Info Prajurit</h3>
							</div>
                            
                            
                            
                            
						  <div class="box-content nopadding">
                            <br />
                            
                            
                            
                          <?php if ($this->session->userdata('s_sys_type')!=3) { ?>
                            <div align="center">
                            <a title="" rel="tooltip" class="btn btn-green" href="<?php echo site_url();?>binfo_prajurit/add" data-original-title="New Data"><i class="icon-plus-sign"></i> Add Data</a>
                            </div>
                            <?php } ?>
                            
                            <br>
                            <form action="<?php echo site_url('binfo_prajurit/index'); ?>" method="post" name="form1" class="form-horizontal" >
                      <input type="text" placeholder="Search" class="form-control input-sm pull-right" name="cari_global" value="<?php echo $this->session->userdata('s_cari_global'); ?>">
                      <div class="input-group-btn">
                        <!--<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>-->
                      </div>
					  </form>
                            
                     <br>
							  <table class="table table-hover table-nomargin  table-bordered">
								  <thead>
									  <tr>
									    <th>Title (Bahasa)</th>
									   
									   
										  <th>Title (English)</th>
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
									    <td><?php echo  $row['news_name']; ?></td>
									    
                                            
                                          <td><?php echo  $row['news_name_eng']; ?></td>
                                          <td><?php echo  $row['publish']; ?></td>
                                         
									     
								          <td><?php echo  $row['create_time']; ?></td>
							              <td><?php echo  $row['create_author']; ?></td>
					                     
					                      <td>
                            <div align="center">
                            
                           
                            
                            <a title="" rel="tooltip" class="btn btn-mini btn-warning " href="<?php echo site_url();?>binfo_prajurit/edit/<?php echo  $row['id_news']; ?>" data-original-title="Edit Data"><i class="icon-pencil"></i> Edit</a> &nbsp;
                            <?php if ($this->session->userdata('s_sys_type')!=3) { ?>
                            <a title="" rel="tooltip" class="btn btn-mini btn-danger" href="<?php echo site_url('binfo_prajurit/submithapus/'.$row['id_news']);?>" onclick="return confirm('Anda Yakin ingin Menghapus?'); "><i class="icon-delete"></i> Delete</a>  
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



