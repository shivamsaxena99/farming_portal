<?php
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

$sql = "SELECT * FROM `district_wise_best_crop`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
// Display the rows returned by the sql query
if ($num > 0) {
    // We can fetch in a better way using the while loop
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS File-->
        <link rel="stylesheet" type="text/css" href="District wise best crop.css" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>District wise best crop Page</title>
    </head>

    <body>
        <h2>District wise best crop in Uttar Pradesh (उत्तर प्रदेश में जिलेवार सबसे अच्छी फसल)</h2><br /><br />
        <table class="table table-dark table-striped" id="view_table" cellpadding=20px>
            <tr>
                <th>Id</th>
                <th>District</th>
                <th>Famous Crop</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                // echo var_dump($row);
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['district']; ?></td>
                    <td><?php echo $row['famous_crop']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
        </table>
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