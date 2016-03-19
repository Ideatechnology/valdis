<?php 
// var global
if ($this->session->userdata('sesi_bahasa')=="ind") {
$berita_lainnyax="Arsip & Siaran Pers Lainnya";
$berita_populerx="Infoprajurit Populer";
$selanjutnyax="Selanjutnya";
} elseif ($this->session->userdata('sesi_bahasa')=="eng")  {
$berita_lainnyax="Others";
$berita_populerx="Popular Siaran Pers";
$selanjutnyax="More";
} else {
$berita_lainnyax="Arsip & Siaran Pers Lainnya";
$berita_populerx="Siaran Pers Populer";
$selanjutnyax="Selanjutnya";
}


?>	






<div class="row">

<div class="col-lg-12" >
	
				<?php				
								if ($this->session->userdata('sesi_bahasa')=="ind") 
								{
							?><img src="<?php echo base_url();?>assets_frontend_revisi/label/labelsiaranpers.png" class="img-responsive">  <?php } 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{
						?><img src="<?php echo base_url();?>assets_frontend_revisi/label/labelsiaranpers_eng.png" class="img-responsive"> <?php
								}
								else 
								{
									?><img src="<?php echo base_url();?>assets_frontend_revisi/label/labelsiaranpers.png" class="img-responsive"> <?php
									
								}
								?>
</div>
</div>

<!--<div class="row">
<div class="col-lg-12">&nbsp;</div>
</div>-->



<div class="row">

<div class="col-md-8">
<div style="background-color:#052905; color:#FFFFFF; padding:20px;">


<?php foreach($siaranpers as $news2) { ?>

<h4 style="color:#a4c656">
<a  href="<?php echo site_url();?>siaranpers/detail/<?php echo $news2['id_news']; ?>-<?php echo str_replace(" ","-",$news2['news_name']); ?>" style="color:#9bcf49;">
<?php 

if ($this->session->userdata('sesi_bahasa')=="ind") {
echo strtoupper($news2['news_name']);
} elseif ($this->session->userdata('sesi_bahasa')=="eng")  {
echo strtoupper($news2['news_name_eng']);
} else {
echo strtoupper($news2['news_name']);
}


 ?>

</a>


</h4>

<span style="color:#a4c656">
 <?php
 $tglnya = date("Y-m-d", strtotime($news2['create_time']));
 echo   nama_hari($tglnya).' , '. tgl_indo($tglnya); 
 ?>
 </span>
 
 <div style="text-align:justify">
 <?php if  ($news2['file_foto']) { ?>
			<img src="<?php echo base_url();?>uploads/siaran_pers/<?php echo $news2['file_foto']; ?>"  style="width:300px; height:200px;" hspace="5" vspace="5" align="left">
            <?php } else { ?>  
			<img src="<?php echo base_url();?>uploads/siaran_pers/no_images.png" style="width:300px; height:200px;" hspace="5" vspace="5" align="left">
			<?php } ?>
												<?php 
												
												
if ($this->session->userdata('sesi_bahasa')=="ind") {
echo  substr($news2['news_desc'],0,650); 
} elseif ($this->session->userdata('sesi_bahasa')=="eng")  {
echo  substr($news2['news_desc_eng'],0,650);
} else {
echo substr($news2['news_desc'],0,650);
}
												
												
												
												?>
												....												
                                       </div>
                                                <div align="right">
                                                
                                                <a  href="<?php echo site_url();?>siaranpers/detail/<?php echo $news2['id_news']; ?>-<?php echo str_replace(" ","-",$news2['news_name']); ?>" style="color:#eeff00; font-weight:bold;"><em><?php echo $selanjutnyax; ?> > </em></a>
                                                
                                                </div>

 <img src="<?php echo base_url()?>assets_frontend_revisi/pembatas_berita.png" class="img-responsive">
<?php } ?>


<?php  
   $paging=(!empty($pagermessage) ? $pagermessage : '');
   
  
   ?>
   
    <div style="padding:20px; text-align:right;">
    <?php 
	echo $paging."&nbsp;&nbsp;";
   echo $this->pagination->create_links();
	
	?>
    </div>


</div>




</div>

<div class="col-md-4">

<div style="background-color:#145c12; color:#FFFFFF;padding:20px;">
<h3><?php echo $berita_lainnyax; ?></h3>
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

<br>


<div style="background-color:#145c12; color:#FFFFFF;padding:20px;">
<h3><?php echo $berita_populerx; ?></h3>
 <img src="<?php echo base_url()?>assets_frontend_revisi/pembatas_berita.png" class="img-responsive">

<ul>
 
<?php
$sql_bp = "select * from news where category=4 and publish='Y' order by be_read  desc limit 4";
$query_bp= $this->db->query($sql_bp);
foreach($query_bp->result_array() as $row_bp){ 
 ?>

<li style="list-style-type:square">

<a href="<?php echo site_url()."siaranpers/detail/".$row_bp['id_news']."-".str_replace(" ","-",$row_bp['news_name'])?>" style="color:#a7cf48; text-decoration:underline;">
<?php 
if ($this->session->userdata('sesi_bahasa')=="ind") {
echo $row_bp['news_name'];
} elseif ($this->session->userdata('sesi_bahasa')=="eng")  {
echo $row_bp['news_name_eng'];
} else {
echo $row_bp['news_name'];
}
?> </a>
</li>
<br />

<?php } ?> 
 </ul>



</div>


</div>



</div>



<div class="row">
<div class="col-md-12">&nbsp;</div>
</div>

 
 