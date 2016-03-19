  
  <?php 
  $id = substr($this->uri->segment(3),0,2);
  
  if($id=='1-'){
	include 'detail-selamatdatang.php';  
  }
  
  if($id=='2-'){
	include 'detail-visimisi.php';  
  }
  
  if($id=='3-'){
	include 'detail-kodeetik.php';  
  }

  if($id=='4-'){
	include 'detail-satuan.php';  
  }
  
   if($id=='5-'){
	include 'detail-sejarah_maluku.php';  
  }
  
   if($id=='6-'){
	include 'detail-kerajaan_islam.php';  
  }
  
    if($id=='7-'){
	include 'detail-masa_penjajahan.php';  
  }
  
   if($id=='8-'){
	include 'detail-era_kemerdekaan.php';  
  }
  
  if($id=='9-'){
	include 'detail-konflik_komunal.php';  
  }
  
   if($id=='10'){
	include 'detail-maluku_bersama_kodam.php';  
  }
  
  ?>