<?php 
// var global
if ($this->session->userdata('sesi_bahasa')=="ind") {
$berita_lainnyax="Arsip & Siaran Pers Lainnya";
$berita_populerx="Siaran Pers Populer";
$selanjutnyax="Selanjutnya";
} elseif ($this->session->userdata('sesi_bahasa')=="eng")  {
$berita_lainnyax="Others";
$berita_populerx="Popular Press";
$selanjutnyax="More";
} else {
$berita_lainnyax="Arsip & Siaran Pers Lainnya";
$berita_populerx="Siaran Pers Populer";
$selanjutnyax="Selanjutnya";
}


?>





<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="row">

<div class="col-lg-12" >
	
				<?php				
								if ($this->session->userdata('sesi_bahasa')=="ind") 
								{
							?><img src="<?php echo base_url();?>assets_frontend_revisi/label/labelinfoprajurit.png" class="img-responsive">  <?php } 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{
						?><img src="<?php echo base_url();?>assets_frontend_revisi/label/labelinfoprajurit_eng.png" class="img-responsive"> <?php
								}
								else 
								{
									?><img src="<?php echo base_url();?>assets_frontend_revisi/label/labelinfoprajurit.png" class="img-responsive"> <?php
									
								}
								?>
</div>
</div>




<div class="row">

<div class="col-md-8">
<div style="background-color:#052905; color:#FFFFFF; padding:20px;">


<h3 style="color:#ffffff;">
							   <?php 
							   
							   if ($this->session->userdata('sesi_bahasa')=="ind") {
echo isset($field['news_name'])?$field['news_name']:'';
} elseif ($this->session->userdata('sesi_bahasa')=="eng")  {
echo  isset($field['news_name_eng'])?$field['news_name_eng']:'';
} else {
echo  isset($field['news_name'])?$field['news_name']:'';
}
							    ?>
							   
</h3>
<br>
<?php
							    //echo  isset($field['create_time'])?$field['create_time']:'';
							    $tglnya = date("Y-m-d", strtotime(isset($field['create_time'])?$field['create_time']:''));
							    echo   nama_hari($tglnya).' , '. tgl_indo($tglnya); 
							     ?>


<div align="justify">
 <?php if  ($field['file_foto']) { ?>
			<img src="<?php echo base_url();?>uploads/siaran_pers/<?php echo $field['file_foto']; ?>" width="400" height="200" hspace="5" vspace="5" align="left" class="img-responsive">
            <?php } else { ?>  
			<img src="<?php echo base_url();?>uploads/siaran_pers/no_images.png" width="400" height="200" hspace="5" vspace="5" align="left" class="img-responsive">
			<?php } ?>
							   
							   
							   <?php if ($this->session->userdata('sesi_bahasa')=="ind") {
echo  isset($field['news_desc'])?$field['news_desc']:'';
} elseif ($this->session->userdata('sesi_bahasa')=="eng")  {
echo  isset($field['news_desc_eng'])?$field['news_desc_eng']:'';
} else {
echo  isset($field['news_desc'])?$field['news_desc']:'';
} ?>
</div>


<span><div class="fb-share-button" data-href="<?php echo current_url() ?>" data-layout="button"></div></span>
						<span><a href="#" class="btn btn-xs btn-primary" onclick="popUp=window.open('https://twitter.com/share', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i><span class='share_text'>Tweet</span></a></span>
						<span><a href="#" class="btn btn-xs btn-danger" onclick="popUp=window.open('https://plus.google.com/share', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><i class="fa fa-google-plus"></i><span class='share_text'>Share</span></a></span>




<div style="width:100%; background-color:#006600;">
			<div class="fb-comments" mobile="false" data-width="100%" data-href="<?php echo  current_url(); ?>" data-numposts="5" data-colorscheme="light" style=""></div>
			<style>.fb-comments, .fb-comments iframe[style], .fb-like-box, .fb-like-box iframe[style] {width: 100% !important;}
.fb-comments span, .fb-comments iframe span[style], .fb-like-box span, .fb-like-box iframe span[style] {width: 100% !important;}
</style>
			</div>
						

						

</div>
</div>



<div class="col-md-4">

<div style="background-color:#145c12; color:#FFFFFF;padding:20px;">
<h3><?php echo $berita_lainnyax; ?> </h3>
 <img src="<?php echo base_url()?>assets_frontend_revisi/pembatas_berita.png" class="img-responsive">	

