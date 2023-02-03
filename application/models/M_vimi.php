<?php
Class M_vimi extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }
    function get_vimi(){
      return $this->db->get('tb_visi_misi')->result(); 
    }

    function vm_update($id_visi_misi, $data){
        $this->db->update('tb_visi_misi', $data, array('id_visi_misi' => $id_visi_misi));
      }
    
}
?>