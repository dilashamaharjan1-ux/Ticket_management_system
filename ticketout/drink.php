<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .drink img{
            width:100%;
            height: 300px;
        }
        .drink{
            width:320px;
            background:#fff;
            border-radius:20px;
            box-shadow:0 8px 20px rgba(90, 101, 219, 0.936);
        }          
        h3{
            font-size: 20;
            padding: 15px;
            text-align: center;
        }
        nav{
            gap:20px;  
        }
        .oi{
            color:rgb(66, 59, 59); 
            font-size: 50px;
            text-align: center; 
        }
        .food card{
            background-color: antiquewhite;
                height:100px;
                border: 2px;

        }
        .drink :hover{
            transform:translateY(-10px);
        }
        .all{
            display: flex;
            gap: 10px;
            text-align: center;
        }
        .drink h3{
            text-align: center;
            padding:15px;
        }
        button{
            text-align: center;
            color: rgb(16, 12, 6);
            background-color: rgb(246, 249, 210);
        }
    </style>
</head>
<body>
     <div class="food card">
    <div class="oi">Drinks</div>

        <div class="all">
        <div class="drink">
            <img src="coke.jpg" alt="">
            <h3> Coke</h3>
            <button>180</button>
        </div>
        <div class="drink">
            <img src="sprite.jpg" alt="">
            <h3> Spride</h3>
           <button class="p">180</button>

        </div>
        <div class="drink">
            <img src="pepsi.jpg" alt="">
            <h3> Pepsi</h3>
            <button>180</button>
        </div>
        <div class="drink">
            <img src="thums up.jpg" alt="">
            <h3> Thums up</h3>
            <button>180</button>
        </div>
         <div class="drink">
            <img src="dite coke.jpg" alt="">
            <h3> Dite coke</h3>
           <button>180</button>

            </div>
    </div>
    </div>
</body>
</html>