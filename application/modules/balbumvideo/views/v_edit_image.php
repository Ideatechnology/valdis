
<div class="row-fluid">
<div class="span12">
<div class="box box-color box-bordered">
<div class="box-title">
								<h3><i class=" icon-plus-sign"></i>Upload Images Gallery Video : <?php echo $albumvideo_name; ?></h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content">
 
								<!-- <form action="#" method="POST" class='form-horizontal form-validate' id="bb"> -->
								<?php echo form_open('balbumvideo/submiteditimage',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
									
									
									<?php if (isset($pesan)) { 
									echo '<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$pesan.'</div>';
									}
									?>
									
									
									<div class="control-group">
											<label for="textfield" class="control-label">Name</label>
											<div class="controls">
												<input type="hidden" name="id_albumvideo" id="id_albumvideo" value="<?php echo $id_albumvideo; ?>"> 
                                                <input type="text" name="albumvideo_gallery_name" id="albumvideo_gallery_name" class="input-xxlarge" data-rule-required="true" value=""> 
												
											</div>
										</div>
									    
										<div class="control-group">
										<label for="textfield" class="control-label">Desc</label>
									    <div class="controls">
										<textarea name="albumvideo_gallery_desc" rows="3" style="width:500px;"></textarea>
										</div>
										</div>
                                    
                                    	<div class="control-group">
										<label class="control-label" for="textfield">Publish</label>
										
										<div class="controls">
                                        <select name="publish">
                                          <option value="Y" >Yes</option>
                                          <option value="N" >No</option>
                                        </select>
										</div></div>
                                        
                                             <div class="control-group">
											<label for="textfield" class="control-label">Position Number</label>
											<div class="controls">
												
                                                <input type="text" name="sort_number" id="sort_number" class="input-xxlarge"  value=""> 
												
											</div>
										</div>
										
										
								
								 <div class="control-group">
								<label class="control-label" for="textfield">Type</label>
										
										<div class="controls">
                                        <select name="type" id="type">
                                          <option value="0" >Video</option>
                                          <!--<option value="1" >Video</option>-->
                                        </select>
										</div></div>
									
									
									
									 <div class="control-group">
											<label for="textfield" class="control-label">Link Youtube</label>
											<div class="controls">
												
                                                <input type="text" name="link_youtube" id="link_youtube" class="input-xxlarge"  value=""> 
												
											</div>
										</div>
									
										
										
									 <div class="control-group">
											<label for="textfield" class="control-label">Image Link Youtube</label>
											<div class="controls">
												
                                                <input type="text" name="file_foto_youtube" id="file_foto_youtube" class="input-xxlarge"  value=""> 
												
											</div>
										</div>
										
								
                                   

							
                                    	
									
                                    
									<hr>
                                    
									
									
									
                                    
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Save</button>
                                        <a class="btn btn-danger"  href="<?php echo site_url();?>balbumvideo/">Back</a>
										
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
								<h3>Details <?php echo $albumvideo_name; ?></h3>
								<div class="actions">
									<!--<a class="btn btn-mini content-refresh" href="#"><i class="icon-refresh"></i></a>
									<a class="btn btn-mini content-remove" href="#"><i class="icon-remove"></i></a>-->
									<a class="btn btn-mini content-slideUp" href="#"><i class="icon-angle-down"></i></a>
								</div>
							</div>
                            
 <div class="box-content ">
 
 
 
  
  <ul class="gallery">

									
								
									
									
									
									
									<table width="100%" border="0">
  <tr bgcolor="#CCCCCC">
    <td>Nama Video</td>
    <td>Link Youtube</td>
    <td colspan="2">Aksi</td>
    </tr>
  <?php 
  	$sql = "select  * from albumvideo_gallery where id_albumvideo='".$this->uri->segment(3)."' order by id_albumvideo_gallery";
									$query = $this->db->query($sql);
  foreach($query->result_array() as $row){ 
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['albumvideo_gallery_name']; ?></td>
    <td>&nbsp;
    <?php echo $row['link_youtube']; ?><br />
   
     <iframe width="250" height="200"
src="<?php echo  str_replace("watch?v=","embed/",$row['link_youtube']); ?>">
</iframe> 
    
    </td>
    <td>&nbsp;<a title="" rel="tooltip" class="btn btn-mini btn-success" href="<?php echo site_url('balbumvideo/submitpublishimage/'.$row['id_albumvideo_gallery'].'/'.$row['id_albumvideo'].'/'.'Y');?>" onclick="return confirm('Publish?'); "><i class="icon-delete"></i>Publish</a> </td>
    <td><a title="" rel="tooltip" class="btn btn-mini btn-danger" href="<?php echo site_url('balbumvideo/submithapusimage/'.$row['id_albumvideo_gallery'].'/'.$row['id_albumvideo']);?>" onclick="return confirm('Anda Yakin ingin Menghapus?'); "><i class="icon-delete"></i> Delete</a> </td>
  </tr>
  <?php } ?>
</table>
									
									
									
									
  
					

</div>

</div>




							
</div>


<script language="javascript">

							

									

									$(document).ready(function(){
									
									$("#screen3").hide();
									$("#screen4").hide();
        $("#type").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="1"){
				//alert("1");
                    $("#screen3").show();
                    $("#screen4").hide();
                }
                if($(this).attr("value")=="0"){
				//alert("0");
                    $("#screen3").hide();
                    $("#screen4").show();
                }
              
            });
        }).change();
    });


									</script>