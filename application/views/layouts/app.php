<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="online shop yang terpercaya">
  <title><?= isset($title) ? $title : 'Kikuk' ?> - Code Igniter</title>
  <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/css/app.css">

</head>

<body>
  <!-- Navbar -->
  <?php $this->load->view('layouts/_navbar'); ?>
  <!-- Main Content -->
  <?php $this->load->view($page); ?>
  <!-- End Main Content -->
  <script src="assets/libs/jquery/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>