<?php
class mahasiswa_model extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['Nama'=>'Ahmad','Prodi'=>'TIF'],
        ['Nama'=>'Aji','Prodi'=>'MIF'],
        ['Nama'=>'Naufal','Prodi'=>'TKK']
      ];
    return $data_mahasiswa;
  }
}