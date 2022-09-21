<?php
require('connection.php');
$cusname=$_POST['cusname'];
$cusid=$_POST['cusid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxi Million Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
</head>

<body>
    <nav id="nav">
        <ul>
            <div id="root"><img src="bank-988164.png" alt="" width="25px" height="25px"><span>MMB</span></div>
            <li><a href="./home.php" action="./home.php">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Our Mission</a></li>
            <li><img src="phone-call.png" alt="" width="25px" height="25px" style="filter: invert(1);"></li>
            <li><b>+92 213 2098169</b></li>
        </ul>
    </nav>
    <!-- <div class="voot" style="background-color: #00B8FF; width: 400px; margin-left: 20px; margin-top: 30px; margin-bottom: 30px; height:600px; border-radius: 500px;">
        
    </div> -->
    <div class="cont" style="display: flex; flex-direction:row; width:100%;">

        <div class="fom" style="width:50%; height:500px; padding-left: 40px; padding-top: 40px; font-size: 25px;">
            <form action="" method="POST">
                <input type='hidden' name="cusname" value="<?php echo $cusname;?>">
                <input type='hidden' name="cusid" value="<?php echo $cusid;?>">
                <h5 style="display: inline-block; font-size: 25px;">Transfer From : </h5><label for=""
                    style="outline: none; border: 2px solid red; margin: 20px; padding: 3px 10px; color: black; background-color: wheat;">
                    <?php echo $cusname ?>
                </label><br>
                <h5 style="display: inline-block; font-size: 25px;">Transfer to : </h5><input type="text"
                    style="outline: none; font-size: 20px; border: 2px solid red; padding: 3px 0px; margin: 20px; border: none; color: black; background-color: wheat;"
                    name="to" value=""><br>
                <h5 style="display: inline-block; font-size: 25px;">Account No : </h5><input type="text"
                    style="outline: none; font-size: 20px; border: 2px solid red; padding: 3px 0px; margin: 20px; border: none; color: black; background-color: wheat;"
                    name="toacc" value=""><br>
                <h5 style="display: inline-block; font-size: 25px;">Amount to transfer : </h5><input type="text"
                    style="outline:none; border: 2px solid red; padding: 3px 0px; margin: 20px; border: none; black: white; background-color: wheat; font-size: 20px;"
                    name="amount"><br>
                <button style="margin-top:80px;" id="boot" type="submit" onclick="clicked()">Transfer</button>
            </form>
            <script>
                function clicked() {
                    document.getElementById('boot').addEventListener("click", (e) => {
                        e.preventDefault();
                <?php 
                $to = $_POST['to'];
                        $toacc = $_POST['toacc'];
                        $amount = $_POST['amount'];
?>
         });
                }
            </script>
        </div>
        <?php 
                $result=mysqli_query($conn,"UPDATE customers set balance=balance+$amount where accountNo='$toacc'");
                $result=mysqli_query($conn,"UPDATE customers set balance=balance-$amount where customerId='$cusid'");
        ?>
        <div id="receipt"
            style="color: white; border-radius: 100px; background-color: #00415a; width: 600px; height: 456.5px; margin: 35px; border: 2px solid #00415a; text-align:center;">
            <h3 style=" margin-top:30px;"><u>Transfer Receipt</u></h3><br>
            Transfer From: <label style="padding:10px;" for="">
                <?php echo $cusname?>
            </label><br>
            Transfer To: <label style="padding:10px;" for="">
                <?php echo $to?>
            </label><br>
            Account No: <label style="padding:10px;" for="">
                <?php echo $toacc?>
            </label><br>
            Amount: <label style="padding:10px;" for="">
                <?php echo $amount?>
            </label><br>
            Date: <label style="padding:10px;" for="">
                <?php echo date("Y/m/d")?>
            </label><br>
            Time: <label style="padding:10px;" for="">
                <?php echo date("h:i:s")?>
            </label><br>
        </div>

    </div>
    <footer
        style="width: 100%; height: 50px; background-color: wheat; text-align:center; font-size: 18px; padding-top:10px; ">
        <p>Million Martin Bank &vert; Main National Highway &vert; Malir Karachi &vert; +92 213 2098169 &vert;
            martinmillion@gmail.com</p>
    </footer>
</body>

</html>