<ul>
  <?php 
  
  $thn_skr=date("Y");
  $setahun_ke_belakang=$thn_skr-1;
  $bln_skr=date("m");
  ?>
  
  
  
 
   <?php
  
  for ($z = $bln_skr; $z >= 1; $z--) { 
  if ($z < 10) { $z="0".$z;}
  Switch ($z){
    case 1 : $bulanz="Januari";
        Break;
    case 2 : $bulanz="Februari";
        Break;
    case 3 : $bulanz="Maret";
        Break;
    case 4 : $bulanz="April";
        Break;
    case 5 : $bulanz="Mei";
        Break;
    case 6 : $bulanz="Juni";
        Break;
    case 7 : $bulanz="Juli";
        Break;
    case 8 : $bulanz="Agustus";
        Break;
    case 9 : $bulanz="September";
        Break;
    case 10 : $bulanz="Oktober";
        Break;
    case 11 : $bulanz="November";
        Break;
    case 12 : $bulanz="Desember";
        Break;
    }
  
  
  ?>
 
  <?php 
  $jml_berita = $this->db->query("select count(*) as jml_beritanya from news where category=4  and  MONTH(create_time)='".$z."' and YEAR(create_time)='".$thn_skr."'")->row();
  
  ?>
  
  
<li style="list-style-type:none;">
<a href="<?php echo site_url();?>siaranpers/arsip/<?php echo $z;?>/<?php echo $thn_skr;?>" style="color:#a7cf48; font-weight:bold;">
<?php echo $bulanz." ".$thn_skr; ?> (<?php echo $jml_berita->jml_beritanya; ?>)
</a>

<?php if ($bln_skr==$z) {  ?>
<ul>

<?php
$sql_blz = "select * from news where category=4 and publish='Y' and MONTH(create_time)='".$bln_skr."' and YEAR(create_time)='".$thn_skr."' order by id_news desc limit 4";
$query_blz= $this->db->query($sql_blz);
foreach($query_blz->result_array() as $row_blz){ 
 ?>
<li style="list-style-type:none;"> 
<a href="<?php echo site_url()."siaranpers/detail/".$row_blz['id_news']."-".str_replace(" ","-",$row_blz['news_name'])?>" style="color:#a7cf48; text-decoration:underline;">- 


<?php 
if ($this->session->userdata('sesi_bahasa')=="ind") {
echo $row_blz['news_name'];
} elseif ($this->session->userdata('sesi_bahasa')=="eng")  {
echo $row_blz['news_name_eng'];
} else {
echo $row_blz['news_name'];
}
   ?>
</a>
</li>
<br />
<?php } ?>

</ul>
<?php } ?>

</li>
 
  <?php } ?>
</ul>
 
	


  
   <img src="<?php echo base_url()?>assets_frontend_revisi/pembatas_berita.png" class="img-responsive">	

  
  
  
  
 
  
  
  
  
  
  <?php
  
  for ($x = 12; $x >= 1; $x--) { 
  if ($x < 10) { $x="0".$x;}
  Switch ($x){
    case 1 : $bulan="Januari";
        Break;
    case 2 : $bulan="Februari";
        Break;
    case 3 : $bulan="Maret";
        Break;
    case 4 : $bulan="April";
        Break;
    case 5 : $bulan="Mei";
        Break;
    case 6 : $bulan="Juni";
        Break;
    case 7 : $bulan="Juli";
        Break;
    case 8 : $bulan="Agustus";
        Break;
    case 9 : $bulan="September";
        Break;
    case 10 : $bulan="Oktober";
        Break;
    case 11 : $bulan="November";
        Break;
    case 12 : $bulan="Desember";
        Break;
    }
  
  
  ?>
 
  <?php 
  $jml_berita = $this->db->query("select count(*) as jml_beritanya from news where category=4  and  MONTH(create_time)='".$x."' and YEAR(create_time)='".$setahun_ke_belakang."'")->row();
  
  ?>
  
  
<li style="list-style-type:none;">
<a href="<?php echo site_url();?>siaranpers/arsip/<?php echo $x;?>/<?php echo $setahun_ke_belakang;?>" style="color:#a7cf48; font-weight:bold;">
<?php echo $bulan." ".$setahun_ke_belakang; ?> (<?php echo $jml_berita->jml_beritanya; ?>)
</a>


</li>
 
  <?php } ?>
</ul>
 




</div>
</div>



<div class="row">
<div class="col-md-12">&nbsp;</div>
</div>


</div>
 
 







		