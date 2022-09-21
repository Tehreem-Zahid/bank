<?php
require('connection.php');
$query="select * from customers";
$result=mysqli_query($conn,$query);
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
    <div style="width:100%;">
        <table
            style="width:1200px; text-align:center;  margin:auto; height:700px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
            <tr>
                <th colspan="5" style="color:#00415a; border:none;">
                    <h2><u>Our Customers</u></h2>
                </th>
            </tr>
            <tr
                style="color:white; border: 1px solid #00415a; border-collapse: collapse; background-image: linear-gradient(to right, #00415a, #00B8FF);">
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Email ID</th>
                <th>Account Number</th>
                <th>Balance</th>
            </tr>
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {
                ?>
            <tr style="background-color:khaki">
                <td>
                    <?php echo $rows['customerId'];?>
                </td>
                <td>
                    <?php echo $rows['cname'];?>
                </td>
                <td>
                    <?php echo $rows['email'];?>
                </td>
                <td>
                    <?php echo $rows['accountNo'];?>
                </td>
                <td>
                    <?php echo $rows['balance'];?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <footer
        style="width: 100%; height: 50px; margin-top: 50px; background-color: wheat; text-align:center; font-size: 18px; padding-top:10px; ">
        <p>Million Martin Bank &vert; Main National Highway &vert; Malir Karachi &vert; +92 213 2098169 &vert;
            martinmillion@gmail.com</p>
    </footer>
</body>

</html>