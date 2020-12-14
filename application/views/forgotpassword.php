<div class="container">
     	<div class="row padding-top-btm">
    
  			<div class="col-md-4">
            	<div class="new-car-con">

<form method="post" action="<?php echo base_url(); ?>dofoget/dofoget" role="form" >
<div class="form-group">
<?php if($this->session->flashdata('message')) {?>
 <label><span style="color: #CC6633"><?php echo $this->session->flashdata('message');?><span></label>
<?php }?>

</div>
<h4>Forget pasword</h4>
<div class="form-group">
    <label for="txtLoginid">Email Id</label>
     <input name="emailid" type="email" size="25" id="emailid" placeholder="Enter email" class="form-control" value="" />
     <span style="color:red"></span>
     </div>
      
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div></div>
</div>
</div>
