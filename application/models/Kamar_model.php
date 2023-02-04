
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model{
    public function readKamar(){
        $query = $this->db->get('kamar');
        return $query->result();
    }

}
?>