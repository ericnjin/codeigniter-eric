<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap -->
<!--       <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
 -->      <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <style>


          
      </style>  
 <body>
    <!-- <h1>Hello, world!</h1> -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

<div class="panel-heading">Panel heading</div>
 <div class="container">
  <!-- Default panel contents -->
  
  	
<!-- <div class="table-responsive"> -->

  <!-- Table -->
	 <!-- <table class="table"> -->
		 <!-- <table class="table table-bordered"> -->
	 <table class="table table-striped">
	 <!-- <table class="table table-condensed"> -->


 

		    	<!-- <table class="tablesorter" border="0" cellpadding="0" cellspacing="1"> -->
		<thead>
		<tr>
		  <th style="text-align:center" width="20%">구간</th>
		  <th width="40%">벤치마크</th>
		  <th width="40%">Description</th>
		</tr>
		</thead>
		<tr>
		    <td style="text-align:center">code_start ~ code_end</td>
		    <td style="text-align:center"><?php echo $code;?></td>
		    <td style="text-align:center"></td>
		</tr>
		<tr>
		    <td>dog ~ cat</td>
		    <td><?php echo $dog_cat;?></td>
		    <td></td>
		</tr>
		<tr>
		    <td>cat ~ bird</td>
		    <td><?php echo $cat_bird;?></td>
		    <td></td>
		</tr>
		<tr>
		    <td>dog ~ bird</td>
		    <td><?php echo $dog_bird;?></td>
			    <td></td>
		</tr>
		<tr>
		    <td>전체수행시간</td>
		    <td><?php echo $this->benchmark->elapsed_time();?></td>
		    <td></td>
		</tr>
		<tr>
		    <td>전체수행시간(축약코드)</td>
		    <td>0.0303</td>
		    <td></td>
		</tr>
		<tr>
		    <td>메모리 사용량</td>
		    <td><?php echo $this->benchmark->memory_usage();?></td>
		    <td></td>
		</tr>
		<tr>
		    <td>메모리 사용량 (축약코드)</td>
		    <td>0.65MB</td>
		    <td></td>
		</tr>
	</table>
  <!-- </table> -->
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->

<div class="row">
  
<div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
  
<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>

</div>


<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->

<div class="row">
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
  
<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
  
<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>

</div>


<!-- Columns are always 50% wide, on mobile and desktop -->

<div class="row">
  
<div class="col-xs-6">.col-xs-6</div>
  
<div class="col-xs-6">.col-xs-6</div>

</div>

  </body>
</html>