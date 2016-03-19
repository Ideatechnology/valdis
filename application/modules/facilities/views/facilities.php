<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<a id='back_to_top' href='#'>
		<span class="fa-stack">
			<i class="fa fa-angle-up " style=""></i>
		</span>
	</a>

<div class="content">
							<div class="meta">				
											<div class="seo_title">Lembah Hijau Hotel Resort |   Facilities</div>
																				<span id="qode_page_id">29</span>
					<div class="body_classes">single,single-post,postid-29,single-format-gallery,ajax_fade,page_not_loaded,,,,wpb-js-composer js-comp-ver-3.6.12,vc_responsive</div>
				</div>
						<div class="content_inner  ">
															<script>
					var page_scroll_amount_for_sticky = 180;
					</script>
													<div class="title title_on_bottom has_fixed_background " style=" margin-top:7%; height:200px; background-size:100% auto;background-image:url(<?php
													if($facility_header){
													echo base_url()."uploads/facilities/".$facility_header;
													}else{
													echo base_url()."assets_frontend/uploads/2013/12/patternwhite.gif";
													
													}?>
													);">
						<div class="image not_responsive"><img src="<?php echo base_url()?>assets_frontend/uploads/2013/12/patternwhite.gif" alt="&nbsp;" /> </div>
													<div class="title_holder">
								<div class="container">
									<div class="container_inner clearfix">
																					<div class="title_on_bottom_wrap">
												<div class="title_on_bottom_holder">
													<div class="title_on_bottom_holder_inner" >
                                                        <h1 style="color:#ffffff" ><? echo $facility_name;?></h1>
													</div>
												</div>
											</div>
																			</div>
								</div>
							</div>
											</div>
								
								<div class="container">
					<div class="container_inner">
				
											<div class="blog_holder blog_single">
								<article id="post-29" class="post-29 post type-post status-publish format-gallery hentry category-photography tag-stress instock">
			<div class="post_info">
				<div class="inner">
					
										<div class="blog_share"><span class="social_share_holder"><span class="social_share_icon"></span><span class="social_share_title">Share</span><div class="social_share_dropdown "><ul><li class="share_title"><span>Share on</span></li><li class="facebook_share"><a href="#" onclick=	"window.open('https://facebook.com/sharer.php?u=http://<?php  echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)"><i class="fa fa-facebook"></i><span class='share_text'>Share</span></a></li><li class="twitter_share"><a href="#" onclick="popUp=window.open('https://twitter.com/share', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i><span class='share_text'>Tweet</span></a></li><li  class="google_share"><a href="#" onclick="popUp=window.open('https://plus.google.com/share', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><i class="fa fa-google-plus"></i><span class='share_text'>Share</span></a></li></ul></div></span></div>				</div>
			</div>
			<div class="post_content_holder">
				<div class="post_image">
					<div class="flexslider">
						<ul class="slides">
						
						<?php
													$sql2 = "select file_foto, facility_gallery_name from facility_gallery  where id_facility='".$id_facility."'";
												
												$query = $this->db->query($sql2);
												echo "<center>Image is not available..</center>";
												//echo $sql2;
												foreach($query->result_array() as $row){ ?>
												<li class="slide">
													<img width="1200" height="675" src="<?php echo base_url()?>uploads/facilities/<?php echo  $row['file_foto']; ?>" class="attachment-full"  alt="<?php echo $row['facility_gallery_name']; ?>" />
												</li>	
												<?php } ?>
																
																
														</ul>
					</div>
				</div>
				<div class="post_content_holder">
					<div class="post_text">
						<h2><?php echo $facility_name; ?></h2>
						
						<p><strong></p>
<p></strong></p>
<?php echo $facility_desc; ?>
					</div>
				</div>
			</div>
		

				
</article>						
 
								
							


 
						
										</div>
<br />								
			<!-- FACEBOOK COMMENT -->
			<div style="width:100%">
			<div class="fb-comments" mobile="false" data-width="100%" data-href="<?php echo  current_url(); ?>" data-numposts="5" data-colorscheme="light" style=""></div>
			<style>.fb-comments, .fb-comments iframe[style], .fb-like-box, .fb-like-box iframe[style] {width: 100% !important;}
.fb-comments span, .fb-comments iframe span[style], .fb-like-box span, .fb-like-box iframe span[style] {width: 100% !important;}
</style>
			</div>
		<!-- FACEBOOK COMMENT -->
				</div>
			</div>						
	


				<div class="content_bottom" >
					</div>
				
	</div>
</div>
</div>
</div>