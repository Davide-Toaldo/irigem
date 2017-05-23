<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Test website HTML5 | <?php print $title; ?> </title>

    <!-- Bootstrap -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <?php
            $class_home = "";
            $class_about = "";
            $class_contact = "";

            // if ($title == "Home") {
            //   $class_home = ' class="active"';
            // } else if ($title == "About") {
            //   $class_about = ' class="active"';
            // } else if ($title == "Contact") {
            //   $class_contact = ' class="active"';
            // }

            switch ($title) {
              case 'Home':
                $class_home = ' class="active"';
                break;

              case 'About':
                $class_about = ' class="active"';
                break;

              case 'Contact':
                $class_contact = ' class="active"';
                break;
            }

          ?>

            <li<?php print $class_home; ?>><a href="index.php">Home</a></li>
            <li<?php print $class_about; ?>><a href="about.php">About</a></li>
            <li<?php print $class_contact; ?>><a href="contact.php">Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

