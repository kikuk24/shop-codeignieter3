<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="kikuk afandi">
  <meta name="generator" content="Jekyll v3.8.5">
  <link rel="shortcut icon" href="./images/favicon.png" type="image/gif">
  <title><?= isset($title) ? $title : 'Kikuk Shop' ?> - Project E-Commerce</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="./assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="./assets/libs/fontawesome/css/all.min.css">
  <!-- Custom styles for this template -->
  <!-- <link rel="stylesheet" href="./assets/css/app.css"> -->
</head>

<body>

  <!-- Navbar -->
  <?php $this->load->view('layouts/_navbar'); ?>
  <!-- Endnavbar -->

  <!-- Content -->
  <?php $this->load->view($page); ?>
  <!-- End Content -->

  <script src="./assets/libs/jquery/jquery-3.4.1.min.js"></script>
  <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/app.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>