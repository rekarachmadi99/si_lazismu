<?php
Class M_mitra extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }
    public function addmitra($data){
      $this->db->insert('tb_mitra',$data);
    }

    function get_all_mitra(){
      return $this->db->get('tb_mitra')->result(); 
    }

    function hapus_mitra($id_mitra){
      return $this->db->delete('tb_mitra', array('id_mitra' => $id_mitra)); 
    }
   
    function update_mitra($id_mitra,$data){
      $this->db->where('id_mitra',$id_mitra);
      $this->db->update('tb_mitra', $data);
      // var_dump($data);
      
    }
}
?>