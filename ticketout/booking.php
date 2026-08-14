<?php
$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$message = "";
$total_price = 0;

if (isset($_POST['book'])) {

    $date = $_POST['date'];
    $show_time = $_POST['show_time'];
    $tickets = $_POST['tickets'];
    $seat_type = $_POST['seat_type'];

    // Seat prices
    if ($seat_type == "Silver") {
        $price = 250;
    } elseif ($seat_type == "Gold") {
        $price = 350;
    } elseif ($seat_type == "VIP") {
        $price = 500;
    } else {
        $price = 0;
    }

    // Calculate total
    $total_price = $tickets * $price;

    // Save booking
    $sql = "INSERT INTO bookings
            (booking_date, show_time, tickets, seat_type, price, total_price)
            VALUES
            ('$date', '$show_time', '$tickets', '$seat_type', '$price', '$total_price')";

    if (mysqli_query($conn, $sql)) {
        $message = "Booking Successful!";
    } else {
        $message = "Booking Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Movie Ticket Booking</title>

    <style>

        body {
            justify-content: center;
            align-items: center;
            display: flex;
            min-height: 100vh;
            background: #f5f5f5;
        }

        .all {
            width: 400px;
            background: white;
            box-shadow: 0 3px 10px gray;
        }

        .booking {
            background: #d2ecee;
            color: rgb(124, 25, 61);
            padding: 20px 45px;
            display: grid;
            gap: 15px;
            font-size: 20px;
        }

        h2 {
            text-align: center;
        }

        input[type="date"],
        select {
            width: 100%;
            padding: 15px;
            font-size: 17px;
            border: 1px solid #f26e6e;
            border-radius: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        .button {
            background: #9780d7;
            color: white;
            padding: 15px 45px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background: #765fc2;
        }

        .message {
            background: #d4edda;
            color: green;
            padding: 12px;
            text-align: center;
            border-radius: 8px;
        }

        .total {
            background: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            color: #222;
            font-size: 22px;
            font-weight: bold;
        }

    </style>

</head>

<body>

<div class="all">

    <div class="booking">

        <h2>Book Movie Tickets</h2>

        <?php if ($message != "") { ?>

            <div class="message">
                <?php echo $message; ?>
            </div>

        <?php } ?>


        <form method="POST">

            <div>
                <label>Date</label>

                <input
                    type="date"
                    name="date"
                    required
                >
            </div>


            <div>

                <label>Show Time</label>

                <select name="show_time" required>

                    <option value="">Select Time</option>

                    <option value="10:00 AM">
                        10:00 AM
                    </option>

                    <option value="1:00 PM">
                        1:00 PM
                    </option>

                    <option value="4:00 PM">
                        4:00 PM
                    </option>

                    <option value="7:00 PM">
                        7:00 PM
                    </option>

                </select>

            </div>


            <div>

                <label>Tickets</label>

                <select name="tickets" required>

                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                </select>

            </div>


            <div>

                <label>Seat Type</label>

                <select name="seat_type" required>

                    <option value="">
                        Select Seat
                    </option>

                    <option value="Silver">
                        Silver - Rs. 250
                    </option>

                    <option value="Gold">
                        Gold - Rs. 350
                    </option>

                    <option value="VIP">
                        VIP - Rs. 500
                    </option>

                </select>

            </div>


            <button
                type="submit"
                name="book"
                class="button">
                Book Ticket
            </button>

        </form>


        <?php if ($total_price > 0) { ?>

            <div class="total">

                Total Price:
                Rs. <?php echo $total_price; ?>

            </div>

        <?php } ?>


        <a href="menu.html">
            <button type="button" class="button">
                Menu
            </button>
        </a>

    </div>

</div>

</body>
</html>