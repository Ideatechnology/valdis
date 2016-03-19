<img src="<?php echo base_url(); ?>assets_frontend_revisi/label/labelvidio.png" class="img-responsive" />
<hr />

<!--<script src="./jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.7.min.js"></script>-->
	<script src="<?php echo base_url();?>assets_frontend_revisi/youmax-master/js/youmax.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets_frontend_revisi/youmax-master/css/youmax.css"/>

	<script type="text/javascript">
	
		function goClicked() {
			$('#youmax').empty().append(' loading ...');
			
			$('#youmax').youmax({
				apiKey:'AIzaSyDEm5wGLsWi2G3WG40re-DAJcWioQSpJ6o',
				youTubeChannelURL:$('#youTubeChannelUrl').val(),
				
				youTubePlaylistURL:$('#youTubePlaylistUrl').val(),
				youmaxDefaultTab:"UPLOADS",
				youmaxColumns:3,
				showVideoInLightbox:false,
				maxResults:15,
				
			});

			//youTubeChannelURL=$('#youTubeChannelUrl').val();
			//youTubePlaylistURL=$('#youTubePlaylistUrl').val();
		}

	</script>

	
	<style>

      body {
        font-family: Calibri;
        font-size: 14px;
		text-align:center;
      }
	  
	  /*#youmax{width:100% !important;}
	  #youmax-video-list-div{background-color:rgb(53,53,53) !important;}
	  #youmax-tabs{background-color:rgb(53,53,53) !important;}
	  #youmax-header{background-color:black !important;}
	  .youmax-video-list-title{color:white !important;}
	  .youmax-video-list-views{color:green !important;}*/
	  
		
	</style>

<div id="youmax"></div>


<script>
		$('#youmax').youmax({
			apiKey:'AIzaSyDEm5wGLsWi2G3WG40re-DAJcWioQSpJ6o',
			youTubeChannelURL:"https://www.youtube.com/channel/UCqWz5ZRmbGizZrTXwzc1Kcw",
			
			youTubePlaylistURL:"http://www.youtube.com/playlist?list=UUqWz5ZRmbGizZrTXwzc1Kcw",
			youmaxDefaultTab:"FEATURED",
			youmaxColumns:3,
			showVideoInLightbox:false,
			maxResults:15,
			
		});
		
	
	</script>