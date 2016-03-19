<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="icon-reorder"></i>
									Image Library
								</h3>
							</div>
							<div class="box-content">
							<div align="center">
                            <a title="" rel="tooltip" class="btn btn-green" href="<?php echo site_url();?>image_library/add" data-original-title="New Data"><i class="icon-plus-sign"></i> Upload Images</a>
						
                            </div>
							
							<div class="alert alert-success">
											<button data-dismiss="alert" class="close" type="button">×</button>
											<strong>Warning!</strong> Arahkan mouse ke gambar, kemudian klik kanan untuk mendapatkan image location. Klik Kanan - Copy Image Location
										</div>
							
							<ul class="tiles">
							<?php
				if (count($query) > 0) {
					$no=1;
					foreach($query as $row)
					{
						?>
						
			
							
							<li class="image">
								<a href="#"><img alt="" src="<?php echo base_url();?>uploads/image_library/<?php echo $row['file_foto'];?>"></a>
								<span>
								<a href="<?php echo site_url('image_library/submithapus/'.$row['id_image_library']);?>" onclick="return confirm('Anda Yakin ingin Menghapus?'); ">Delete</a> 
								</span>
							</li>
							
							<?php
				
				$paging=(!empty($pagermessage) ? $pagermessage : '');
						
					}
					
				} else {
					echo "Data Masih Kosong";
				}
				?>
					
						</ul>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
							</div>
							<hr>
								<?php #echo "$paging &nbsp;".$this->pagination->create_links().""; 
								echo $this->pagination->create_links().""; 
								?>		
								
						</div>
					</div>
				</div>






