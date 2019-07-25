<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Datasec4Iot</title>
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
<!-- Page Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Datasec4Iot</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Download <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
        </div>
    </div>
</nav>
        

<!-- Page content: List -->


<div class="container" id="content">

<div class="row">

    <!-- Filters -->
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="content_column" >
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Filters</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!--  List -->
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" id="content_column" >
        <table class="table table-striped">
            <thead>
            <tr>
              <th scope="col">File</th>
              <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                <?php
                // This will return all files in that folder
                $files = scandir("data");
                // First 2 indexes are "." and ".."
                for ($a = 2; $a < count($files); $a++)
                {
                ?>
                <p>
                    <!-- Displaying file name !-->
                    <tr>
                    	<td><?php echo $files[$a]; ?></td>
                        <td> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            </div>
                        </td>

    			         <!-- <td> <a href="data/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">Download</a></td> --> 
                    </tr>
                </p>
                <?php
                }
                ?> 
                <p>   
                    <tr>
                        <td><button type="button" id="download_raw_files" class="btn btn-primary">Download</button></td>
                         <td> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="inlineCheckbox1">Select All</label>
                            </div>
                        </td>
                        
                    </tr>
                </p>
            </tbody>
        </table>
    </div>
</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
    <script type="text/javascript" src="functions.js"></script>
</html>
