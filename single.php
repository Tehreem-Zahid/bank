<?php
require('connection.php');
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
    <div style="width: 400px;
    height:300px;
    margin: auto;
    margin-top:40px;
    display: flex;
    flex-direction: column;
    text-align:center;">
        <form method="POST">
            <label for="" id="acc">Enter the Account No.</label>
            <input type="text" name="accountNo"
                style="padding: 10px 40px ; outline:none; font-size:20px; text-align:center; ">
            <button type="submit" style="padding: 10px 40px ;" value="submit" id="but" onclick="clicked()">View</button>
        </form>
    </div>
    <script>
        function clicked() {
            document.getElementById('but').addEventListener("click", (e) => {
                e.preventDefault();
                <?php
                $accountNo = $_POST['accountNo'];
                ?>
         });
        }
    </script>
    <?php
        $sql = "SELECT customerId, cname, email, accountNo, balance FROM customers WHERE accountNo='$accountNo'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {?>
    <div style="margin:auto; width:1000px; text-align:center;">
        <table
            style="width:900px; text-align:center;  margin:auto; height:150px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
            <tr style="color:white; background-image: linear-gradient(to right, #00415a, #00B8FF);">
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Email ID</th>
                <th>Account Number</th>
                <th>Balance</th>
            </tr>
            <tr style="background-color:khaki">
                <td>
                    <?php echo $row["customerId"]?>
                    </th>
                <th>
                    <?php echo $row["cname"]?>
                </th>
                <th>
                    <?php echo $row["email"]?>
                </th>
                <th>
                    <?php echo $row["accountNo"]?>
                </th>
                <th>
                    <?php echo $row["balance"]?>
                </th>
            </tr>
        </table>
    </div>
    <?php }
        } else {
          echo "";
        }
?>
    <footer
        style="width: 100%; height: 50px; margin-top: 187px; background-color: wheat; text-align:center; font-size: 18px; padding-top:10px; ">
        <p>Million Martin Bank &vert; Main National Highway &vert; Malir Karachi &vert; +92 213 2098169 &vert;
            martinmillion@gmail.com</p>
    </footer>
</body>

</html>