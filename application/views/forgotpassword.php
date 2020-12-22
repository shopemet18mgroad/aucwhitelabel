<div class="container">
     	<div class="row padding-top-btm">
    
  			<div class="col-md-4">
            	<div class="new-car-con">

<form method="post" action="<?php echo base_url(); ?>forgetpassword/doforget/" role="form" >
<div class="form-group">
<?php if($this->session->flashdata('message')) {?>
 <label><span style="color: #CC6633"><?php echo $this->session->flashdata('message');?><span></label>
<?php }?>

  </div>
  <div class=" col-md-12 offset-sm-10 bg-info p-5 ">
  <div class="text-center">
<h4>Forget pasword</h4>
</div>
<div class="form-group">
    <label for="email"><b>Email Id</b></label>
     <input name="emailid" type="email" size="25" id="emailid" placeholder="Enter email" class="form-control" value="" />
     <span style="color:red"></span>
	  </div>
	 <div class="form-group">
	 <label for="phoneno"><b>Phone No.</b></label>
     <input name="emailid" type="text" size="25" id="phoneno" placeholder="Enter phone no." class="form-control" value="" />
     <span style="color:red"></span>
     </div>
	 

  <button type="submit" class="btn btn-primary btn-user btn-block">Sent OTP</button>
</form>
</div>
</div></div>
</div>
</div>
