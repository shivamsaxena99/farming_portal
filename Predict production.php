<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS File-->
  <link rel="stylesheet" type="text/css" href="Predict production.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Javascript File-->
  <script src="Predict production.js"></script>

  <title>Predict production Page</title>
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
        <li class="nav-item"><a href="https://share.streamlit.io/techcoderr/data/main/streamlit.py" class="nav-link active" aria-current="page">Predict production</a></li>
        <li class="nav-item"><a href="District wise best crop.php" class="nav-link">District wise best crop</a></li>
        <li class="nav-item"><a href="Forum/index.php" class="nav-link">Forum</a></li>
        <li class="nav-item"><a href="Logout.php" class="nav-link">Logout</a></li>
      </ul>
    </header>
  </div>
  <img width=1518px height=400px src="02.gif" alt="#" />
  <nav id="a5">
    <h4>सफल किसान है,उन्नतशील किसान।</h4>
  </nav>
  <h5 class="c5">KNOW HOW MUCH YOU CAN PRODUCE (जानिए आप कितना उत्पादन कर सकते हैं)</h5><br />
  <form class="c5" action="Predict productionCalculation" method="POST">
    <table>
      <tr>
        <td>District (जिला)</td>
        <td><select name="districtname" onchange="fetchcropname(this.value)">
            <option selected>Select City</option>
            <option>Agra</option>
            <option>Aligarh</option>
            <option>Allahabad</option>
            <option>Ambedkar Nagar</option>
            <option>Amethi</option>
            <option>Amroha</option>
            <option>Azamgarh</option>
            <option>Baghpat</option>
            <option>Barabanki</option>
            <option>Bareilly</option>
            <option>Basti</option>
            <option>Bijnor</option>
            <option>Budaun</option>
            <option>Bulandshahr</option>
            <option>Etah</option>
            <option>Faizabad</option>
            <option>Farrukhabad</option>
            <option>Firozabad</option>
            <option>Gonda</option>
            <option>Hamirpur</option>
            <option>Hapur</option>
            <option>Hardoi</option>
            <option>Hathras</option>
            <option>Jalaun</option>
            <option>Jhansi</option>
            <option>Kannauj</option>
            <option>Kanpur Dehat</option>
            <option>Kanpur Nagar</option>
            <option>Kaushambi</option>
            <option>Kushinagar</option>
            <option>Lucknow</option>
            <option>Mahoba</option>
            <option>Mainpuri</option>
            <option>Mathura</option>
            <option>Meerut</option>
            <option>Moradabad</option>
            <option>Muzaffarnagar</option>
            <option>Pratapgarh</option>
            <option>Rampur</option>
            <option>Saharanpur</option>
            <option>Sambhal</option>
            <option>Shahjahanpur</option>
            <option>Shamali</option>
            <option>Sitapur</option>
            <option>Sultanpur</option>
            <option>Unnao</option>
          </select></td>
      <tr>
        <td>Crop Name (फसल का नाम)</td>
        <td><select name="cropname" id="cropname">
            <option selected>Select Crop</option>
          </select></td>
      </tr>
      <tr>
        <td>Enter Area in Hectare (हेक्टेयर में क्षेत्रफल दर्ज करें)</td>
        <td><input type="text" name="totalarea" required></td>
      </tr>
      <tr>
        <td></td>
        <td><input class="btn btn-primary" type="submit" value="Submit (जमा करें) "></td>
      </tr>
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