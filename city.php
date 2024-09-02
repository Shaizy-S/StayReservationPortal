<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$selectedCity = $_POST["city"];
if ($selectedCity === "Mumbai") {
    include("Mumbai.html");
} elseif ($selectedCity === "LonavalaKhandala") {
    include("LonavalaKhandala.html");
} elseif ($selectedCity === "Pune") {
    include("Pune.html");
} 
elseif ($selectedCity === "Amravati") {
    include("Amravati.html");
}
elseif ($selectedCity === "Alibaug") {
    include("Alibaug.html");
}
elseif ($selectedCity === "Thane") {
    include("Thane.html");
}
elseif ($selectedCity === "Ratnagiri") {
    include("Ratnagiri.html");
}
elseif ($selectedCity === "Panvel") {
    include("Panvel.html");
}
elseif ($selectedCity === "Nashik") {
    include("Nashik.html");
}
elseif ($selectedCity === "Nagpur") {
    include("Nagpur.html");
}
elseif ($selectedCity === "Mahabaleshwar") {
    include("Mahabaleshwar.html");
}
elseif ($selectedCity === "Mumbai") {
    include("Mumbai.html");
}
elseif ($selectedCity === "Pune") {
    include("Pune.html");
}
elseif ($selectedCity === "Dhule") {
    include("Dhule.html");
}
elseif ($selectedCity === "Chandrapur") {
    include("Chandrapur.html");
}
elseif ($selectedCity === "Kolhapur") {
    include("Kolhapur.html");
}
elseif ($selectedCity === "Ahmednagar") {
    include("Ahmednagar.html");
}
elseif ($selectedCity === "Latur") {
    include("Latur.html");
}
elseif ($selectedCity === "Solapur") {
    include("Solapur.html");
}
elseif ($selectedCity === "Shirdi") {
    include("Shirdi.html");
}
elseif ($selectedCity === "Jalgaon") {
    include("Jalgaon.html");
}
elseif ($selectedCity === "Satara") {
    include("Satara.html");
}

elseif ($selectedCity === "Akola") {
    include("Akola.html");
}

else {
    echo "City not found.";
}
?>
