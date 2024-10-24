<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User_model extends CI_Model 
{
    public function cek_masuk($where = null)
    {
        return $this->db->get_where('users', $where);
    }                    
                        
}


/* End of file User_model.php and path \application\models\User_model.php */
