
<div class="row-fluid">



					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Foto Pejabat</h3>
							</div>
                            
                            
                            
                            
						  <div class="box-content nopadding">
                            <br />
                            
                            
                            
                          <?php if ($this->session->userdata('s_sys_type')!=3) { ?>
                            <div align="center">
                            <a title="" rel="tooltip" class="btn btn-green" href="<?php echo site_url();?>bfotopejabat/add" data-original-title="New Data"><i class="icon-plus-sign"></i> Add Data</a>
                            </div>
							<?php } ?>
                            
                            
                            
                            
                            
                     
							  <table class="table table-hover table-nomargin dataTable table-bordered">
								  <thead>
									  <tr>
									    <th>No.Urut</th>
										<th>Nama Pejabat</th>
									   <th>Jabatan</th>
										  <th>Publish</th>
										  <th>Create Time</th>
										  <th>By</th>
								         
								          <th>&nbsp;</th>
								    </tr>
								  </thead>
								  <tbody>
                                    
                                    <?php foreach($query->result_array() as $row){ ?>
									
									  <tr>
									  <td><?php echo  $row['sort_number']; ?></td>
									  
									    <td><?php 
										$jabatansArray=explode('.', $row['file_foto']);
 				$data= array_filter($jabatansArray);
				if(!empty($data)){
				  $the = $data[0]."_thumb.".$data[1];	
				}else{
				   $the ='';	
				}
										
										echo  $row['nama_pejabat']; ?>
										<br>
										<img src="<?=base_url()?>uploads/fotopejabat/<?php echo $the; ?>" alt="" />
										</td>
										<td><?php echo  $row['jabatan']; ?></td>
									      <td><?php echo  $row['publish']; ?>
</td>
								          <td><?php echo  $row['create_time']; ?></td>
							              <td><?php echo  $row['create_author']; ?></td>
					                     
					                      <td>
                            <div align="center">
                            
                           
                            
                            <a title="" rel="tooltip" class="btn btn-mini btn-warning " href="<?php echo site_url();?>bfotopejabat/edit/<?php echo  $row['id_fotopejabat']; ?>" data-original-title="Edit Data"><i class="icon-pencil"></i> Edit</a> &nbsp;
                            &nbsp;
                            <?php if ($this->session->userdata('s_sys_type')!=3) { ?>
							<a title="" rel="tooltip" class="btn btn-mini btn-danger" href="<?php echo site_url('bfotopejabat/submithapus/'.$row['id_fotopejabat']);?>" onclick="return confirm('Anda Yakin ingin Menghapus?'); "><i class="icon-delete"></i> Delete</a>
							<?php } ?>
                            </div>                        </td>
									  </tr>
                                        
                                     <?php } ?>
								  </tbody>
							  </table>
						  </div>
						</div>
					</div>
				</div>



