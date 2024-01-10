<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kisaan_sashaktikaran_portal";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        echo " "; //Connect Successful
    }

    $districtname = $_POST['districtname'];
    $cropname = $_POST['cropname'];
    $totalarea = $_POST['totalarea'];
    //to prevent from mysqli injection 
    $cropname = stripcslashes($cropname);
    $cropname = mysqli_real_escape_string($conn, $cropname);

    $sql = "select *from `predict_production` where crop = '$cropname'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $id = $row['id'];
        $crop = $row['crop'];
        $production = $row['production'];
        $measurement = $row['measurement'];
        $soil = $row['soil'];
        $land_preparation = $row['land_preparation'];
        $fertilizer = $row['fertilizer'];
        $irrigation = $row['irrigation'];
        $harvesting = $row['harvesting'];
        $link = $row['link'];
?>
        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        </head>

        <body>
            <div class="alert alert-primary" role="alert">
                <h4><b>Thank you so much for using our Prediction Tool!</b></h4>Hello User! You are from <?php echo $districtname ?>, Uttar Pradesh And You are Producing <?php echo $cropname ?> Crop. So In a <?php echo $totalarea ?> Hectare You can Produce <b><?php echo $production * $totalarea . " " . $measurement ?></b>. More Information about The <?php echo $cropname ?> Crop given below:
            </div>
            <h2><?php echo $crop; ?></h2>
            <h5>Soil</h5>
            <p><?php echo $soil; ?></p>
            <h5>Land Preparation</h5>
            <p><?php echo $land_preparation; ?></p>
            <h5>Fertilizer</h5>
            <p><?php echo $fertilizer; ?></p>
            <h5>Irrigation</h5>
            <p><?php echo $irrigation; ?></p>
            <h5>Harvesting</h5>
            <p><?php echo $harvesting; ?></p>
            <h5>Link For Detail Description</h5>
            <p><?php echo $link; ?></p>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> This Prediction Tool is based on Previous data (Information).
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
        </body>

        </html>
<?php
    } else {
    }
}
?>