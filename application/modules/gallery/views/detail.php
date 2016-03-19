<a id='back_to_top' href='#'><span class="fa-stack"><i class="fa fa-angle-up " style=""></i></span></a>
<div class="content">
	<div class="meta">
		<div class="seo_title">
			Gallery  
		</div>
		<span id="qode_page_id">5791</span>
		<div class="body_classes">
			page,page-id-5791,page-child,parent-pageid-5775,page-template,page-template-full_width-php,ajax_fade,page_not_loaded,,,,wpb-js-composer js-comp-ver-3.6.12,vc_responsive
		</div>
	</div>
	<div class="content_inner ">
		<script>			var page_scroll_amount_for_sticky = 180;			</script>
		<div class="title title_on_bottom has_background" style="background-size:1920px auto;background-image:url(<?php echo base_url(); ?>assets_frontend/wp-content/uploads/2013/12/pattern3.gif);height:180px;">
			<div class="image not_responsive">
				<img src="<?php echo base_url(); ?>assets_frontend/wp-content/uploads/2013/12/pattern3.gif" alt="&nbsp;"/>
			</div>
			<div class="title_holder">
				<div class="container">
					<div class="container_inner clearfix">
						<div class="title_on_bottom_wrap">
							<div class="title_on_bottom_holder">
								<div class="title_on_bottom_holder_inner">
									<h1 style="color:#ffffff"><span>Gallery </span></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="full_width">
			<div class="full_width_inner">
				<div class="wpb_row vc_row-fluid" style="text-align:left;">
					<div class="vc_span12 wpb_column column_container">
						<div class="wpb_wrapper">
							<div class="separator transparent center " style="margin-top:30px;margin-bottom:30px;">
							</div>
							<div class='projects_holder_outer v5'>
								<div class='filter_outer'>
									<div class='filter_holder'>
										<ul>
											<li class='filter' data-filter='all'><span><a href="<?php echo site_url(); ?>gallery">All</a></span></li>
<?php foreach($kategori as $kategori2){ ?>
											<li class='filter' data-filter='<?php echo $kategori2[' albumphotovideo_name'] ?>'><span>
											<a href="<?php echo base_url() ?>gallery/album/<?php echo $kategori2['id_albumphotovideo']; ?>"><?php echo $kategori2['albumphotovideo_name'] ?></a>
											
											</span></li>
<?php }?>
										</ul>
									</div>
								</div>
								<div class='projects_holder clearfix v5 hover_text no_space'>
<?php foreach($gallery as $gallery2){ ?>
<?php $linksArray=explode('.', $gallery2['file_foto']);							$data= array_filter($linksArray);							if(!empty($data)){							$thumb = $data[0]."_thumb.".$data[1];									}else{							$thumb ='';					}?>


									<article class='mix  Photos '>
									<div class='image_holder'>
										<?php if ($gallery2['type']==1){
										?>
										<span class='image'><img width="707" height="530" src="<?php	echo base_url()?>assets_frontend/uploads/videoplayer.png
										" class="attachment-full wp-post-image" alt="<?php echo $gallery2['albumphotovideo_gallery_name'] ?>
										" /> </span>
										<?php 
										
										
										}else{ ?>
										
										
										<span class='image'><img width="707" height="530" src="<?php echo base_url()?>uploads/albumphotovideo/<?php echo $thumb ?>
										" class="attachment-full wp-post-image" alt="<?php echo $gallery2['albumphotovideo_gallery_name'] ?>
										" /> </span>
										
										<?php } ?>
										
										
										<div class='hover_feature_holder'>
											
											
											<span class="hover_feature_holder_icons"><span class="hover_feature_holder_icons_outer"><span class="hover_feature_holder_icons_inner">
											<?php if ($gallery2['type']==1){
											?>
											<a href="<?php echo $gallery2['link_youtube']?>" rel="prettyPhoto" title="<?php echo $gallery2['albumphotovideo_gallery_name']  ?>"><img width="70px" height="70px" src="<?php	echo base_url()?>assets_frontend/uploads/search.png"  /></a>
											
												
											<?php 
											
											}else{ ?>
											
											
											<a class='lightbox' title='<?php echo $gallery2['albumphotovideo_gallery_name'] ?>' href='<?php echo base_url()?>uploads/albumphotovideo/<?php echo $gallery2['file_foto'] ?>
											' data-rel='prettyPhoto[pretty_photo_gallery]'><i  class='fa fa-search fa-2x'></i></a>
											
											<?php } ?>
											
											
											
											
											
											</span></span></span>
											
											
											
											<div class="hover_feature_holder_title">
												<div class="hover_feature_holder_title_inner">
													<h4 class="portfolio_title"><a href="#"><?php echo $gallery2['albumphotovideo_gallery_name'] ?>
													</a></h4>
													<span class="project_category"><?php echo $gallery2['kategori'] ?>
													</span>
												</div>
											</div>
										</div>
									</div>
									</article>
									
									
									<?php } ?>
									<div class='filler'>
									</div>
									<div class='filler'>
									</div>
								
								</div>
								<div class="portfolio_paging">
									<!-- <span rel="2" class="load_more tiny"><a href="page/2/index.html">SHOW MORE</a></span> -->
									<?php// echo $this->pagination->create_links(); ?>
								</div>
							</div>
							<div class="separator transparent center " style="margin-top:20px;margin-bottom:20px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content_bottom">
		</div>
	</div>
</div>
</div>
</div>