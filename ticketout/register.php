```php
<?php
$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$message = "";

if (isset($_POST['register'])) {

    // Get form data
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check all fields
    if (
        empty($fullname) ||
        empty($email) ||
        empty($username) ||
        empty($password) ||
        empty($confirm_password)
    ) {
        $message = "Please fill in all fields.";
    }

    // Check password
    elseif ($password !== $confirm_password) {
        $message = "Passwords do not match.";
    }

    // Check email
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address.";
    }

    else {

        // Check if email already exists
        $checkemail = $conn->prepare(
            "SELECT email FROM register WHERE email = ?"
        );

        $checkemail->bind_param("s", $email);
        $checkemail->execute();
        $checkemail->store_result();

        if ($checkemail->num_rows > 0) {

            $message = "Email already exists.";

        } else {

            // Hash password
            $hash_pass = password_hash($password, PASSWORD_DEFAULT);

            // Insert user
            $stmt = $conn->prepare(
                "INSERT INTO register 
                (email, password, fullname, username) 
                VALUES (?, ?, ?, ?)"
            );

            $stmt->bind_param(
                "ssss",
                $email,
                $hash_pass,
                $fullname,
                $username
            );

            if ($stmt->execute()) {

                // Registration successful
                header("Location: login.php");
                exit();

            } else {

                $message = "Registration failed: " . $stmt->error;
            }

            $stmt->close();
        }

        $checkemail->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f2f2;

            display: flex;
            justify-content: center;
            align-items: center;

            min-height: 100vh;
        }

        .all {
            width: 400px;
            background: white;
            box-shadow: 0 3px 10px gray;
            border-radius: 8px;
            overflow: hidden;
        }

        .right {
            background: rgb(235, 217, 217);
            padding: 35px;
        }

        h1 {
            text-align: center;
            color: #590e2a;
            margin-bottom: 25px;
        }

        form {
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;

            margin: 7px 0 12px;

            border: 1px solid #aaa;
            border-radius: 4px;

            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 11px;

            background: #1565c0;
            color: white;

            border: none;
            border-radius: 4px;

            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #0d47a1;
        }

        .login {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login a {
            color: #1565c0;
            text-decoration: none;
        }

        .message {
            background: #ffe0e0;
            color: #b00020;

            padding: 10px;
            margin-bottom: 15px;

            border-radius: 4px;
            text-align: center;
        }

    </style>

</head>

<body>

    <div class="all">

        <div class="right">

            <h1>Register</h1>

            <?php if (!empty($message)) { ?>

                <div class="message">
                    <?php echo $message; ?>
                </div>

            <?php } ?>

            <form action="" method="POST">

                Full Name
                <input
                    type="text"
                    placeholder="Full Name"
                    name="fullname"
                    required
                >

                Email
                <input
                    type="email"
                    placeholder="Email"
                    name="email"
                    required
                >

                Username
                <input
                    type="text"
                    placeholder="Username"
                    name="username"
                    required
                >

                Password
                <input
                    type="password"
                    placeholder="Password"
                    name="password"
                    required
                >

                Confirm Password
                <input
                    type="password"
                    placeholder="Confirm Password"
                    name="confirm_password"
                    required
                >

                <button type="submit" name="register">
                    Register
                </button>

            </form>

            <div class="login">

                Already have an account?

                <a href="login.php">
                    Login
                </a>

            </div>

        </div>

    </div>

</body>

</html>

