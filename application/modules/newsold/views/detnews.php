





<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>





 
 <div class="wrapper"> 
 
<img style="" src="<?php echo base_url()?>assets_frontend/images/berita/label.png" alt="">



<div class="row" style="margin-left:10px;">
  <div class="col-md-8">
  
                              <div style=" padding:5%;" class="widget kopa-article-list-widget article-list-1">
                               		<div class="inner">
					<div class="post_date">
						
						<span><div class="fb-share-button" data-href="<?php echo current_url() ?>" data-layout="button"></div></span>
						<span><a href="#" class="btn btn-xs btn-primary" onclick="popUp=window.open('https://twitter.com/share', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i><span class='share_text'>Tweet</span></a></span>
						<span><a href="#" class="btn btn-xs btn-danger" onclick="popUp=window.open('https://plus.google.com/share', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><i class="fa fa-google-plus"></i><span class='share_text'>Share</span></a></span>
					
					</div>
											
												</div>
							   
							   <center> <h3><?php echo $detnews['news_name'] ?></h3></center>
							   
							   <p><?php echo $detnews['news_desc'] ?></p>
							   
							   <!-- FACEBOOK COMMENT -->
			<div style="width:100%; background-color:#006600;">
			<div class="fb-comments" mobile="false" data-width="100%" data-href="<?php echo  current_url(); ?>" data-numposts="5" data-colorscheme="light" style=""></div>
			<style>.fb-comments, .fb-comments iframe[style], .fb-like-box, .fb-like-box iframe[style] {width: 100% !important;}
.fb-comments span, .fb-comments iframe span[style], .fb-like-box span, .fb-like-box iframe span[style] {width: 100% !important;}
</style>
			</div>
		<!-- FACEBOOK COMMENT -->
			
                                
                            </div>
                            <!-- widget --> 
  
  </div>
  <div  class="col-md-4">
  
  <div style="height:400px;  padding:10px; margin-right:20px; padding-left:10%; padding-right:10%; background-color:#186b13;">
  <center><p class="lead" style="font-weight:bold;">Berita Lainya</p></center>
  <hr />
	<ul>
		
		<?php foreach($detlainya as $lainya2){ ?>
		<li> 
		<a style="color:white;" href="<?php echo site_url()."news/detil/".$lainya2['id_news']."-".str_replace(" ","-",$lainya2['news_name'])?>" >
		<?php echo $lainya2['news_name'] ?>
		</a>
		</li>
		<?php } ?>
	</ul>
  
  
  </div>
  <br />
  <div style="height:400px; padding-top:10px; margin-right:20px; background-color:#186b13; padding-left:10%; padding-right:10%;">
  <center><p class="lead" style="font-weight:bold;">Berita Terpopuler</p></center>
  <hr />
 <ul>
		
		<?php foreach($detlainya as $lainya2){ ?>
		
		<li> 
		<a style="color:white;" href="<?php echo site_url()."news/detil/".$lainya2['id_news']."-".str_replace(" ","-",$lainya2['news_name'])?>" >
		<?php echo $lainya2['news_name'] ?>
		</a>
		</li>
		
		<?php } ?>
	</ul>
  </div>
  
  
			
  
  </div>
</div>


</div>








		