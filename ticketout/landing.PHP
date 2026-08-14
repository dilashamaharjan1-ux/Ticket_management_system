<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .logo{
                color:rgb(23, 1, 1);
                font-size:28px;
                font-weight:700;
            }
        .login{
                background:white;
                color:#4B1FA7;
                padding:10px 25px;
                border-radius:8px;
                text-decoration:none;
                font-weight:600;
            }
            .card{
                width:320px;
                background:#fff;
                border-radius:20px;
                box-shadow:0 8px 20px rgba(0,0,0,0.2);
                
                }
            .card:hover{
                transform:translateY(-10px);
                }
            .card img{
                width:100%;
                height: 400px;
            
                }
            .card h3{
                text-align:center;
                padding:15px;
                }
            
            nav {
                flex-direction:column;
                text-align:right;
                gap:20px;
                }
            .ticket{
                background-color: rgb(239, 244, 242);
                height:100px;
                border: 2px;
                
            }

            body{
                background:#f4f4f4;
                }
            .title{
                text-align: center;
            }
            select{
    
                font-size:17px;
            } 
            .cards{
                display: flex;
            } 
            .area{
                display: flex;
            }                   
    </style>
</head>
<body>

<div class="ticket">
    <div class="logo">
        🎟 Ticket Management System
    </div>
 <nav>
    <div class="home">
        <a href="#">Home</a>
        <a href="#" class="login">Login</a>
    </div>
</nav>


    <h2 class="title">Book Movie Tickets</h2>

<section class="movies">

<h2>now Movies</h2>

<div class="cards">

        <div class="card">
        <a href="booking.html"> <img src="spiderman.jpg"></a>    
        <h3>Spider-Man</h3>
        </div>


        <div class="card">
        <a href="booking.html"> <img src="Titanic.jpg"></a>
        <h3>Titanic</h3>
        </div>


        <div class="card">
        <a href="booking.html"> <img src="Batman.jpg"></a>
        
        <h3>The Batman</h3>
        </div>


        <div class="card">
        <a href="booking.html"> <img src="squid game.jpg"></a>
        <h3>Squid Game</h3>
        </div>
</div>
    <h2>Movies</h2>
<div class="area">
    <div class="card">
        <img src="wednesday.jpg" alt=""></a>
        <h3>wednesday</h3>
    </div>

    <div class="card">
        <img src="" alt=""></a>
        <h3>Avatar</h3>
    </div>
</div>
</section>

</body>
</html>
