<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  echo "<script>alert('You need to login first.');
        window.location.href= 'Home.php';</script>";
  exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS File-->
  <link rel="stylesheet" type="text/css" href="Welcome.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Welcome Page</title>
</head>

<body>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Kisaan Sashaktikaran Portal</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="Current Policies.php" class="nav-link">Current policies</a></li>
        <li class="nav-item"><a href="Learn about crop.php" class="nav-link">Learn about crop</a></li>
        <li class="nav-item"><a href="https://share.streamlit.io/techcoderr/data/main/streamlit.py" class="nav-link">Predict production</a></li>
        <li class="nav-item"><a href="District wise best crop.php" class="nav-link">District wise best crop</a></li>
        <li class="nav-item"><a href="Forum/index.php" class="nav-link">Forum</a></li>
        <li class="nav-item"><a href="Logout.php" class="nav-link">Logout</a></li>
        <button type="text" class="btn btn-primary"><?php echo $_SESSION['username'] ?></button>
      </ul>
    </header>
  </div>
  <nav id="a4">
    <h4>ईमानदारी और मेहनत है जिसकी शान वह<br />है मेरे देश का किसान।</h4>
    <a class="btn btn-primary" href="Goal.php" role="button">लक्ष्य</a>
    <a class="btn btn-primary" href="Weather/index.php" role="button">मौसम</a>
  </nav>
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