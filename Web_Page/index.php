<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Datasec4Iot</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<!-- Page Header -->
<div class="container">

	<div class="page-header">
		<h1>Datasec4Iot</h1>
	</div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

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
    </nav>


</div>

<!-- Page content: List -->
<div class="container">
    <div class="row">
        <!-- Filters -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <h4>Filters</h4>
        </div>
        <!--  List -->
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
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




  <!--   <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <button type="button" id="download_raw_files" class="btn btn-primary">Download</button>
        </div>
    </div> -->

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
