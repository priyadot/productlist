<?php
    class Product_model extends CI_model
    {

        public function addproduct($formArray)
          {
             $this->db->insert('pformdb',$formArray);
          }
           
         public function listproduct()
         {
            $this->db->insert('pformdb',$formArray);
         } 
         public function all()
         {
           return $pformdb = $this->db->get('pformdb')->result_array();
         }
    }
?>