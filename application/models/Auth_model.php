<?php 

class Auth_model extends CI_MODEL
{

    private $table_name='spj_login';

    public function getUser($username, $password){

        $this->db->trans_start();
        $this->db->trans_strict(FALSE);
        $this->db->from($this->table_name);
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $result= $this->db->get()->result_array();
        $this->db->trans_complete();

        if($this->db->trans_status()){
            if(count($result) == 0){
                return 0;
            } else{
                return $result [0];
            }
        } else {
            return FALSE;
        }
    }

    public function create($data){
        $this->db->TRANS_START();
        $this->db->TRANS_STRICT(false);
        $this->db->insert($this->table_name, $data);
        $result = $this->db->affected_rows();
        $this->db->TRANS_COMPLETE();

        if ($this->db->TRANS_STATUS()) {
            return $result;
        } else {
            return false;
        }
    }

}