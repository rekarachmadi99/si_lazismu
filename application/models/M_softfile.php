<?php
Class M_softfile extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }
    function get_all_dokumen(){
      return $this->db->get('tb_dokumen')->result(); 
    }

    function hapus_dokumen($id_dokumen){
      return $this->db->delete('tb_dokumen', array('id_dokumen' => $id_dokumen)); 
    }

    function adddokumen($data){
      $this->db->insert('tb_dokumen',$data);
    }

    function edit_softfile($id_dokumen,$data){
      $this->db->where('id_dokumen',$id_dokumen);
        $this->db->update('tb_dokumen', $data);
    }
    
}
?>