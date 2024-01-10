<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS File-->
  <link rel="stylesheet" type="text/css" href="SignUp.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>SignUp Page</title>
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
        <li class="nav-item"><a href="Login.php" class="nav-link">Login (लॉग इन करें)</a></li>
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">SignUP (साइन अप करें)</a></li>
      </ul>
    </header>
  </div>
  <img width=1518px height=400px src="giphy.gif" alt="#" />
  <nav id="a3">
    <h4>किसान का विकास देश की प्रगति।</h4>
  </nav>
  <h5 class="c2">SIGNUP (साइन अप करें)</h5>
  <form class="c2" action="SignUpValidation.php" method="POST">
    <table>
      <tr>
        <td>Name (नाम)</td>
        <td><input type="text" name="username" pattern="[a-z]{1,30}" title="name should only contain lowercase letters. e.g john" required></td>
      </tr>
      <tr>
        <td>Email (ईमेल)</td>
        <td><input type=" email" name="useremail" placeholder="eg. abc@xyz.com" required></td>
      </tr>
      <tr>
        <td>Password (पासवर्ड)</td>
        <td><input type="password" name="userpassword" placeholder="Atleast Six Characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required></td>
      </tr>
      <tr>
        <td>Confirm Password (पासवर्ड)</td>
        <td><input type="password" name="usercpassword" required></td>
      </tr>
      <tr>
        <td>Date of Birth (जन्म की तारीख)</td>
        <td><input type="date" name="userdateofbirth" required></td>
      </tr>
      <tr>
        <td>Gender (लिंग)</td>
        <td><input type="radio" name="usergender" value="Male ">Male (पुरुष)</td>
        <td><input type="radio" name="usergender" value="Female">Female (महिला)</td>
        <!--<td><input type="radio" name="usergender" value="Other">Other (अन्य)</td>-->
      </tr>
      <tr>
        <td>State (राज्य)</td>
        <td><select name="userstate">
            <option selected>Select State</option>
            <option>Uttar Pradesh</option>
            <option>Andaman Nicobar</option>
            <option>Andhra Pradesh</option>
            <option>Arunachal Pradesh</option>
            <option>Assam</option>
            <option>Bihar</option>
            <option>Chandigarh</option>
            <option>Chhattisgarh</option>
            <option>Dadra Nagar Haveli</option>
            <option>Daman Diu</option>
            <option>Delhi</option>
            <option>Goa</option>
            <option>Gujarat</option>
            <option>Haryana</option>
            <option>Himachal Pradesh</option>
            <option>Jammu Kashmir</option>
            <option>Jharkhand</option>
            <option>Karnataka</option>
            <option>Kerala</option>
            <option>Ladakh</option>
            <option>Lakshadweep</option>
            <option>Madhya Pradesh</option>
            <option>Maharashtra</option>
            <option>Manipur</option>
            <option>Meghalaya</option>
            <option>Mizoram</option>
            <option>Nagaland</option>
            <option>Odisha</option>
            <option>Puducherry</option>
            <option>Punjab</option>
            <option>Rajasthan</option>
            <option>Sikkim</option>
            <option>Tamil Nadu</option>
            <option>Telangana</option>
            <option>Tripura</option>
            <option>Uttar Pradesh</option>
            <option>Uttarakhand</option>
            <option>West Bengal</option>
          </select></td>
      </tr>
      <tr>
        <td>District (जिला)</td>
        <td><select name="userdistrict">
            <option selected>Select City</option>
            <option>Agra</option>
            <option>Aligarh</option>
            <option>Allahabad</option>
            <option>Ambedkar Nagar</option>
            <option>Amethi</option>
            <option>Amroha</option>
            <option>Auraiya</option>
            <option>Azamgarh</option>
            <option>Baghpat</option>
            <option>Bahraich</option>
            <option>Ballia</option>
            <option>Balrampur</option>
            <option>Banda</option>
            <option>Barabanki</option>
            <option>Bareilly</option>
            <option>Basti</option>
            <option>Bhadohi</option>
            <option>Bijnor</option>
            <option>Budaun</option>
            <option>Bulandshahr</option>
            <option>Chandauli</option>
            <option>Chitrakoot</option>
            <option>Deoria</option>
            <option>Etah</option>
            <option>Etawah</option>
            <option>Faizabad</option>
            <option>Farrukhabad</option>
            <option>Fatehpur</option>
            <option>Firozabad</option>
            <option>Gautam Buddha Nagar</option>
            <option>Ghaziabad</option>
            <option>Ghazipur</option>
            <option>Gonda</option>
            <option>Gorakhpur</option>
            <option>Hamirpur</option>
            <option>Hapur</option>
            <option>Hardoi</option>
            <option>Hathras</option>
            <option>Jalaun</option>
            <option>Jaunpur</option>
            <option>Jhansi</option>
            <option>Kannauj</option>
            <option>Kanpur Dehat</option>
            <option>Kanpur Nagar</option>
            <option>Kanshiram Nagar</option>
            <option>Kaushambi</option>
            <option>Kushinagar</option>
            <option>Lakhimpur - Kheri</option>
            <option>Lalitpur</option>
            <option>Lucknow</option>
            <option>Maharajganj</option>
            <option>Mahoba</option>
            <option>Mainpuri</option>
            <option>Mathura</option>
            <option>Mau</option>
            <option>Meerut</option>
            <option>Mirzapur</option>
            <option>Moradabad</option>
            <option>Muzaffarnagar</option>
            <option>Pilibhit</option>
            <option>Pratapgarh</option>
            <option>RaeBareli</option>
            <option>Rampur</option>
            <option>Saharanpur</option>
            <option>Sambhal</option>
            <option>Sant Kabir Nagar</option>
            <option>Shahjahanpur</option>
            <option>Shamali</option>
            <option>Shravasti</option>
            <option>Siddharth Nagar</option>
            <option>Sitapur</option>
            <option>Sonbhadra</option>
            <option>Sultanpur</option>
            <option>Unnao</option>
            <option>Varanasi</option>
          </select></td>
      </tr>
      <tr>
        <td></td>
        <td><input class="btn btn-primary" type="submit" value="Signup (साइन अप करें) "></td>
      </tr>
    </table>
    <div class="panel-footer">
      <b>Already have an account?Click <a href="Login.php">here</a> to create one.</b>
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