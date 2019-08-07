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
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Download <span class="sr-only">(current)</span></a>
              </li>
            </ul>
        </div>
    </nav>
</nav>
        

<!-- Page content: List -->


<div class="container" id="content">
<div class="row">

<!-- Filter by date -->
    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" >
       <form class="filter_date">
            <h4 id="filters_title">Filter by date</h4>
            <p>From:<br/> <input type="text" id="date-filter-from" placeholder="mm/dd/yyyy"></p>
            <p>To:<br/> <input type="text" id="date-filter-to" placeholder="mm/dd/yyyy"></p>

            <button type="button" class="btn btn-primary" id="add_filter" onclick="date_filter()"> Add</button>
            <button type="button" class="btn btn-primary" id= "remove_filter" onclick="remove_date_filter()">Remove</button>
        </form>
    </div>
<!--  List -->
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
<!-- Table -->
        <table class="table table-striped">
<!-- Table header -->
            <thead class="table_header_footer">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Date</th>
                    <th scope="col">Size</th>
                   <!--  <th></th> -->
                </tr>
            </thead>
<!-- Table body -->
            <tbody class="table_content">
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
                        <td id="checks"> 
                            <div class="form-check">
                            <input class="form-check-input checkbox-files" type="checkbox" value="<?php echo $files[$a];?>" name="selected_files[]">
                            </div>
                        </td>
                    	<td class="file_date" id="<?php
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
                        ?>"  
                        >
                            <a href="data/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
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
                            </a>
                        </td>
                        <td>
                            <?php
                            echo $files[$a] . ': ' . filesize($files[$a]) . ' bytes';
                            ?>
                        </td>

    			        <!--  <td> <a class = "download_links" href="data/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>"></a></td>  -->
                    </tr>
                </p>
                <?php
                }
                ?> 
            </tbody>
<!-- Table footer -->
            <tfoot class="table_header_footer">
                <tr>
                    <td> 
                        <div class="form-check">
                        <input class="form-check-input" id= "select_all" type="checkbox" onclick="select_all()">
                        <label class="form-check-label" for="inlineCheckbox1" ">Select All</label>
                        </div>
                    </td> 
                    <td>
                        <button type="button" class="btn btn-primary" onclick="download_all_selected()">download</button>
                    </td>
                     
                </tr>
            </tfoot>


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

