<!DOCTYPE html>
<html>
<head>
        <title> Registration </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css';?>"> 
        <style>
        .my{
           background-color:pink;
        }
        </style>
</head>
<body>
<div class="container cont">
<?php
     $msg = $this->session->flashdata('msg');
     if($msg !=""){
            echo "<div class='alert alert-success'>'$msg'</div>";
     }
?>

<div class="form-body">
  <div class="card-header">
    <h3 Align="center">Registration</h3>
  </div>
  <form method="post" name="registerForm" action ="<?php echo base_url().'index.php/customer/Registration';?>">
   
  <div class="">
    <p class="card-text">Please Fill Your Details.</p>
   <div class="form-group">
       <lable for="name">Name</lable>
       <input type="text" name="fname" id="fname" value="" class="form-control" placeholder="Name" required onkeypress="return isCharKey(event)">
       <?php echo form_error('fname');?>
    </div>
    <div class="form-group">
       <lable for="name">Address</lable>
       <input type="text" name="address" id="address" value="" class="form-control" placeholder="Address" required onkeypress="return isCharKey(event)">
       <?php echo form_error('address');?>
    </div>
    <div class="form-group">
       <lable for="name">Date Of Birth</lable>
       <input type="date" name="DOB" id="DOB" value="<?php echo date('d-m-Y');?>" class="form-control"required placeholder="Date Of Birth"  />
       <?php echo form_error('DOB');?>
    </div>
    <div class="form-group">
       <lable for="name">Email</lable>
       <input type="email" name="email" id="email" value="" class="form-control" placeholder="Email" required />
       <?php echo form_error('email');?>
    </div>
    <div class="form-group">
       <lable for="name">Gender</lable><br>
      Male : <input type="radio" name="gender" id="gender" value="Male" class="" placeholder="gender"><br><br>
      Female : <input type="radio" name="gender" id="gender" value="Female" class="" placeholder="gender">
      <?php echo form_error('gender');?>
    </div>
    <div class="form-group">
       <lable for="name">Mobile No</lable>
       <input type="text" name="mob_no" id="mob_no" value="" class="form-control" placeholder="Mobile No" maxlength="10" onkeypress="return isNumberKey(event)">
       <?php echo form_error('mob_no');?>
    </div>
    <div class="form-group">
       <lable for="name">UserName</lable>
       <input type="text" name="username" id="username" value="" class="form-control" placeholder="UserName"/>
       <?php echo form_error('username');?>
    </div>
    <div class="form-group">
       <lable for="name">Password</lable>
       <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password" />
       <?php echo form_error('password');?>
    </div>
    <div class="form-group">
    
        <button class="btn btn-lg btn btn-primary  btn-block"> Register Now</button>
        
       </div>
       </form>



   
</div>
</div>
</body>
</html>