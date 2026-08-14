<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
    die("Database connection failed");
}

if (!isset($_GET['id'])) {
    die("Booking not found");
}

$booking_id = $_GET['id'];

$sql = "SELECT * FROM bookings WHERE id='$booking_id'";

$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Booking not found");
}

$booking = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Booking Successful</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;

            font-family: Arial, sans-serif;

            background: #f2f4f7;

            display: flex;
            justify-content: center;
            align-items: center;

            min-height: 100vh;
        }

        .success-box {
            width: 450px;

            background: white;

            padding: 30px;

            text-align: center;

            border-radius: 20px;

            box-shadow: 0 5px 20px gray;
        }

        .check {
            width: 90px;
            height: 90px;

            background: #4CAF50;

            color: white;

            border-radius: 50%;

            display: flex;

            justify-content: center;
            align-items: center;

            font-size: 55px;

            margin: auto;
        }

        h1 {
            color: #4CAF50;

            margin-top: 20px;
        }

        .ticket {
            background: #d2ecee;

            padding: 20px;

            border-radius: 12px;

            margin-top: 20px;

            text-align: left;

            line-height: 2;
        }

        .total {
            background: #9780d7;

            color: white;

            padding: 15px;

            border-radius: 10px;

            margin-top: 20px;

            font-size: 24px;

            font-weight: bold;
        }

        .button {
            display: inline-block;

            margin-top: 15px;

            padding: 12px 25px;

            background: #9780d7;

            color: white;

            text-decoration: none;

            border-radius: 8px;

            font-size: 16px;

            border: none;

            cursor: pointer;
        }

        .button:hover {
            background: #765fc2;
        }

        .green {
            background: #4CAF50;
        }

    </style>

</head>

<body>

<div class="success-box">

    <div class="check">
        ✓
    </div>

    <h1>
        Booking Successful!
    </h1>

    <p>
        Your movie ticket has been booked successfully.
    </p>


    <div class="ticket">

        <b>Booking ID:</b>
        <?php echo $booking['id']; ?>

        <br>

        <b>Date:</b>
        <?php echo $booking['booking_date']; ?>

        <br>

        <b>Show Time:</b>
        <?php echo $booking['show_time']; ?>

        <br>

        <b>Number of Tickets:</b>
        <?php echo $booking['tickets']; ?>

        <br>

        <b>Seat Type:</b>
        <?php echo $booking['seat_type']; ?>

        <br>

        <b>Price Per Ticket:</b>
        Rs. <?php echo $booking['price']; ?>

    </div>


    <div class="total">

        Total Price:
        Rs. <?php echo $booking['total_price']; ?>

    </div>


    <!-- View Ticket -->

    <a
        href="admit.php?id=<?php echo $booking['id']; ?>"
        class="button green">

        View Ticket

    </a>


    <!-- Order Food -->

    <a
        href="menu.php?id=<?php echo $booking['id']; ?>"
        class="button">

        Order Drinks

    </a>


    <!-- New Booking -->

    <br>

    <a
        href="booking.php"
        class="button">

        Book Another Ticket

    </a>


    <!-- Print -->

    <br>

    <button
        onclick="window.print()"
        class="button">

        Print Booking

    </button>

</div>

</body>

</html>