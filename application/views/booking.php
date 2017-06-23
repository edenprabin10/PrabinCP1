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
<form class="form-horizontal">
  <fieldset>
    <legend>Booking</legend>
    <div class="form-group">
      <label for="text" class="col-sm-2 control-label">First Name</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="text" placeholder="FirstName">
      </div>
      <div class="form-group">
      <label for="text" class="col-sm-2 control-label">Last Name</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="text" placeholder="LastName">
      </div>
    </div>
   
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
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