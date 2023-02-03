<?php
Class M_donasionline extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }
    // public function simpanfix($data){
    //   $this->db->insert('tb_berita',$data);
    // }

    function get_all_donasi(){
      return $this->db->get('rekening')->result(); 
    }

    function get_donasi($id_rekening){
      return $this->db->get_where('rekening', array('id_rekening' => $id_rekening))->result();
    }
}
?>