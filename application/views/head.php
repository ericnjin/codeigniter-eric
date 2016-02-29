<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap -->
      <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
      <style>
          body{
                padding-top:100px;
              }

      </style>
    </head>
    <body>
      <?php
              if($this->session->flashdata('message')){
      ?>
              <script>
                alert('<?=$this->session->flashdata('message')?>');
              </script>
      <?php
              }
      ?>
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
       
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
       
            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="#">Hello Eric Javascripts</a>
       
            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse">
              <!-- .nav, .navbar-search, .navbar-form, etc -->
            </div>
       
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row-fluid">

