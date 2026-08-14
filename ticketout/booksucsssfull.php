<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $movie_date = $_POST["movie_date"];
    $show_time = $_POST["show_time"];
    $seat = $_POST["seat"];

    // Seat price
    if (substr($seat, 0, 1) == "S") {
        $category = "Silver";
        $price = 300;
    }
    elseif (substr($seat, 0, 1) == "G") {
        $category = "Gold";
        $price = 400;
    }
    elseif (substr($seat, 0, 1) == "V") {
        $category = "VIP";
        $price = 600;
    }

    echo "<h2 style='text-align:center;color:green;'>Booking Successful!</h2>";

    echo "<div style='width:400px;margin:20px auto;padding:20px;background:white;border-radius:10px;box-shadow:0 0 10px #aaa;'>";

    echo "<p><b>Movie Date:</b> $movie_date</p>";
    echo "<p><b>Show Time:</b> $show_time</p>";
    echo "<p><b>Seat:</b> $seat</p>";
    echo "<p><b>Category:</b> $category</p>";
    echo "<p><b>Price:</b> Rs. $price</p>";

    echo "</div>";
}