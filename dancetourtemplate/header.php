<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  
  <title>Bootstrap Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/css/style.css';?>">
</head>

<body>
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light"><?php echo get_custom_logo();?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       
      <?php wp_nav_menu(
        array(
        'container'=>false,
        'menu_class'=> 'navbar-nav m-auto nav-item active px-3 nav-link'
        )
        );?>
      
      <ul class="navbar-nav m-auto">

    <li class="nav-item active px-3"> <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item active px-3"><a class="nav-link" href="#">ABOUT</a> </li>
        <li class="nav-item active px-3"><a class="nav-link" href="#">PROMO</a> </li>
        <li class="nav-item active px-3"><a class="nav-link" href="#">PRODUCT</a> </li>
        <li class="nav-item active px-3"><a class="nav-link" href="#">CONTACT</a> </li>
      </ul>
      <div>
        <ul class="navbar-nav px-5">
          <li class="nav-item active"><a class="nav-link" href="#"><i class="fas fa-search"></i></a> </li>
        </ul>
      </div>
    </div>
  </nav>