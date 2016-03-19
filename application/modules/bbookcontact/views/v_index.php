
<div class="row-fluid">



					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Booking From Contact Us Reservation</h3>
							</div>
                            
                            
                            
                            
						  <div class="box-content nopadding">
                            <br />
                            
                            
                            
                          
                           <!-- <div align="center">
                            <a title="" rel="tooltip" class="btn btn-green" href="<?php echo site_url();?>bpages/add" data-original-title="New Data"><i class="icon-plus-sign"></i> Add Data</a>
                            </div>
                            -->
                            
                            
                            
                            
                     
							  <table class="table table-hover table-nomargin dataTable table-bordered">
								  <thead>
									  <tr>
									    <th>Order Date</th>
									   
									   
										  <th>Order Information</th>
										  <th>Description</th>
										  <th>&nbsp;</th>
								    </tr>
								  </thead>
								  <tbody>
                                    
                                    <?php foreach($query->result_array() as $row){ ?>
									  <tr>
									    <td><?php echo  $row['date']; ?></td>
									    
                                            
                                        								                                   
									      <td><?php echo  $row['name']; ?><br />
								          <?php echo  $row['email']; ?><br />
								          <?php echo  $row['phone']; ?></td>
					                     
					                      <td><?php echo  $row['description']; ?></td>
					                      <td>
                            <div align="center">
                            
                           
                     
                            
                            <a title="" rel="tooltip" class="btn btn-mini btn-danger" href="<?php echo site_url('bbookcontact/submithapus/'.$row['id_contact']);?>" onclick="return confirm('Anda Yakin ingin Menghapus?'); "><i class="icon-delete"></i> Delete</a>                             </div>                        </td>
									  </tr>
                                        
                                     <?php } ?>
								  </tbody>
							  </table>
						  </div>
						</div>
					</div>
				</div>



