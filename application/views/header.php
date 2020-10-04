<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
  
    <title>Home</title>

  

    <!-- Bootstrap core CSS -->
<link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>

 .pb-cmnt-container {
        font-family: Lato;
        margin-top: 100px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 130px;
        width: 100%;
        border: 1px solid #F2F2F2;
    }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }



      .drophere {
        display: inline-block;
      width: 180px;
      height: 40px;
      padding: 5px;
    }


    .draghere {

      width: 180px;
      height: 40px;
      text-align: center;
      line-height: 50px;

    }
    .ui-draggable-dragging {

      background: wheat;
      color: black;

    }

    .hoverClass {
      border: 2px solid white;
      background: black;
    }
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="asset/bootstrap/js/jquery.ui.touch-punch.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="asset/bootstrap/css/cover.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">RUSHAB</h3>
      <?php $activepage=$this->uri->segment(1);?>
      <nav class="nav nav-masthead justify-content-center">
        <a class='nav-link <?php echo ($activepage=="home") ? "active" :"";?>' href='<?php echo base_url();?>home'>Home</a>
        <a class='nav-link <?php echo ($activepage=="apidoc") ? "active" :"";?>' href='<?php echo base_url();?>apidoc'>Perpective APi Doc</a>
        <a class='nav-link <?php echo ($activepage=="aboutus") ? "active" :"";?>' href='<?php echo base_url();?>aboutus'>About US</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">