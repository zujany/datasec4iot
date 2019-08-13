
<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Datasec4Iot</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

<script type="text/javascript" src="functions.js"></script>

</head>

<body>
<?php include 'functions.php';?>
<!-- Page Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="container">
        <a class="navbar-brand" href="home.php">Datasec4Iot</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Download</a>
              </li>
            </ul>
        </div>
    </nav>
</nav>

<!-- Page content -->
<div class="container" id="content">
  <div class="row" >
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
      <p class="text-justify"> Datasec4iot is a network created to capture and study the packages sent by IoT devices. It is deployed in the coffee room of the Network’s department in Télécom SudParis, Evry, France.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
      <p class="text-justify">It is composed of fourteen IoT devices, a Raspberry pi 3, an access point, and a server. The devices include a mobile phone and a Google Home, that allows a variety of interactions with the system, from single interactions, to schedule actions, use voice commands, and trigger actions based on sensors measures.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
      <p class="text-justify">The Raspberry pi 3 is acting as a DHCP server, that assigns private IP addresses to the devices, captures the packets sent and received by them, and sends the raw .pcap files generated by the capturer to a server to store them.</p>
    </div>
  </div>

  <div class="row" >
    <img src="statics/network_diagram.png" alt="Network diagram" class="img-fluid">
  </div>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />

</body>
</html>

