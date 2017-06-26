<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Booking</title>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"> </script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"> </script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<div class="container">

<form action="<?php echo site_url('Customer/booking') ?>" method="post" class="form-horizontal">
  <fieldset>
    <legend>Booking</legend>
    <div class="form-group">
      <label for="text" class="col-sm-2 control-label">First Name</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="text" placeholder="First Name" name="firstname">
      </div>
      <div class="form-group">
      <label for="text" class="col-sm-2 control-label">Last Name</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="text" placeholder="LastName" name="lastname">
      </div>
    </div> </div>     

     <div class="form-group">
      <label for="text" class="col-sm-2 control-label">Phone</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="text" placeholder="Phone" name="phone">
      </div>
    </div>

      <div class="form-group">
      <label for="date" class="col-sm-2 control-label">Booking Date</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" id="text" placeholder="Book Your Date" name="bookingdate">
      </div> </div>

      <div class="form-group">
      <label for="time" class="col-sm-2 control-label">Booking Time </label>
      <div class="col-sm-2">
        <input type="time" class="form-control" id="text" placeholder="LastName" name="bookingtime">
      </div>
    </div>
   
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
  </fieldset>
</form>