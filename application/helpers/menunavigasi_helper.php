<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	function make_menu(){
		$CI =& get_instance();
		$menunav = '';
		$s_access = $CI->session->userdata('s_access');
		$menu = $CI->session->userdata('menu'); 
		$sql = " select a.* 
				from tb_menu a
				left join tb_group_menu b
				on (a.id_menu = b.id_menu)
				where a.id_parrent = 0
				and b.id_user_group = $s_access
				and a.status = 1
				order by a.urutan";
		//echo $sql;
		$query = $CI->db->query($sql);
		$i=0;
		foreach($query->result_array() as $row)
		{
			if(toogle($row['id_menu'],$s_access) > 0){
				$class = ($menu==$row['id_menu'])?'active':'';
				$menunav .= "<li class='".$class."'>";
				$menunav .= '<a href="'.base_url().$row['link'].'" data-toggle="dropdown" class="dropdown-toggle"><span>'.$row['nama_menu'].'</span><span class="caret"></span></a>';
			}else{
				$class = ($menu==$row['id_menu'])?'active':'';
				$menunav .= "<li class='".$class."'>";
				$menunav .= '<a href="'.base_url().$row['link'].'"><span>'.$row['nama_menu'].'</span></a>';
			}
			$menunav .=	formatTree($row['id_menu'],$s_access);
			$menunav .= "</li>";
			$i++;
		}
		
		echo $menunav;
	}		
	
	function formatTree($id_parrent, $s_access){
		$CI =& get_instance();
		$sql = " select a.* 
				from tb_menu a
				left join tb_group_menu b
				on (a.id_menu = b.id_menu)
				where a.id_parrent = $id_parrent 
				and b.id_user_group = $s_access
				and a.status = 1
				order by a.urutan";
		$query = $CI->db->query($sql);
		$menunav = "<ul class='dropdown-menu'>";
        foreach($query->result_array() as $item){
			
			if(toogle($item['id_menu'],$s_access) > 0){
				$menunav .= "<li class='dropdown-submenu'>";
				$menunav .= '<a href="'.base_url().$item['link'].'" data-toggle="dropdown" class="dropdown-toggle">'.$item['nama_menu'].'</a>';
			}else{
				$menunav .= "<li>";
				$menunav .= '<a href="'.base_url().$item['link'].'">'.$item['nama_menu'].'</a>';
			}
			$menunav.= formatTree($item['id_menu'],$s_access);
			$menunav.= "</li>";
			
        }

      $menunav.= "</ul>";
	  return $menunav;
    }
	
	function toogle($id_parrent, $s_access){
		$CI =& get_instance();
		$sql = " select a.* 
				from tb_menu a
				left join tb_group_menu b
				on (a.id_menu = b.id_menu)
				where a.id_parrent = $id_parrent 
				and b.id_user_group = $s_access
				and a.status = 1
				order by a.urutan";
		$query = $CI->db->query($sql);
		return $query->num_rows();
    }

	function menu_referensi(){
		$CI =& get_instance();
		$menuref = $CI->session->userdata('menuref'); 
		$nm_ref = array(1=>'Agama','');
		$menunav = '<div class="subnav">';
		$menunav .= '<div class="subnav-title">';
		$menunav .= '<a href="#" class="toggle-subnav"><i class="icon-angle-down"></i><span>Menu Referensi</span></a>';
		$menunav .= '</div>';
		$menunav .= '<ul class="subnav-menu">';
		$sql = $CI->db->query('select * from tb_menu_referensi');
		foreach($sql->result() as $row){
			$mn = 'ref'.$row->id;
			$menunav .= '<li class="'.(($menuref==$mn)?'active':'').'"><a href="'.base_url().'administrator/referensi/list_data/'.$row->id.'">'.$row->menu_referensi.'</a></li>';
		}
		$menunav .= '</ul>';
		$menunav .= '</div>';
		
		echo $menunav;
	}	

	function menu_pegawai(){
		$CI =& get_instance();
		$snip = $CI->session->userdata('skeyview'); 
		$quer = $CI->db->query("select kjkel from peg_identpeg where nip = '".$snip."'")->row_array();
		$kjkel = $quer['kjkel'];
		$menu1 = $CI->session->userdata('menu1'); 
		$side_left = $CI->session->userdata('side_left'); 
		$menunav = '<div class="subnav '.(($side_left=='1')?'':'subnav-hidden').'" style="border-bottom:1px solid #000;">';
		$menunav .= '<div class="subnav-title" style="border-bottom:1px solid #CCC;">';
		$menunav .= '<a href="#" class="toggle-subnav"><i class="icon-angle-right"></i><span>Data Induk</span></a>';
		$menunav .= '</div>';
		$menunav .= '<ul class="subnav-menu">';
		$menunav .= '<li class="'.(($menu1=='101')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(101);">Identitas Pegawai</a></li>';
		$menunav .= '<li class="'.(($menu1=='102')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(102);">CPNS</a></li>';
		$menunav .= '<li class="'.(($menu1=='103')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(103);">PNS</a></li>';
		$menunav .= '<li class="'.(($menu1=='104')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(104);">Jabatan Akhir</a></li>';
		$menunav .= '<li class="'.(($menu1=='105')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(105);">Pangkat Akhir</a></li>';
		$menunav .= '<li class="'.(($menu1=='106')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(106);">Gaji Berkala</a></li>';
		$menunav .= '<li class="'.(($menu1=='107')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(107);">Pendidikan Akhir</a></li>';
		$menunav .= '</ul>';
		$menunav .= '</div>';
		$menunav .= '<div class="subnav '.(($side_left=='2')?'':'subnav-hidden').'" style="border-bottom:1px solid #000;">';
		$menunav .= '<div class="subnav-title" style="border-bottom:1px solid #CCC;">';
		$menunav .= '<a href="#" class="toggle-subnav"><i class="icon-angle-right"></i><span>Riwayat Pekerjaan</span></a>';
		$menunav .= '</div>';
		$menunav .= '<ul class="subnav-menu">';
		$menunav .= '<li class="'.(($menu1=='201')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(201);">Pangkat</a></li>';
		$menunav .= '<li class="'.(($menu1=='202')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(202);">Jabatan</a></li>';
		$menunav .= '<li class="'.(($menu1=='203')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(203);">Pengalaman Kerja</a></li>';
		$menunav .= '<li class="'.(($menu1=='204')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(204);">Organisasi</a></li>';
		$menunav .= '<li class="'.(($menu1=='205')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(205);">Tanda Jasa</a></li>';
		$menunav .= '<li class="'.(($menu1=='206')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(206);">DPPP</a></li>';
		$menunav .= '<li class="'.(($menu1=='207')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(207);">Hukuman Disiplin</a></li>';
		$menunav .= '<li class="'.(($menu1=='208')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(208);">Cuti</a></li>';
		$menunav .= '<li class="'.(($menu1=='209')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(209);">Tugas Luar Negeri</a></li>';
		$menunav .= '<li class="'.(($menu1=='210')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(210);">Bahasa</a></li>';
		$menunav .= '</ul>';
		$menunav .= '</div>';
		$menunav .= '<div class="subnav '.(($side_left=='3')?'':'subnav-hidden').'" style="border-bottom:1px solid #000;">';
		$menunav .= '<div class="subnav-title" style="border-bottom:1px solid #CCC;">';
		$menunav .= '<a href="#" class="toggle-subnav"><i class="icon-angle-right"></i><span>Riwayat Pendidikan</span></a>';
		$menunav .= '</div>';
		$menunav .= '<ul class="subnav-menu">';
		$menunav .= '<li class="'.(($menu1=='301')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(301);">Pendidikan Umum</a></li>';
		$menunav .= '<li class="'.(($menu1=='302')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(302);">Diklat Struktural</a></li>';
		$menunav .= '<li class="'.(($menu1=='303')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(303);">Diklat Fungsional</a></li>';
		$menunav .= '<li class="'.(($menu1=='304')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(304);">Diklat Teknis</a></li>';
		$menunav .= '<li class="'.(($menu1=='305')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(305);">Penataran</a></li>';
		$menunav .= '<li class="'.(($menu1=='306')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(306);">Seminar</a></li>';
		$menunav .= '<li class="'.(($menu1=='307')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(307);">Kursus</a></li>';
		$menunav .= '<li class="'.(($menu1=='308')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(308);">Diklat Pemerintahan</a></li>';
		$menunav .= '<li class="'.(($menu1=='309')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(309);">Penyaji Seminar</a></li>';
		$menunav .= '<li class="'.(($menu1=='310')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(310);">Karya Tulis / Makalah</a></li>';
		$menunav .= '</ul>';
		$menunav .= '</div>';
		
		$menunav .= '<div class="subnav '.(($side_left=='4')?'':'subnav-hidden').'" style="border-bottom:1px solid #000;">';
		$menunav .= '<div class="subnav-title" style="border-bottom:1px solid #CCC;">';
		$menunav .= '<a href="#" class="toggle-subnav"><i class="icon-angle-right"></i><span>Data Keluarga</span></a>';
		$menunav .= '</div>';
		$menunav .= '<ul class="subnav-menu">';
		$menunav .= '<li class="'.(($menu1=='401')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(401);">Data '.(isset($kjkel)?(($kjkel==1)?'Isteri':'Suami'):'Isteri / Suami').'</a></li>';
		$menunav .= '<li class="'.(($menu1=='402')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(402);">Data Anak</a></li>';
		$menunav .= '<li class="'.(($menu1=='403')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(403);">Data Ayah</a></li>';
		$menunav .= '<li class="'.(($menu1=='404')?'active':'').'"><a href="javascript:;" onClick="menu_tab_left(404);">Data Ibu</a></li>';
		$menunav .= '</ul>';
		$menunav .= '</div>';
		
		echo $menunav;
	}
	
function sublink($id_parrent)
{
	$CI =& get_instance();
	$squ = "select * from tb_menu where id_parrent='".$id_parrent."' and status=1";
	$quu = $CI->db->query($squ)->num_rows();
	return $quu;
}	



?>