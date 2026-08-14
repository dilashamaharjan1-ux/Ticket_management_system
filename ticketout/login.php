<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>

    <style>


        body{
            height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #d9e4ff, #f5d9e4);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .alll{
            width: 850px;
            height: 520px;
            display: flex;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.20);
        }

        .photo{
            width: 50%;
            overflow: hidden;
        }
        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .photo::after{
            bottom: 35px;
            left: 30px;
            color: white;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 2px;
            text-shadow: 2px 2px 5px black;
        }

        .all{
            width: 50%;
            height: 520px;
            background: #ffffff;
            padding: 50px 45px;
        }

        h1{
            text-align: center;
            font-size: 32px;
            color: #590e2a;
        }

        .input{
            text-align: left;
            font-size: 15px;
            padding: 8px 0;
        }

        .input input{
            width: 100%;
            height: 45px;
            padding: 12px 15px;
            border: 1px solid #d0d0d0;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            background: #f8f9fc;
        }
        .inputpass{
            display: flex;
            justify-content: space-between;
            padding: 18px 0;
            font-size: 14px;
        }

        .submit{
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
            transition: 0.3s;
        }

        .submit:hover{
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(89,14,42,0.3);
        }

        .welcome{
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-bottom: 20px;
        }

        @media(max-width: 700px){

            .alll{
                width: 90%;
                height: auto;
            }

            .photo{
                display: none;
            }

            .all{
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

            <form class="well">

                <div class="input">
                    <label>Email</label>
                    <input type="email"
                           placeholder="Enter your email"
                           required>
                </div>

                <div class="input">
                    <label>Password</label>
                    <input type="password"
                           placeholder="Enter your password"
                           required>
                </div>

                <div class="inputpass">
                    <a href="#">Forgot Password?</a>
                    <a href="register.php">Register</a>
                </div>

                <button class="submit" type="submit">
                    Login
                </button>

            </form>

        </div>

    </div>

</body>
</html>