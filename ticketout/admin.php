<?php
$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Cinema Booking</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f5f9;
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #171717;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            padding: 25px 15px;
        }

        .logo {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            color: #ff3b3b;
            margin-bottom: 40px;
        }

        .admin {
            text-align: center;
            margin-bottom: 30px;
        }

        .admin-circle {
            width: 65px;
            height: 65px;
            background: #ff3b3b;
            border-radius: 50%;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
        }

        .admin p {
            margin-top: 10px;
            color: #ddd;
        }

        .menu a {
            display: block;
            padding: 14px 15px;
            margin: 5px 0;
            color: #ddd;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .menu a:hover,
        .menu .active {
            background: #ff3b3b;
            color: white;
        }

        /* MAIN */
        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 25px;
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .top h1 {
            font-size: 30px;
            color: #222;
        }

        .logout {
            background: #ff3b3b;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
        }

        /* CARDS */
        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        }

        .card h3 {
            color: #777;
            font-size: 15px;
        }

        .card h2 {
            margin-top: 10px;
            font-size: 30px;
            color: #222;
        }

        .icon {
            font-size: 30px;
            margin-bottom: 10px;
}
        .content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .box {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        }

        .box h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 13px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }

        table th {
            background: #f7f7f7;
        }

        .status {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
        }

        .confirmed {
            background: #d8f8df;
            color: green;
        }

        .pending {
            background: #fff0c7;
            color: #a56a00;
        }


        .actions {
            display: grid;
            gap: 12px;
        }

        .action {
            text-decoration: none;
            background: #f5f5f5;
            padding: 15px;
            border-radius: 8px;
            color: #222;
            transition: 0.3s;
        }

        .action:hover {
            background: #ff3b3b;
            color: white;
        }

        @media(max-width: 1000px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .content {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width: 700px) {
            .sidebar {
                width: 200px;
            }

            .main {
                margin-left: 200px;
                width: calc(100% - 200px);
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">
        🎬 CINEMA ADMIN
    </div>

    <div class="admin">
        <div class="admin-circle">A</div>
        <p>Administrator</p>
    </div>

    <div class="menu">

        <a href="admin.php" class="active">
            🏠 Dashboard
        </a>

        <a href="movies.php">
            🎬 Movies
        </a>

        <a href="shows.php">
            🕐 Show Times
        </a>

        <a href="seats.php">
            💺 Seats
        </a>

        <a href="booking.php">
            🎟 Bookings
        </a>

        <a href="customers.php">
            👥 Customers
        </a>

        <a href="food.php">
            🍿 Food & Drinks
        </a>

        <a href="reports.php">
            📊 Reports
        </a>

        <a href="settings.php">
            ⚙ Settings
        </a>

    </div>
</div>


<!-- MAIN CONTENT -->
<div class="main">

    <div class="top">
        <div>
            <h1>Admin Dashboard</h1>
            <p>Manage your cinema ticket booking system</p>
        </div>

        <a href="login.php" class="logout">
            Logout
        </a>
    </div>


    <!-- DASHBOARD CARDS -->
    <div class="cards">

        <div class="card">
            <div class="icon">🎬</div>
            <h3>Total Movies</h3>
            <h2>12</h2>
        </div>

        <div class="card">
            <div class="icon">🎟</div>
            <h3>Total Bookings</h3>
            <h2>156</h2>
        </div>

        <div class="card">
            <div class="icon">💺</div>
            <h3>Available Seats</h3>
            <h2>85</h2>
        </div>

        <div class="card">
            <div class="icon">👥</div>
            <h3>Customers</h3>
            <h2>98</h2>
        </div>

    </div>


    <!-- CONTENT -->
    <div class="content">

        <!-- RECENT BOOKINGS -->
        <div class="box">

            <h2>Recent Bookings</h2>

            <table>

                <tr>
                    <th>Booking ID</th>
                    <th>Show</th>
                    <th>Seat</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td>#BK001</td>
                    <td>10:00 AM</td>
                    <td>G12</td>
                    <td>
                        <span class="status confirmed">
                            Confirmed
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>#BK002</td>
                    <td>1:30 PM</td>
                    <td>V05</td>
                    <td>
                        <span class="status confirmed">
                            Confirmed
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>#BK003</td>
                    <td>5:00 PM</td>
                    <td>S18</td>
                    <td>
                        <span class="status pending">
                            Pending
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>#BK004</td>
                    <td>8:00 PM</td>
                    <td>G07</td>
                    <td>
                        <span class="status confirmed">
                            Confirmed
                        </span>
                    </td>
                </tr>

            </table>

        </div>


        <!-- QUICK ACTIONS -->
        <div class="box">

            <h2>Quick Actions</h2>

            <div class="actions">

                <a href="movies.php" class="action">
                    ➕ Add New Movie
                </a>

                <a href="shows.php" class="action">
                    🕐 Add Show Time
                </a>

                <a href="seats.php" class="action">
                    💺 Manage Seats
                </a>

                <a href="booking.php" class="action">
                    🎟 View Bookings
                </a>

                <a href="food.php" class="action">
                    🍿 Manage Food
                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>