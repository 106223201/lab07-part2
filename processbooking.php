<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php

    // Check if the form has been submitted via POST //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Extract the values from the form //
    $firstName = isset($_POST["firstname"]) ? htmlspecialchars($_POST["firstname"]) : "";
    $lastName = isset($_POST["lastname"]) ? htmlspecialchars($_POST["lastname"]) : "";
    $age = isset($_POST["age"]) ? htmlspecialchars($_POST["age"]) : "";

    // Get species value and convert into text //
    $speciesValue = isset($_POST["species"]) ? $_POST["species"] : "";
    $speciesMap = array(
        "M" => "Human", 
        "D" => "Dwarf", 
        "E" => "Elf", 
        "H" => "Hobbit"
    );
    $species = isset($speciesMap[$speciesValue]) ? $speciesMap[$speciesValue] : "Unknown";

    // Get food preferences //
    $food = isset($_POST["food"]) ? htmlspecialchars($_POST["food"]) : "";
    $foodMap = array(
        "none" => "None",
        "lembas" => "Lembas",
        "mushrooms" => "Mushrooms",
        "ent" => "Ent Draft",
        "cram" => "Cram"
    );
    $meal = isset($foodMap[$food]) ? $foodMap[$food] : "None";

    // Get number of travellers //
    $partySize = isset($_POST["partysize"]) ? htmlspecialchars($_POST["partysize"]) : "";

    // Get booking date //
    $bookDay = isset($_POST["bookday"]) ? htmlspecialchars($_POST["bookday"]) : "";

    // Get selected accommodation and tours //

    $toursArray = array();

    if (isset($_POST["accom"])) {
        $toursArray[] = "Accommodation";
    }
    if (isset($_POST["4day"])) {
        $toursArray[] = "4 Day Tour";
    }
    if (isset($_POST["10day"])) {
        $toursArray[] = "10 Day Tour";
    }

    if (sizeof($toursArray) > 0) {
        $tours = implode(", ", $toursArray);
     } else {
        $tours = "None";
     }
    
    // Display the results //
    echo "<p>Welcome $firstName $lastName!</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Species: $species</p>";
    echo "<p>Tours: $tours</p>";
    echo "<p>Meal: $meal</p>";
    echo "<p>Party Size: $partySize</p>";
    if (!empty($bookDay)) {
        echo "<p>Booking Date: $bookDay</p>";
    }
    echo "<p></p>";
}

else {
    echo "<p>Please fill in the form and submit it.</p>";
}
    ?>
    
</body>
</html>