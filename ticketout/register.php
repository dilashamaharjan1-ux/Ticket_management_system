<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>

        body{
            margin:0;
            font-family:Arial, sans-serif;
            background:#f2f2f2;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .all{
            width:400px;
            background:white;
            box-shadow:0 3px 10px gray;
        }

        .right{
            background:rgb(235, 217, 217);
            padding:35px;
        }

        h1{
            text-align:center;
            color:#590e2a;
            margin-bottom:25px;
        }

        form{
            text-align:left;
        }

        input{
            width:100%;
            padding:10px;
            margin:7px 0 12px;
            border:1px solid #aaa;
            border-radius:4px;
        }

        button{
            width:100%;
            padding:11px;
            background:#1565c0;
            color:white;
            border:none;
            border-radius:4px;
            cursor:pointer;
        }

        button:hover{
            background:#0d47a1;
        }

        .login{
            text-align:center;
            margin-top:15px;
            font-size:14px;
        }

        .login a{
            color:#1565c0;
            text-decoration:none;
        }

    </style>
</head>

<body>

    <div class="all">

        <div class="right">

            <h1>Register</h1>

            <form>

                Full Name
                <input type="text" placeholder="Full Name">

                Email
                <input type="email" placeholder="Email">

                Username
                <input type="text" placeholder="Username">

                Password
                <input type="password" placeholder="Password">

                Confirm Password
                <input type="password" placeholder="Confirm Password">

                <button type="submit">
                    Register
                </button>

            </form>

            <div class="login">
                Already have an account?
                <a href="login.html">Login</a>
            </div>

        </div>

    </div>

</body>
</html>
<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check password
    if ($password != $confirm_password) {

        echo "<script>
                alert('Password does not match!');
              </script>";

    } else {

        $check = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $check);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {

            echo "<script>
                    alert('Username already exists!');
                  </script>";

        } else {

           
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);


            $sql = "INSERT INTO users 
                    (fullname, email, username, password)
                    VALUES (?, ?, ?, ?)";

            $stmt = mysqli_prepare($conn, $sql);

            mysqli_stmt_bind_param(
                $stmt,
                "ssss",
                $fullname,
                $email,
                $username,
                $hashed_password
            );

            if (mysqli_stmt_execute($stmt)) {

                echo "<script>
                        alert('Registration successful!');
                        window.location.href='login.php';
                      </script>";

            } else {

                echo "<script>
                        alert('Registration failed!');
                      </script>";
            }
        }
    }
}

mysqli_close($conn);

?>