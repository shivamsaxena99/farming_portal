<?php
$c1 = array("Guava", "Bottlegourd", "Carrot", "Muskmelon", "Potato");
$c2 = array("Guava", "Mango", "Bottlegourd", "Carrot", "Muskmelon", "Potato", "Watermelon");
$c3 = array("Amla");
$c4 = array("Mango");
$c5 = array("Peas");
$c6 = array("Mango", "Bottlegourd", "Muskmelon");
$c7 = array("Amla", "Peas");
$c8 = array("Bottlegourd");
$c9 = array("Potato");
$c10 = array("Guava", "Bottlegourd", "Carrot", "Muskmelon");
$c11 = array("Amla");
$c12 = array("Mango");
$c13 = array("Guava", "Muskmelon", "Potato", "Watermelon");
$c14 = array("Guava", "Mango", "Bottlegourd", "Carrot");
$c15 = array("Guava", "Muskmelon", "Peas", "Watermelon");
$c16 = array("Potato");
$c17 = array("Mango", "Bottlegourd");
$c18 = array("Guava", "Muskmelon", "Potato", "Watermelon");
$c19 = array("Bottlegourd", "Carrot", "Muskmelon", "Potato", "Watermelon");
$c20 = array("Bottlegourd");
$c21 = array("Peas");
$c22 = array("Bottlegourd", "Carrot");
$c23 = array("Mango", "Muskmelon", "Potato");
$c24 = array("Guava", "Bottlegourd", "Muskmelon", "Potato");
$c25 = array("Peas");
$c26 = array("Peas");
$c27 = array("Bottlegourd", "Carrot", "Muskmelon", "Potato");
$c28 = array("Muskmelon");
$c29 = array("Guava", "Bottlegourd", "Watermelon");
$c30 = array("Guava", "Carrot");
$c31 = array("Bottlegourd");
$c32 = array("Mango", "Bottlegourd");
$c33 = array("Peas");
$c34 = array("Bottlegourd", "Carrot", "Muskmelon", "Potato", "Watermelon");
$c35 = array("Amla", "Bottlegourd", "Potato");
$c36 = array("Mango", "Bottlegourd", "Carrot");
$c37 = array("Guava", "Bottlegourd", "Carrot");
$c38 = array("Mango");
$c39 = array("Amla");
$c40 = array("Guava");
$c41 = array("Mango");
$c42 = array("Guava", "Carrot", "Potato");
$c43 = array("Carrot", "Potato");
$c44 = array("Carrot");
$c45 = array("Mango");
$c46 = array("Mango", "Peas");
$c47 = array("Guava", "Mango", "Bottlegourd", "Carrot", "Muskmelon", "Watermelon");

//get the dictrict parameter from URL
$district = $_REQUEST['district'];

