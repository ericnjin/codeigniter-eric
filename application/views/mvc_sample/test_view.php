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
