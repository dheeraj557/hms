<?php include'includes/session.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css">
    <title>Hospital Management System - <?php echo $title ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <a class="navbar-brand" href="index.php">Sharma Hospitals</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="viewrecords.php">View Records</a>
      <?php 
        if(!isset($_SESSION['id'])){
      ?>
      <a class="nav-item nav-link align-right" href="login.php">Login <span class="sr-only"></span></a>
      <?php } else{ ?>
         <span> Hello,<?php echo $_SESSION['username']; ?> </span> 
        <a class="nav-item nav-link align-right" href="logout.php">Logout <span class="sr-only"></span></a>
        <?php } ?>
    </div>
  </div>
</nav>