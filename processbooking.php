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
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $age = $_POST["age"];

    $email = $_POST["email"];

    // if(isset($_POST["fname"]))
    //     $fname = $_POST["firstname"];

    echo "<p>Welcome $fname $lname !</p>";
    echo "<p>Age: $age</p>";
    echo "You are now booked on the ";
    ?>
    
</body>
</html>