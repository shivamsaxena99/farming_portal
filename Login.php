<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS File-->
  <link rel="stylesheet" type="text/css" href="Login.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Login Page</title>
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
        <li class="nav-item"><a href="Home.php" class="nav-link">Home (होम पेज)</a></li>
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Login (लॉग इन करें)</a></li>
        <li class="nav-item"><a href="SignUp.php" class="nav-link">SignUP (साइन अप करें)</a></li>
      </ul>
    </header>
  </div>
  <img width=1518px height=400px src="login-and-signup-switch-card-ui.gif" alt="#" />
  <nav id="a2">
    <h4>शिक्षित किसान कुशल किसान।</h4>
  </nav>
  <h5 class="c1">LOGIN (लॉग इन करें)</h5><br />
  <form class="c1" action="LoginValidation.php" method="POST">
    <table>
      <tr>
        <td>Name (नाम)</td>
        <td><input type="text" name="username" pattern="[a-z]{1,30}" title="name should only contain lowercase letters. e.g john" required></td>
      </tr>
      <tr>
        <td>Email (ईमेल)</td>
        <td><input type="email" name="useremail" required></td>
      </tr>
      <tr>
        <td>Password (पासवर्ड)</td>
        <td><input type="password" name="userpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required></td>
      </tr>
      <tr>
        <td></td>
        <td><input class="btn btn-primary" type="submit" value="Login (लॉग इन करें) "></td>
      </tr>
    </table>
    <div class="panel-footer">
      <b>Forgot password?Click <a href="Forgot password.php">here.</a></b>
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