function fetchcropname(str) {
    var req = new XMLHttpRequest();
    req.open("POST", "http://localhost/kisaan%20Portal/Predict%20productionAjax.php?district=" + str, true);
    req.send();
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            document.getElementById("cropname").innerHTML = req.responseText;
        }
    }
}