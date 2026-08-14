<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
    die("Database connection failed");
}

$message = "";

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Check empty fields
    if (empty($email) || empty($password)) {

        $message = "Please enter email and password.";

    } else {

        // Check email in database
        $stmt = $conn->prepare(
            "SELECT * FROM register WHERE email = ?"
        );

        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows == 1) {

            $user = $result->fetch_assoc();

            // Check password
            if (password_verify($password, $user['password'])) {

                // Login successful
                $_SESSION['email'] = $user['email'];

                // Go to landing page
                header("Location: landing.php");
                exit();

            } else {

                $message = "Incorrect password.";

            }

        } else {

            $message = "Email not found.";

        }

        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ticket Booking</title>

    <style>

        body {
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;

            background: linear-gradient(135deg, #d9e4ff, #f5d9e4);

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .alll {
            width: 850px;
            height: 520px;

            display: flex;

            background: white;

            border-radius: 20px;

            overflow: hidden;

            box-shadow: 0 15px 40px rgba(0,0,0,0.20);
        }

        .photo {
            width: 50%;
            overflow: hidden;
        }

        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .all {
            width: 50%;
            height: 520px;

            background: #ffffff;

            padding: 50px 45px;

            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            font-size: 32px;
            color: #590e2a;
        }

        .welcome {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .message {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }

        .input {
            margin-bottom: 18px;
        }

        .input label {
            display: block;
            margin-bottom: 7px;
        }

        .input input {
            width: 100%;
            height: 45px;

            padding: 12px 15px;

            border: 1px solid #d0d0d0;
            border-radius: 8px;

            outline: none;

            box-sizing: border-box;

            font-size: 14px;
        }

        .inputpass {
            display: flex;
            justify-content: flex-end;

            padding: 10px 0;
        }

        .inputpass a {
            color: #590e2a;
            text-decoration: none;
        }

        .submit {
            width: 100%;
            height: 45px;

            border: none;
            border-radius: 8px;

            background: linear-gradient(90deg, #7d79ed, #590e2a);

            color: white;

            font-size: 16px;
            font-weight: bold;

            cursor: pointer;

            margin-top: 10px;
        }

        .submit:hover {
            transform: translateY(-2px);
        }

        @media(max-width: 700px) {

            .alll {
                width: 90%;
                height: auto;
            }

            .photo {
                display: none;
            }

            .all {
                width: 100%;
                height: auto;
            }

        }

    </style>

</head>

<body>

    <div class="alll">

        <div class="photo">

            <img src="download.jpg" alt="Ticket Booking">

        </div>

        <div class="all">

            <h1>Ticket Booking</h1>

            <p class="welcome">
                Welcome back! Login to continue.
            </p>

            <?php if (!empty($message)) { ?>

                <div class="message">
                    <?php echo $message; ?>
                </div>

            <?php } ?>

            <form method="POST" action="">
                <div class="input">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        required>
                </div>
                <div class="input">

                    <label>Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        required>
                </div>

                <div class="inputpass">

                    <a href="#">
                        Forgot Password?
                    </a>

                </div>

                <button
                    class="submit"
                    type="submit"
                    name="login"
                >
                    Login
                </button>
                <button
                    class="submit"
                    type="submit"
                    name="register"
                >
                    Register
                </button>
            </form>

        </div>

    </div>

</body>

</html>

