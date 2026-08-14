

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #eeeeee;
        }

        .booking {
            width: 750px;
            max-width: 95%;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }


        .screen {
            width: 75%;
            margin: 20px auto 35px;
            padding: 12px;
            background: #c80f0f;
            color: white;
            text-align: center;
            border-radius: 5px;
        }


        .details {
            text-align: center;
            margin-bottom: 25px;
        }

        .details input,
        .details select {
            padding: 8px;
            margin: 5px;
            border: 1px solid #aaa;
            border-radius: 5px;
        }


        .section {
            margin: 30px 0;
        }

        .section h2 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 15px;
        }



        .seats {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 8px;
            max-width: 500px;
            margin: auto;
        }

        .seat input {
            display: none;
        }

        .seat label {
            display: block;
            padding: 7px 2px;
            font-size: 11px;
            text-align: center;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }


        .silver label {
            background: #888;
        }

        .silver input:checked + label {
            background: #222;
        }

        .gold label {
            background: #d4a017;
        }

        .gold input:checked + label {
            background: #765800;
        }

        /* VIP */

        .vip label {
            background: #8e44ad;
        }

        .vip input:checked + label {
            background: #4a235a;
        }

        /* BUTTON AREA */

        .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .main-btn,
        .book-btn {
            padding: 11px 30px;
            border-radius: 6px;
            font-size: 15px;
            text-decoration: none;
            cursor: pointer;
        }

        .main-btn {
            background: #555;
            color: white;
        }

        .main-btn:hover {
            background: #333;
        }

        .book-btn {
            background: #222;
            color: white;
            border: none;
        }

        .book-btn:hover {
            background: #444;
        }

        @media (max-width: 600px) {

            .booking {
                padding: 15px;
            }

            .seats {
                grid-template-columns: repeat(5, 1fr);
                gap: 5px;
            }

            .seat label {
                font-size: 9px;
                padding: 6px 1px;
            }

            .buttons {
                gap: 8px;
            }

            .main-btn,
            .book-btn {
                padding: 10px 20px;
            }
        }

    </style>
</head>

<body>

<div class="booking">

    <h1> Movie Ticket Booking</h1>

    <div class="screen">
        SCREEN
    </div>

    <form action="booking.php" method="POST">

        <div class="details">

            <label>Movie Date:</label>

            <input
                type="date"
                name="movie_date"
                required
            >

            <br>

            <label>Show Time:</label>

            <select name="show_time" required>

                <option value="">Select Show Time</option>

                <option value="10:00 AM">10:00 AM</option>
                <option value="1:00 PM">1:00 PM</option>
                <option value="4:00 PM">4:00 PM</option>
                <option value="7:00 PM">7:00 PM</option>

            </select>

        </div>

        <div class="section silver">

            <h2> Silver - Rs. 300</h2>

            <div class="seats">

                <div class="seat"><input type="radio" name="seat" id="S1" value="S1" required><label for="S1">S1<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S2" value="S2"><label for="S2">S2<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S3" value="S3"><label for="S3">S3<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S4" value="S4"><label for="S4">S4<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S5" value="S5"><label for="S5">S5<br>300</label></div>

                <div class="seat"><input type="radio" name="seat" id="S6" value="S6"><label for="S6">S6<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S7" value="S7"><label for="S7">S7<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S8" value="S8"><label for="S8">S8<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S9" value="S9"><label for="S9">S9<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S10" value="S10"><label for="S10">S10<br>300</label></div>

                <div class="seat"><input type="radio" name="seat" id="S11" value="S11"><label for="S11">S11<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S12" value="S12"><label for="S12">S12<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S13" value="S13"><label for="S13">S13<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S14" value="S14"><label for="S14">S14<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S15" value="S15"><label for="S15">S15<br>300</label></div>

                <div class="seat"><input type="radio" name="seat" id="S16" value="S16"><label for="S16">S16<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S17" value="S17"><label for="S17">S17<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S18" value="S18"><label for="S18">S18<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S19" value="S19"><label for="S19">S19<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S20" value="S20"><label for="S20">S20<br>300</label></div>

                <div class="seat"><input type="radio" name="seat" id="S21" value="S21"><label for="S21">S21<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S22" value="S22"><label for="S22">S22<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S23" value="S23"><label for="S23">S23<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S24" value="S24"><label for="S24">S24<br>300</label></div>
                <div class="seat"><input type="radio" name="seat" id="S25" value="S25"><label for="S25">S25<br>300</label></div>

            </div>
        </div>

        <div class="section gold">

            <h2> Gold - Rs. 400</h2>

            <div class="seats">

                <div class="seat"><input type="radio" name="seat" id="G1" value="G1"><label for="G1">G1<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G2" value="G2"><label for="G2">G2<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G3" value="G3"><label for="G3">G3<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G4" value="G4"><label for="G4">G4<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G5" value="G5"><label for="G5">G5<br>400</label></div>

                <div class="seat"><input type="radio" name="seat" id="G6" value="G6"><label for="G6">G6<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G7" value="G7"><label for="G7">G7<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G8" value="G8"><label for="G8">G8<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G9" value="G9"><label for="G9">G9<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G10" value="G10"><label for="G10">G10<br>400</label></div>

                <div class="seat"><input type="radio" name="seat" id="G11" value="G11"><label for="G11">G11<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G12" value="G12"><label for="G12">G12<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G13" value="G13"><label for="G13">G13<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G14" value="G14"><label for="G14">G14<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G15" value="G15"><label for="G15">G15<br>400</label></div>

                <div class="seat"><input type="radio" name="seat" id="G16" value="G16"><label for="G16">G16<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G17" value="G17"><label for="G17">G17<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G18" value="G18"><label for="G18">G18<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G19" value="G19"><label for="G19">G19<br>400</label></div>
                <div class="seat"><input type="radio" name="seat" id="G20" value="G20"><label for="G20">G20<br>400</label></div>

            </div>
        </div>
        <div class="section vip">

            <h2> VIP - Rs. 600</h2>

            <div class="seats">

                <div class="seat"><input type="radio" name="seat" id="V1" value="V1"><label for="V1">V1<br>600</label></div>
                <div class="seat"><input type="radio" name="seat" id="V2" value="V2"><label for="V2">V2<br>600</label></div>
                <div class="seat"><input type="radio" name="seat" id="V3" value="V3"><label for="V3">V3<br>600</label></div>
                <div class="seat"><input type="radio" name="seat" id="V4" value="V4"><label for="V4">V4<br>600</label></div>
                <div class="seat"><input type="radio" name="seat" id="V5" value="V5"><label for="V5">V5<br>600</label></div>

                <div class="seat"><input type="radio" name="seat" id="V6" value="V6"><label for="V6">V6<br>600</label></div>
                <div class="seat"><input type="radio" name="seat" id="V7" value="V7"><label for="V7">V7<br>600</label></div>
                <div class="seat"><input type="radio" name="seat" id="V8" value="V8"><label for="V8">V8<br>600</label></div>
                <div class="seat"><input type="radio" name="seat" id="V9" value="V9"><label for="V9">V9<br>600</label></div>
                <div class="seat"><input type="radio" name="seat" id="V10" value="V10"><label for="V10">V10<br>600</label></div>

            </div>
        </div>
        <div class="buttons">

            <a href="index.php" class="main-btn">
                Main
            </a>

            <button type="submit" class="book-btn">
                Book Ticket
            </button>

        </div>

    </form>

</div>

</body>
</html>