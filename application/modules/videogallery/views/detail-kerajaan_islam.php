
        <!-- wrapper -->

        <div class="wrapper"> 
        
        <div class="kopa-breadcrumb">
                <div class="wrapper clearfix">
                    <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                        <a itemprop="url" href="index-2.html">
                            <span itemprop="title">Beranda</span>
                        </a>
                    </span>
                    &nbsp;|&nbsp;
                    <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                        <a itemprop="url" class="current-page">
                            <span itemprop="title">Visi &amp; Misi</span>
                        </a>
                    </span>
                </div>
            </div>
            <!--/end .breadcrumb-->
        	
                   <img src="<?php echo base_url()?>assets_frontend/images/kerajaan_islam/label.png" alt="">

            <div class="widget kopa-point-widget">

                   <img src="<?php echo base_url()?>assets_frontend/images/visimisi/Visi%20Misi.jpg" alt="">
            </div>
           

            <!--<div class="widget kopa-contact-form-widget">-->
            <div class="widget kopa-point-widget">
                
                <article class="entry-item" style="text-align: justify;">
				<p>
                            	<?php 
								   $sql = "select * from pages where publish='Y' and id_pages='".$id."'";   
								   $query = $this->db->query($sql)->row_array();
								   echo $query['pages_desc'];
								?> 
								
                                <br /> 
                                  <img src="<?php echo base_url()?>assets_frontend/images/visimisi/list.png" alt=""></center>
                                <br />                       
                                  </p>                   
                        </article> 

            </div>
            <!-- widget -->
        
        </div>
        <!-- wrapper -->

    </div>
    <!-- main-content -->

   