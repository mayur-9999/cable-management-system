<?php 
include ("connection.php"); 
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                <h1>NEW REGISTRATION </h1>
            </div>
            <div class="form">
                <div class="input_field">
                    <label>Customer Id</label>
                    <input type="text" class="input" name="cname" required>
                </div>
                <div class="input_field">
                    <label>STB-Id</label>
                    <input type="text" class="input" name="sname" required>
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="number" class="input" name="pname">
                </div>
                <div>
                    <div class="input_field">
                    <label>Area</label>
                    <select class="selectbox" name="selname" required>
                        <option>Select</option>
                        <option>Panchpakadi</option>
                        <option>Khopat</option>
                        <option>Charai</option>
                        <option>Chandanwadi</option>
                    </select>
                    </div>
                <div class="input_field">
                    <label>Your Recent Plan</label>
                    <ul>
                    <li><input type="checkbox" name="kname" value="Hindi Channels Combo">Hindi Channels Combo</li></br>
                    <li><input type="checkbox" name="kname" value="Marathi Channels Combo">Marathi Channels Combo</li></br>
                    <li><input type="checkbox" name="kname" value="News Network">News Network</li></br>
                    <li><input type="checkbox" name="kname" value="Hindi Entertainment">Hindi Entertainment</li></br>
                    <li><input type="checkbox" name="kname" value="Punjabi Channels Combo">Punjabi Channels Combo</li></br>
                    <li><input type="checkbox" name="kname" value="Sports Combo">Sports Combo</li></br>
                    <li><input type="checkbox" name="kname" value="Infotainment pack">Infotainment pack</li></br>
                    </ul>
                </div>
                <div class="input_field">
                    <label>Subscription</label>
                    <select class="selectbox" name="sename" required>
                        <option>Select</option>
                        <option>Normal Pack</option>
                        <option>Platinum Pack</option>
                        <option>Premium Pack</option>
                        <option>Gold Pack</option>Prices according to the selected Subscription
                        </select>
                </div>
                <div class="input_field">
                    <label>Set Username</label>
                    <input type="text" class="input" name="hname" placeholder="eg.mayur@123" required>
                </div>
                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" name="rname" placeholder="set Password" required>
                </div>
                <div class="input_field">
                    <button type="submit" class="btn" value="Register" name="register">Register</button>
                    <form action="1.customer.php">
                    </form>
                </div>
                <div class="flex">
                <form action="1.customer.php" class="flex-item">
                <button class="button">Back to Login</button>
                </form>
        </form>
        </div>
        </div>
</body>
</html>

<?php 
    if($_POST['register'])
    {
        $cname =$_POST['cname'];
        $sname =$_POST['sname'];
        $pname =$_POST['pname'];
        $selname =$_POST['selname'];
        $kname =$_POST['kname'];
        $sename =$_POST['sename'];
        $hname =$_POST['hname'];
        $rname =$_POST['rname'];

        if($cname !="" && $sname !="" && $pname !="" && $selname !="" && $kname !="" && $sename !="" && $hname !="" && $rname !="" )

        $query = "INSERT INTO form1 (cname,sname,pname,selname,kname,sename,hname,rname) VALUES('$cname','$sname','$pname','$selname','$kname','$sename','$hname','$rname')";                                                                                                                                                                                                                                                                                                                                                                                                                                                  
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Inserted";
        }
        else
        {
            echo "Failed";
        }
    }
    
?>