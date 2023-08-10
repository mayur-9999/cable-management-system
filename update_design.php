<?php 
include ("connection.php"); 

$Id = $_GET['id'];

$query = "SELECT * FROM form1 where id = '$Id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

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
                <h1>UPDATE DETAILS </h1>
            </div>
            <div class="form">
                <div class="input_field">
                    <label>Customer Id</label>
                    <input type="text" value="<?php echo $result['cname'];?>" class="input" name="cname" required>
                </div>
                <div class="input_field">
                    <label>STB-Id</label>
                    <input type="text" value="<?php echo $result['sname'];?>" class="input" name="sname" required>
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="number" value="<?php echo $result['pname'];?>" class="input" name="pname">
                </div>
                <div>
                    <div class="input_field">
                    <label>Area</label>
                    <select class="selectbox" value="<?php echo $result['selname'];?>" name="selname" required>
                        <option >Select</option>
                        <option value="Panchpakadi"
                        <?php
                                if($result['selname'] == 'Panchpakadi')
                                {
                                    echo "selected";
                                }
                            ?>
                        >Panchpakadi</option>
                        <option value="Khopat"
                        <?php
                                if($result['selname'] == 'Khopat')
                                {
                                    echo "selected";
                                }
                            ?>
                        >Khopat</option>
                        <option value="Charai"
                        <?php
                                if($result['selname'] == 'Charai')
                                {
                                    echo "selected";
                                }
                            ?>
                        >Charai</option>
                        <option value="Chandanwadi"
                        <?php
                                if($result['selname'] == 'Chandanwadi')
                                {
                                    echo "selected";
                                }
                            ?>    
                        >Chandanwadi</option>
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
                    <select class="selectbox" value="<?php echo $result['sename'];?>" name="sename" required>
                        <option>Select</option>
                        <option value="Normal Pack"
                            <?php
                                if($result['sename'] == 'Normal Pack')
                                {
                                    echo "selected";
                                }
                            ?>
                        >
                        Normal Pack</option>
                        <option value="Platinum Pack"
                            <?php
                                if($result['sename'] == 'Platinum Pack')
                                {
                                    echo "selected";
                                }
                            ?>
                        >Platinum Pack</option>
                        <option value="Premium Pack"
                            <?php
                                if($result['sename'] == 'Premium Pack')
                                {
                                    echo "selected";
                                }
                            ?>
                        >Premium Pack</option>
                        <option  value="Gold Pack"
                        <?php
                                if($result['sename'] == 'Gold Pack')
                                {
                                    echo "selected";
                                }
                            ?>
                        >Gold Pack</option>Prices according to the selected Subscription
                        </select>
                </div>
                <div class="input_field">
                    <label>Set Username</label>
                    <input type="text" class="input" value="<?php echo $result['hname'];?>" name="hname" placeholder="eg.mayur@123" required>
                </div>
                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" value="<?php echo $result['cname'];?>" name="rname" placeholder="set Password" required>
                </div> 
                <div class="input_field">
                    <button type="submit" class="btn" value="Update" name="register">Update Details</button>
                </div>
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
        
        $query= "UPDATE form1 set cname='$cname',sname='$sname',pname='$pname',selname='$selname',kname='$kname',sename='$sename',hname='$hname',rname='$rname' WHERE id ='$Id'";         $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "<script>alert('Record Updated')</script>";
            
            ?>
            <meta http-equiv="refresh" content="1; url='http://localhost/Cable%20Management/updatecustomer.php'" />

            <?php
        }
        else
        {
            echo "Failed to Update";
        }
    }
    
?>