if ($district == "Agra") {
    foreach ($c1 as $c)
        echo "<option>$c</option>";
} else if ($district == "Aligarh") {
    foreach ($c2 as $c)
        echo "<option>$c</option>";
} else if ($district == "Allahabad") {
    foreach ($c3 as $c)
        echo "<option>$c</option>";
} else if ($district == "Ambedkar Nagar") {
    foreach ($c4 as $c)
        echo "<option>$c</option>";
} else if ($district == "Amethi") {
    foreach ($c5 as $c)
        echo "<option>$c</option>";
} else if ($district == "Amroha") {
    foreach ($c6 as $c)
        echo "<option>$c</option>";
} else if ($district == "Azamgarh") {
    foreach ($c7 as $c)
        echo "<option>$c</option>";
} else if ($district == "Baghpat") {
    foreach ($c8 as $c)
        echo "<option>$c</option>";
} else if ($district == "Barabanki") {
    foreach ($c9 as $c)
        echo "<option>$c</option>";
} else if ($district == "Bareilly") {
    foreach ($c10 as $c)
        echo "<option>$c</option>";
} else if ($district == "Basti") {
    foreach ($c11 as $c)
        echo "<option>$c</option>";
} else if ($district == "Bijnor") {
    foreach ($c12 as $c)
        echo "<option>$c</option>";
} else if ($district == "Budaun") {
    foreach ($c13 as $c)
        echo "<option>$c</option>";
} else if ($district == "Bulandshahr") {
    foreach ($c14 as $c)
        echo "<option>$c</option>";
} else if ($district == "Etah") {
    foreach ($c15 as $c)
        echo "<option>$c</option>";
} else if ($district == "Etawah") {
    foreach ($c16 as $c)
        echo "<option>$c</option>";
} else if ($district == "Faizabad") {
    foreach ($c17 as $c)
        echo "<option>$c</option>";
} else if ($district == "Farrukhabad") {
    foreach ($c18 as $c)
        echo "<option>$c</option>";
} else if ($district == "Firozabad") {
    foreach ($c19 as $c)
        echo "<option>$c</option>";
} else if ($district == "Gonda") {
    foreach ($c20 as $c)
        echo "<option>$c</option>";
} else if ($district == "Hamirpur") {
    foreach ($c21 as $c)
        echo "<option>$c</option>";
} else if ($district == "Hapur") {
    foreach ($c22 as $c)
        echo "<option>$c</option>";
} else if ($district == "Hardoi") {
    foreach ($c23 as $c)
        echo "<option>$c</option>";
} else if ($district == "Hathras") {
    foreach ($c24 as $c)
        echo "<option>$c</option>";
} else if ($district == "Jalaun") {
    foreach ($c25 as $c)
        echo "<option>$c</option>";
} else if ($district == "Jhansi") {
    foreach ($c26 as $c)
        echo "<option>$c</option>";
} else if ($district == "Kannauj") {
    foreach ($c27 as $c)
        echo "<option>$c</option>";
} else if ($district == "Kanpur Dehat") {
    foreach ($c28 as $c)
        echo "<option>$c</option>";
} else if ($district == "Kanpur Nagar") {
    foreach ($c29 as $c)
        echo "<option>$c</option>";
} else if ($district == "Kaushambi") {
    foreach ($c30 as $c)
        echo "<option>$c</option>";
} else if ($district == "Kushinagar") {
    foreach ($c31 as $c)
        echo "<option>$c</option>";
} else if ($district == "Lucknow") {
    foreach ($c32 as $c)
        echo "<option>$c</option>";
} else if ($district == "Mahoba") {
    foreach ($c33 as $c)
        echo "<option>$c</option>";
} else if ($district == "Mainpuri") {
    foreach ($c34 as $c)
        echo "<option>$c</option>";
} else if ($district == "Mathura") {
    foreach ($c35 as $c)
        echo "<option>$c</option>";
} else if ($district == "Meerut") {
    foreach ($c36 as $c)
        echo "<option>$c</option>";
} else if ($district == "Moradabad") {
    foreach ($c37 as $c)
        echo "<option>$c</option>";
} else if ($district == "Muzaffarnagar") {
    foreach ($c38 as $c)
        echo "<option>$c</option>";
} else if ($district == "Pratapgarh") {
    foreach ($c39 as $c)
        echo "<option>$c</option>";
} else if ($district == "Rampur") {
    foreach ($c40 as $c)
        echo "<option>$c</option>";
} else if ($district == "Saharanpur") {
    foreach ($c41 as $c)
        echo "<option>$c</option>";
} else if ($district == "Sambhal") {
    foreach ($c42 as $c)
        echo "<option>$c</option>";
} else if ($district == "Shahjahanpur") {
    foreach ($c43 as $c)
        echo "<option>$c</option>";
} else if ($district == "Shamali") {
    foreach ($c44 as $c)
        echo "<option>$c</option>";
} else if ($district == "Sitapur") {
    foreach ($c45 as $c)
        echo "<option>$c</option>";
} else if ($district == "Sultanpur") {
    foreach ($c46 as $c)
        echo "<option>$c</option>";
} else if ($district == "Unnao") {
    foreach ($c47 as $c)
        echo "<option>$c</option>";
}
