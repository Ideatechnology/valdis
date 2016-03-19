<?php 
// var global
if ($this->session->userdata('sesi_bahasa')=="ind") {
$berita_lainnyax="Arsip & Info Prajurit Lainnya";
$berita_populerx="Info Prajurit Populer";
$selanjutnyax="Selanjutnya";
} elseif ($this->session->userdata('sesi_bahasa')=="eng")  {
$berita_lainnyax="Others";
$berita_populerx="Popular Soldier Information";
$selanjutnyax="More";
} else {
$berita_lainnyax="Arsip & Info Prajurit Lainnya";
$berita_populerx="Info Prajurit Populer";
$selanjutnyax="Selanjutnya";
}


?>	
 
 <div class="wrapper"> 


<?php				
								if ($this->session->userdata('sesi_bahasa')=="ind") 
								{ ?> <img style="" src="<?php echo base_url()?>assets_frontend/images/infoprajurit/label.png" alt="">  <?php } 
								elseif ($this->session->userdata('sesi_bahasa')=="eng")
								{
						?> <img style="" src="<?php echo base_url()?>assets_frontend/images/infoprajurit/label_eng.png" alt=""> <?php
								}
								else 
								{
									?><img style="" src="<?php echo base_url()?>assets_frontend/images/infoprajurit/label.png" alt=""> <?php
									
								}
								?>

<div class="row" style="margin-left:10px;">
  <div class="col-md-8">
  
                              <div style="padding-top:10px; background-color:#062f03; opacity:0.7" class="widget kopa-article-list-widget article-list-1" >
                                <ul class="clearfix">
                                	
									<?php foreach($news as $news2) { ?>
									<li style="border:none;">
                                        <article class="entry-item">
                                            <div class="entry-content">
                                                <div class="content-top">
                                                    <h4 class="entry-title">

													
													
<a  href="<?php echo site_url();?>infoprajurit/detail/<?php echo $news2['id_news']; ?>-<?php echo str_replace(" ","-",$news2['news_name']); ?>" style="color:#9bcf49;">

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
                                                </div>
                                                <footer>
 <p class="tgl">
 <?php
 $tglnya = date("Y-m-d", strtotime($news2['create_time']));
 echo   nama_hari($tglnya).' , '. tgl_indo($tglnya); 
 ?>
 
  
 
 </p>
                                                </footer>
                                                <p align="justify">
                                                <?php if  ($news2['file_foto']) { ?>
			<img src="<?php echo base_url();?>uploads/infoprajurit/<?php echo $news2['file_foto']; ?>"  style="width:300px; height:200px;" hspace="5" vspace="5" align="left">
            <?php } else { ?>  
			<img src="<?php echo base_url();?>uploads/infoprajurit/no_images.png" style="width:300px; height:200px;" hspace="5" vspace="5" align="left">
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
												....												</p> 
                                       
                                                <div align="right">
                                                
                                                <a  href="<?php echo site_url();?>infoprajurit/detail/<?php echo $news2['id_news']; ?>-<?php echo str_replace(" ","-",$news2['news_name']); ?>" style="color:#eeff00; font-weight:bold;"><em><?php echo $selanjutnyax; ?> > </em></a>
                                                
                                                </div>
                                                
                                                
                                            </div>                                            
                                        </article>
                                    </li>  

									<?php } ?>
                                                                                                                                                                          
                                </ul>
                                <div class="entry-content">
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
                            <!-- widget --> 
  
  </div>
  <div  class="col-md-4">
  
  <div style="height:700px;  padding:10px; margin-right:20px; padding-left:10%; padding-right:10%; background-color:#196614;">
  <center><p class="lead" style="font-weight:bold;"><?php echo $berita_lainnyax; ?></p></center>
 

 <hr />
 
 
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
  $jml_berita = $this->db->query("select count(*) as jml_beritanya from news where category=3  and  MONTH(create_time)='".$z."' and YEAR(create_time)='".$thn_skr."'")->row();
  
  ?>
  
  
<li style="list-style-type:none;">
<a href="<?php echo site_url();?>infoprajurit/arsip/<?php echo $z;?>/<?php echo $thn_skr;?>" style="color:#a7cf48; font-weight:bold;">
<?php echo $bulanz." ".$thn_skr; ?> (<?php echo $jml_berita->jml_beritanya; ?>)
</a>

<?php if ($bln_skr==$z) {  ?>
<ul>

<?php
$sql_blz = "select * from news where category=3 and publish='Y' and MONTH(create_time)='".$bln_skr."' and YEAR(create_time)='".$thn_skr."' order by id_news desc limit 4";
$query_blz= $this->db->query($sql_blz);
foreach($query_blz->result_array() as $row_blz){ 
 ?>
<li style="list-style-type:none;"> 
<a href="<?php echo site_url()."infoprajurit/detail/".$row_blz['id_news']."-".str_replace(" ","-",$row_blz['news_name'])?>" style="color:#a7cf48; text-decoration:underline;">- 


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
 
	


  
  <hr>
  
  
  
  
  
 
  
  
  
  
  
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
  $jml_berita = $this->db->query("select count(*) as jml_beritanya from news where category=3  and  MONTH(create_time)='".$x."' and YEAR(create_time)='".$setahun_ke_belakang."'")->row();
  
  ?>
  
  
<li style="list-style-type:none;">
<a href="<?php echo site_url();?>infoprajurit/arsip/<?php echo $x;?>/<?php echo $setahun_ke_belakang;?>" style="color:#a7cf48; font-weight:bold;">
<?php echo $bulan." ".$setahun_ke_belakang; ?> (<?php echo $jml_berita->jml_beritanya; ?>)
</a>


</li>
 
  <?php } ?>
</ul>
 
 
 
		
		
  
  
  </div>
  <br />
  <div style="height:500px; padding-top:10px; margin-right:20px; background-color:#186b13; padding-left:10%; padding-right:10%;">
  <center><p class="lead" style="font-weight:bold;"><?php echo $berita_populerx; ?></p></center>
  <hr />
 
 <ul>
 
<?php
$sql_bp = "select * from news where category=3 and publish='Y' order by be_read  desc limit 4";
$query_bp= $this->db->query($sql_bp);
foreach($query_bp->result_array() as $row_bp){ 
 ?>

<li style="list-style-type:none">

<a href="<?php echo site_url()."infoprajurit/detail/".$row_bp['id_news']."-".str_replace(" ","-",$row_bp['news_name'])?>" style="color:#a7cf48; text-decoration:underline;">
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


</div>

