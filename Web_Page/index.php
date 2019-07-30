<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Datasec4Iot</title>
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

<script type="text/javascript" src="functions.js"></script>

</head>

<body>
<?php include 'functions.php';?>
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

    <!-- Filter by date -->
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" >
        <h4 id="filters_title">Filters by date</h4>

        <form >
            <div class="form-group">
                <label for="from-date-input" >From</label>
                    <input class="form-control" type="date" placeholder="dd/mm/yyyy" id="date-filter-from">
            </div>

            <div class="form-group">
                <label for="to-date-input" >To</label>
                    <input class="form-control" type="date" placeholder="dd/mm/yyyy" id="date-filter-to">
            </div>
        </form>

        <button type="button" class="btn btn-primary" onclick="date_filter()">Filter</button>
    </div>
    <!--  List -->
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <table class="table table-striped">
            <thead id="table_header">
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Download</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="table_content">
                <?php
                // This will return all files in that folder
                $files = scandir("data");
                // First 2 indexes are "." and ".."
                for ($a = 2; $a < count($files); $a++)
                {
                ?>

                <p>
                    <!-- Displaying date of the file !-->
                    <tr>
                    	<td>
                        <?php
                            for ($i = 8; $i < 12; $i++){
                                echo $files[$a][$i]; 
                            }
                            echo "-";
                            for ($i = 12; $i < 14; $i++){
                                echo $files[$a][$i]; 
                            }
                            echo "-";
                            for ($i = 14; $i < 16; $i++){
                                echo $files[$a][$i]; 
                            }
                        ?>



                        </td>
                        <td> 
                            <div class="form-check">
                            <input class="form-check-input checkbox-files" type="checkbox" value="<?php echo $files[$a];?>" name="selected_files[]">
                            </div>
                        </td>

    			         <td> <a class = "download_links" href="data/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>"></a></td> 
                    </tr>
                </p>
                <?php
                }
                ?> 
                <p>   
                    <tr>
                        <td><button type="button" class="btn btn-primary" onclick="download_all_selected()">Download</button>
                        </td>
                         <td> 
                            <div class="form-check">
                            <input class="form-check-input" id= "select_all" type="checkbox" onclick="select_all()">
                            <label class="form-check-label" for="inlineCheckbox1" ">Select All</label>
                            </div>
                        </td>
                        
                    </tr>
                </p>
            </tbody>
        </table>
    </div>
</div>
</div>




<!-- <script type="text/javascript" src="functions.js"></script> -->

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />

</body>
</html>

