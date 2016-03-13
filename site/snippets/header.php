<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>

  <?php echo js('assets/js/modernizr.js') ?>
  <?php echo css('assets/css/foundation.min.css') ?>
  <?php echo css('assets/css/app.css') ?>
  <?php echo js('assets/js/foundation.min.js') ?>
  <?php echo js('assets/js/app.js') ?>
  <?php echo css('assets/css/animate.css') ?>


</head>
<body class="flex">
