<?php
class Product extends CI_Controller
{
  public function ProductItem()
{
    $this->load->model('Product_model');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('price','Price','required');
    $this->form_validation->set_rules('description','Description','required');
    if($this->form_validation->run() == false)
    {
        $this->load->view('createitem');
    }else {
        $formArray = array();
        $formArray['name'] = $this->input->post('name');
        $formArray['price'] = $this->input->post('price');
        $formArray['description'] = $this->input->post('description');
        $this->Product_model->addproduct($formArray);
        $this->session->set_flashdata('success','product Added Successfully');
         redirect(base_url().'index.php/Product/ProductList');
    }
   
} 
      public function ProductList()
           {
            $this->load->model('Product_model');
            $pformdb = $this->Product_model->all();
            $data = array();
            $data['pformdb'] = $pformdb;
            $this->load->view('prolist',$data);
           }
        
              
}

?>