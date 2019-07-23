                                         

<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.c$

    <title>Datasec4iot</title
>
  </head>
  <body>

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="internet-of-things.png" width="30" height="30" class="d-inline$
        Download
      </a>
    </nav>

        <?php
        // This will return all files in that folder
        $files = scandir("data");
        // First 2 indexes are "." and ".."
        for ($a = 2; $a < count($files); $a++)
        {
            ?>
            <p>
                <!-- Displaying file name !-->
                <?php echo $files[$a]; ?>

                <!-- href should be complete file path !-->
                <!-- download attribute should be the name after it downloads !-->
                <a href="data/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
                    Download
                </a>
            </p>
            <?php
        }

        ?> 

</body>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENz$
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="s$
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-$

</html>
