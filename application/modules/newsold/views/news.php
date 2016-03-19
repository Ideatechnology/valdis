	
 
 <div class="wrapper"> 
<img style="" src="<?php echo base_url()?>assets_frontend/images/berita/label.png" alt="">



<div class="row" style="margin-left:10px;">
  <div class="col-md-8">
  
                              <div style=" padding-top:10px;" class="widget kopa-article-list-widget article-list-1">
                                <ul class="clearfix">
                                	
									<?php foreach($news as $news2){ ?>
									<li>
                                        <article class="entry-item">
                                            <div class="entry-content">
                                                <div class="content-top">
                                                    <h4 class="entry-title">

													<?php echo $news2['news_name']; ?></h4>
                                                </div>
                                                <footer>
                                                    <p class="tgl">
 <?php echo $news2['create_time']; ?></p>
                                                </footer>
                                                <p><?php echo $news2['news_desc']; ?></p> 
                                                <footer>
                                                    <p class="entry-author"><a  href="<?php echo site_url();?>news/detil/<?php echo $news2['id_news']; ?>-<?php echo str_replace(" ","-",$news2['news_name']); ?>" class="btn btn-success">Selanjutnya.. </a></p>
                                                </footer>
                                            </div>                                            
                                        </article>
                                    </li>  

									<?php }?>
                                                                                                                                                                          
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
  
  <div style="height:400px;  padding:10px; margin-right:20px; padding-left:10%; padding-right:10%; background-color:#186b13;">
  <center><p class="lead" style="font-weight:bold;">Berita Lainya</p></center>
 

 <hr />
	<ul>
		
		<?php foreach($news as $lainya){ ?>
		<li> 
		<a style="color:white;" href="<?php echo site_url()."news/detil/".$lainya['id_news']."-".str_replace(" ","-",$lainya['news_name'])?>" >
		<?php echo $lainya['news_name'] ?>
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
		
		<?php foreach($news as $lainya){ ?>
		
		<li> 
		<a style="color:white;" href="<?php echo site_url()."news/detil/".$lainya['id_news']."-".str_replace(" ","-",$lainya['news_name'])?>" >
		<?php echo $lainya['news_name'] ?>
		</a>
		</li>
		
		<?php } ?>
	</ul>
  </div>
  
  </div>
</div>


</div>

