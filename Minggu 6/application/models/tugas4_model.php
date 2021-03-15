<?php 
class tugas4_model extends CI_Model {
    public function get_data()
	{
        $data_mahasiswa = [
			["nama"=>"Ahmad Aji Naufal","nim"=>"E31191401"],
			["nama"=>"Gusion","nim"=>"E31183432"],
			["nama"=>"Hanabi","nim"=>"E31167232"] 
        ];
        return $data_mahasiswa;
	}
}
?>