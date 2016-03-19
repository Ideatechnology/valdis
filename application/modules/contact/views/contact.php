<div class="row">

<div class="col-lg-12" >
	
				<?php				
								if ($this->session->userdata('sesi_bahasa')=="ind") 
								{
							?><img src="<?php echo base_url();?>assets_frontend_revisi/label/labelkontak.png" class="img-responsive">  <?php } 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{
						?><img src="<?php echo base_url();?>assets_frontend_revisi/label/labelkontak.png" class="img-responsive"> <?php
								}
								else 
								{
									?><img src="<?php echo base_url();?>assets_frontend_revisi/label/labelkontak.png" class="img-responsive"> <?php
									
								}
								?>
</div>
</div>

<div class="row">
<div class="col-lg-12">&nbsp;</div>
</div>

<div class="row">
<div class="col-lg-6">

<img src="<?php echo base_url()?>assets_frontend_revisi/label/markas.jpg" class="img-responsive"> 

</div>

<div class="col-lg-6">
<iframe src="https://www.google.com/maps/d/embed?mid=zd-nrw-L1VCk.kef1-P0FBxJk" style="width:100%;" height="300"></iframe>

</div>


</div>




<div class="row">
<div class="col-lg-12">
<div style="background-color:#052905; color:#FFFFFF; padding:20px; color:#a5ce43;">
				<?php
				if($this->session->userdata('error_msg'))
				{
					echo '<div class="alert alert-error" style="background-color:#FF0000;"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$this->session->userdata('error_msg').'</div>';
					$this->session->unset_userdata('error_msg');
				}
				?>
                
                
                <form name="myForm" action="<?php echo site_url();?>index.php/contact/submit"  onSubmit="return validasi();" method="post" class="comment-form">
                        <div class="row">
                            <div class="col-md-8">
                                <p class="input-label" style="color:#a7cf48;">Nama<span>(*)</span></p>
                                <p class="input-block">
                                  <input type="text" value=""  id="contact_name" name="name" class="valid">
                                </p>
                            </div>
                            <!-- col-md-4 -->

                            <div class="col-md-8">
                                <p class="input-label" style="color:#a7cf48;">Email<span>(*)</span></p>
                                <p class="input-block">
                                  <input type="text" value=""  id="contact_email" name="email" class="valid">
                                </p>
                            </div>

                            <!-- col-md-4 -->

                            <div class="col-md-8">
                                <p class="input-label" style="color:#a7cf48;">Subject</p>
                                <p class="input-block">
                                  <input type="text" value="" id="contact_ws-link" name="subject" class="valid">
                                </p>
                            </div>
                            
                            <div class="col-md-8">
                                <p class="input-label" style="color:#a7cf48;">Message</p>
                                <p class="input-block">
                                   <textarea name="description" id="description" cols="88" rows="12"></textarea>
                                </p>
                            </div>
                            
                            <div class="col-md-8">
                                <p class="input-label" style="color:#a7cf48;">Masukan Kode</p>
                                <p class="input-block">
                                <span class="btn btn-primary" disabled="disabled" style="margin-bottom:20px;"><strong><?php echo $word;?></strong></span> 
                                <br />
                                   <input name="secutity_code" type="text" class="input-small" maxlength="4" data-rule-required="true">
                                </p>
                            </div>
                            
                            <!-- col-md-4 -->
                        
                        </div>
                        <!-- row -->                        
                      
                        <input type="submit"  value="SEND MESSAGE"  id="submit_comment" class="btn btn-success"></span>
                        
                    </form>
                
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-12">

&nbsp;

</div>
</div>


  
	
		



  