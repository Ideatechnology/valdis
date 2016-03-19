<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>CMS-KODAM XVI PATTIMURA</title>



	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-responsive.min.css">
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/ace.min.css" /> -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/datepicker/datepicker.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/themes.css">


	<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/bootbox/jquery.bootbox.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/wizard/jquery.form.wizard.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="<?=base_url()?>assets/js/eakroko.min.js"></script>
	<script src="<?=base_url()?>assets/js/application.min.js"></script>
	<script src="<?=base_url()?>assets/js/demonstration.min.js"></script>
	<!-- Custom file upload -->
	<script src="<?=base_url()?>assets/js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
	<script src="<?=base_url()?>assets/js/ace-elements.min.js"></script>
	<script src="<?=base_url()?>assets/js/ace.min.js"></script>
	<script src="<?=base_url()?>assets/js/fuelux/fuelux.wizard.min.js"></script>
	<script src="<?=base_url()?>assets/js/ajaxfileupload.js"></script>
	<script src="<?=base_url()?>assets/js/func.js"></script>
	
	<!--<link rel="shortcut icon" href="<?=base_url()?>assets/img/logobandung.png" />
	<link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/img/apple-touch-icon-precomposed.png" />
	-->
	<link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico">
	
	
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/datatable/TableTools.css">
	<!-- dataTables -->
	<script src="<?=base_url()?>assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/TableTools.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/ColReorderWithResize.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/ColVis.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/jquery.dataTables.grouping.js"></script>
	
	
	
	<!-- colorbox -->
	<script src="<?=base_url()?>assets/js/plugins/colorbox/jquery.colorbox-min.js"></script>
	<!-- masonry -->
	<script src="<?=base_url()?>assets/js/plugins/masonry/jquery.masonry.min.js"></script>
	<!-- imagesloaded -->
	<script src="<?=base_url()?>assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
		<!-- <script src="<?=base_url()?>assets/js/plugins/chosen/chosen.jquery.min.js"></script>-->
        <script src="<?=base_url()?>assets/js/plugins/ckeditor/ckeditor.js"></script>

</head>

<!-- <body class="theme-satblue" data-theme="theme-satblue"> -->
<body class="theme-satgreen" data-theme="theme-satgreen">

<div class="container-fluid nav-hidden" id="content">
		
		<div id="row-fluid"></div> 
		
		<div id="main" style="margin-left:0px;">
			<div class="container-fluid">
				
				
				<?php
					ini_set('memory_limit', '512M');
					echo $contents;
				?>
				
			
				
				
			</div>
		</div></div>
		
	</body>

	</html>