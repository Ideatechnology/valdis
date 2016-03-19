<?php
// var global
if ($this->session->userdata('sesi_bahasa')=="ind") {
$berandax="BERANDA";
$profilx="PROFIL";
$sejarahx="SEJARAH";
$beritax="BERITA";
$galerix="GALERI";
$kontakx="KONTAK";
$searchx="Pencarian";


} elseif ($this->session->userdata('sesi_bahasa')=="eng")  {
$berandax="HOME";
$profilx="PROFILE";
$sejarahx="HISTORY";
$beritax="NEWS";
$galerix="GALLERY";
$kontakx="CONTACT";
$searchx="Search";

} else {
$berandax="BERANDA";
$profilx="PROFIL";
$sejarahx="SEJARAH";
$beritax="BERITA";
$galerix="GALERI";
$kontakx="KONTAK";
$searchx="Pencarian";

}


?>
</div>
<style>
.separator_footer{
	background-image:url(<?php echo base_url()?>assets_frontend_revisi/pembatas.png); background-repeat:no-repeat;
	text-align: center;
	background-position: right top;
	min-height:200px;
}
.separator_footer a{
	color:#dfe3aa;
}
.separator_footer_none a{
	color:#dfe3aa;
}
.separator_footer_none{
	text-align: center;

}

@media screen and (max-width: 780px) {
	.separator_footer{
			min-height:100px;
			margin-top: 20px;
	}

}

</style>
<div style="background-color:#052903;padding-top:10px;padding-bottom:20px;">
	<div class="container">

<div class="row">
	<div class="col-md-10">
		<div class="row">
			<div class="col-md-12">
<img src="<?php echo base_url()?>assets_frontend_revisi/footer.png" class="img-responsive">
<br />
			</div>
<div class="col-md-2 col-xs-6 separator_footer" style="color:#ebec22;">
<div >
	<strong><?php echo strtoupper($profilx); ?></strong><BR><BR>
	<em>
		<?php
										$sql = "select * from pages where category=1 order by  id_pages asc";
										$profil_menu = $this->db->query($sql)->result();

										foreach($profil_menu as $profil_menu2){
											 ?>
	    <a href="<?php echo base_url()?>pages/read/<?php echo $profil_menu2->id_pages; ?>-<?php echo str_replace(" ","-",$profil_menu2->pages_name); ?>" ><span>

													<?php
									if ($this->session->userdata('sesi_bahasa')=="ind") { echo $profil_menu2->pages_name;} elseif ($this->session->userdata('sesi_bahasa')=="eng"){echo $profil_menu2->pages_name_eng;} else {echo $profil_menu2->pages_name;}
									?>
											</span></a>
		<br>

		<?php } ?>

		<a href="<?php echo site_url();?>pejabat" >
										<?php
									if ($this->session->userdata('sesi_bahasa')=="ind") { echo "Pejabat";} elseif ($this->session->userdata('sesi_bahasa')=="eng"){echo "Official";} else {echo "Pejabat";}
									?>
										</a>
	</em>
</div>

</div>

<div class="col-md-3 col-xs-6 separator_footer" style="color:#ebec22;">
	<div class="">
  <strong><?php echo $sejarahx; ?></strong><BR /><BR />
		<em>
	<?php
									$sql = "select * from pages where category=2 order by  id_pages asc";
									$sejarah_menu = $this->db->query($sql)->result();

									foreach($sejarah_menu as $sejarah_menu2){
										 ?>

	<a href="<?php echo site_url();?>pages/read/<?php echo $sejarah_menu2->id_pages; ?>-<?php echo str_replace(" ","-",$sejarah_menu2->pages_name); ?>" ><span>

											<?php
								if ($this->session->userdata('sesi_bahasa')=="ind") { echo $sejarah_menu2->pages_name;} elseif ($this->session->userdata('sesi_bahasa')=="eng"){echo $sejarah_menu2->pages_name_eng;} else {echo $sejarah_menu2->pages_name;}
								?>

										</span></a>
	<br>

	<?php } ?>


		</em>
	</div>
</div>

<div class="col-md-2 col-xs-6  separator_footer" style="color:#ebec22;">
	<div class="">
	<strong><?php echo $beritax; ?></strong><BR><BR>
	<em>
	<a href="<?php echo site_url();?>news" >
							<?php
							if ($this->session->userdata('sesi_bahasa')=="ind") { echo "Berita & Kegiatan";} elseif ($this->session->userdata('sesi_bahasa')=="eng"){echo "NEWS &amp; EVENTS";} else {echo "Berita & Kegiatan";}
							?>

							</a><br>
	<a href="<?php echo site_url();?>artikel" >
															<?php
							if ($this->session->userdata('sesi_bahasa')=="ind") { echo "Artikel";} elseif ($this->session->userdata('sesi_bahasa')=="eng"){echo "ARTICLE";} else {echo "Artikel";}
							?>
							</a><br>
		 <a href="<?php echo site_url();?>infoprajurit" >
															<?php
							if ($this->session->userdata('sesi_bahasa')=="ind") { echo "Info Prajurit";} elseif ($this->session->userdata('sesi_bahasa')=="eng"){echo "SOLDIER INFORMATION";} else {echo "Info Prajurit";}
							?>
							</a><br>
					<a href="<?php echo site_url();?>siaranpers" >								<?php
							if ($this->session->userdata('sesi_bahasa')=="ind") { echo "Siaran Pers";} elseif ($this->session->userdata('sesi_bahasa')=="eng"){echo "PERS CONFERENCE";} else {echo "Siaran Pers";}
							?></a><br>
	</em>
</div>
</div>
<div class="col-md-2 col-xs-6 separator_footer" style="color:#ebec22;">
	<strong><?php echo $galerix ?></strong><BR><BR>
	<em>
	<a href="<?php echo site_url();?>photogallery" >
															<?php
							if ($this->session->userdata('sesi_bahasa')=="ind") { echo "Foto";} elseif ($this->session->userdata('sesi_bahasa')=="eng"){echo "PHOTOS";} else {echo "Foto";}
							?>
							</a><br>
	<a href="<?php echo site_url();?>videogallery">
															<?php
							if ($this->session->userdata('sesi_bahasa')=="ind") { echo "Video";} elseif ($this->session->userdata('sesi_bahasa')=="eng"){echo "VIDEOS";} else {echo "Video";}
							?>
							</a>
	</em>
</div>
<div class="col-md-2 col-xs-12 separator_footer_none" style="color:#ebec22;">
	<div class="">
	<strong>KONTAK</strong><BR><BR>
	<a href="<?php echo site_url();?>contact">
															<?php
							if ($this->session->userdata('sesi_bahasa')=="ind") { echo "Kontak Kami";} elseif ($this->session->userdata('sesi_bahasa')=="eng"){echo "Contact Us";} else {echo "Kontak Kami";}
							?>
							</a>
	</div>
</div>
</div>

</div>



<div class="col-md-2 col-xs-12" style="text-align:center">
<br />
	<a href="http://info.flagcounter.com/q5uX"><img src="http://s06.flagcounter.com/countxl/q5uX/bg_B8B8B8/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_Visitors/labels_0/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="1"></a>


</div>


</div>

</div>
</div>








</body>
</html>
