<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Datasec4Iot</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<!-- Page Header -->
<div class="container">

	<div class="page-header">
		<h1>Datasec4Iot</h1>
	</div>
</div>

<!-- Page content: List -->
<div class="container">
<div class="row">
    <!-- Month Columns -->
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <h4>Enero</h4>
        <h4>Febrero</h4>
    </div>
    <!-- Month Columns -->
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <table class="table table-striped">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">File</th>
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
                    	<th scope="row"><?php echo $a-2 ?></th>
                    	<td><?php echo $files[$a]; ?></td>
    			<td> <a href="data/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
                        Download</a></td> 
                    </tr>
                </p>
                <?php
                }
                ?>   
            </tbody>
        </table>
    </div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>