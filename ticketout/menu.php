<?php
// Get show time from booking page
$show_time = isset($_GET['show_time']) ? $_GET['show_time'] : '19:00';

// Convert show time to today's date and time
$showDateTime = new DateTime(date('Y-m-d') . ' ' . $show_time);

// Food ordering starts 30 minutes before show
$startTime = clone $showDateTime;
$startTime->modify('-30 minutes');

// Food ordering ends 3 hours after show
$endTime = clone $showDateTime;
$endTime->modify('+3 hours');

// Current time
$currentTime = new DateTime();

// Check whether food ordering is allowed
$canOrder = ($currentTime >= $startTime && $currentTime <= $endTime);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <style>

        body{
            margin:0;
            font-family:Arial, sans-serif;
            background:#f5f5f5;
        }

        .menu{
            text-align:center;
            padding:25px;
            background:#6082a9;
            color:white;
        }

        .menu h1{
            margin:0;
        }

        .all{
            display:flex;
            gap:25px;
            padding:40px;
        }

        .drink{
            box-shadow:0 3px 10px rgba(171, 165, 165, 0.15);
        }

        .drink img{
            width:200px;
            height:180px;
            object-fit:cover;
        }

        h3{
            text-align:center;
            color:#333;
        }

        .drink:hover{
            box-shadow:0 5px 15px rgba(0,0,0,0.25);
        }

    </style>
</head>

<body>

    <div class="menu">
        <h1>Menu</h1>
    </div>

    <div class="all">

        <div class="drink">
            <a href="drink.php">
                <img src="drink.jpg" alt="Drinks">
            </a>
            <h3>Drinks</h3>
        </div>

        <div class="drink">
            <a href="popcorn.php">
                <img src="popcorn.jpg" alt="Popcorn">
            </a>
            <h3>Popcorn</h3>
        </div>

    </div>

</body>
</html>