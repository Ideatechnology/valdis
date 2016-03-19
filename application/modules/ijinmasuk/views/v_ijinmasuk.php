<div class="row-fluid">
<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">
<div class="span3">&nbsp;</div>

<div class="span6">





<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class="icon-user"></i>Login Administrator Website</h3>
								<div class="actions">
									
								</div>
							</div>
                            
 <div class="box-content">
								<?php echo form_open('ijinmasuk/validate',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate'));?>
								
								<?php
				if($this->session->userdata('error_msg'))
				{
					echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$this->session->userdata('error_msg').'</div>';
					$this->session->unset_userdata('error_msg');
				}
				?>
								
								
									<div class="control-group">
										<label class="control-label" for="textfield">Username</label>
										<div class="controls">
											<input type="text" class="input-xlarge" placeholder="" id="sys_user_name" name="sys_user_name" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="password">Password</label>
										<div class="controls">
											<input type="password" class="input-xlarge" placeholder="" id="sys_password" name="sys_password" data-rule-required="true">
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="password">Kode Keamanan</label>
										<div class="controls">
											
											<span class="btn btn-primary" disabled="disabled"><strong><?php echo $word;?></strong></span>
											<input name="secutity_code" type="text" class="input-small" maxlength="4" data-rule-required="true">
											
										</div>
									</div>
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Login</button>
										
									</div>
								</form>
							</div>       
 
 
</div>






</div>

<div class="span3">&nbsp;</div>								
</div>