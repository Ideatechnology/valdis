<div class="row-fluid">



					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Pesan Kontak Kami</h3>
							</div>
                            
                            
                            
                            
						  <div class="box-content nopadding">
                            <br />
                            
                            
                            
                          
                    
                            
                            
                            <br>
                            <form action="<?php echo site_url('bcontact/index'); ?>" method="post" name="form1" class="form-horizontal" >
                      <input type="text" placeholder="Search" class="form-control input-sm pull-right" name="cari_global" value="<?php echo $this->session->userdata('s_cari_global'); ?>">
                      <div class="input-group-btn">
                        <!--<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>-->
                      </div>
					  </form>
                            
                     <br>
							  <table class="table table-hover table-nomargin  table-bordered">
								  <thead>
									  <tr>
									    <th>Tanggal</th>
									   
									   
										  <th>Dari</th>
										 
										  <th>Email</th>
										   <th>Subjek</th>
										  <th>Isi Pesan</th>
										  
								         
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
									    <td><?php echo  $row['date']; ?></td>
									    
                                            
                                          <td><?php echo  $row['name']; ?></td>
                                          <td><?php echo  $row['email']; ?></td>
                                         <td><?php echo  $row['subject']; ?></td>
									     
								          <td><?php echo  $row['description']; ?></td>
							             
					                      <td>
                            <div align="center">
                            
                           
                            
                            
                            <a title="" rel="tooltip" class="btn btn-mini btn-danger" href="<?php echo site_url('bcontact/submithapus/'.$row['id_contact']);?>" onclick="return confirm('Anda Yakin ingin Menghapus?'); "><i class="icon-delete"></i> Delete</a>                            </div>                        </td>
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



