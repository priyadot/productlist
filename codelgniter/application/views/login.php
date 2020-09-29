<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css';?>"> 
</head>
<body>


<div class="container cont">
  <h3>Login</h3>
  <form method="post" name="loginform" id="loginform" action ="<?php echo base_url().'index.php/customer/login';?>">
  <?php
     $msg = $this->session->flashdata('msg');
     if($msg !=""){
         ?>
          <div class="alert alert-danger">
          <?php echo $msg;?> 
          </div>
          
          <?php
     }  
     ?>
     

 
  <div class="form">
  <div class="card-header">
  <lable for="name">User Name</label>
  <input type="text" name="username" id="username" class="form-control" placeholder="username" >
 
  <lable for="name">Password</label>
  <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
  
  <hr>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  
  <a href=<?php echo base_url().'index.php/customer/Registration';?> >Signin</a>
</div>  
</form>
</head>
</html>