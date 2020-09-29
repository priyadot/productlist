<?php
class Customer extends CI_Controller
{ 
    public function LoadLoginScreen(){
        $this->load->view('login');
    } 
    
     public function Registration()
      {
            
       $this->load->library('form_validation');
       $this->form_validation->set_rules('fname','Name','required');
       $this->form_validation->set_rules('address','Address','required');
       $this->form_validation->set_rules('DOB','Data Of Birth','required');
       $this->form_validation->set_rules('email','Email','required|valid_email');
       $this->form_validation->set_rules('gender','Gender','required');
       $this->form_validation->set_rules('mob_no','Mob No','required');
       $this->form_validation->set_rules('username','UserName','required');
       $this->form_validation->set_rules('password','Password','required');
       if ($this->form_validation->run() == false)  
       {
          $this->load->view('register');
       }
      else 
      {
        $this->load->model('Cust_model');
        $formArray=array();
        $formArray['fname']=$this->input->post('fname');
        $formArray['address']=$this->input->post('address');
        $formArray['DOB']=$this->input->post('DOB');
        $formArray['email']=$this->input->post('email');
        $formArray['gender']=$this->input->post('gender');
        $formArray['mob_no']=$this->input->post('mob_no');
        $formArray['username']=$this->input->post('username');
        $formArray['password']=$this->input->post('password');
            $this->Cust_model->create_data($formArray);
            $this->session->set_flashdata('msg','Record Added Successfully');
            redirect(base_url().'index.php/customer/Registration');  

    }
}


  public function login()
      {
        $this->load->model('Cust_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','UserName','required');
        $this->form_validation->set_rules('password','Password','required');
        if ($this->form_validation->run() == true)  {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $user = $this->Cust_model->checkUser($username,$password);
            if(!empty($user)){
                redirect(base_url().'index.php/Dashboard_controller/ShowDashboard'); 
                

            }
            else 
            {
            
                $this->session->set_flashdata('msg','Either Username or Password Incorrect,Please Try Again.');
                redirect(base_url().'index.php/customer/LoadLoginScreen');  
                
               
            }
          
        }
    }     


}

?>

            
        
        
            
        
       
        
      
    




