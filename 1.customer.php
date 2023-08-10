<?php 
include ("connection.php"); 

if($_SERVER['REQUEST_METHOD']== "POST")
{
    $hname =$_POST['hname'];
    $rname =$_POST['rname'];
    $pname =$_POST['pname'];
    $selname =$_POST['selname'];

    if(!empty($hname)  && !empty($rname)  && !is_numeric($hname))
    {
        $query ="SELECT * FROM form1 WHERE hname='$hname' limit 1";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            if($result && mysqli_num_rows ($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['rname']  == $rname)
                {
                    header("location: CustomerPage.php");
                    die;
                }
            }
        }
        echo "<script>alert('Wrong Username or Password')</script>";
    }
    else {
        echo "<script type='text/javascript' alert('Wrong Username or Password')</script>";
    }
}
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
        <form method="POST">
            <div class="title">
                <h1>SAYLI CABLE NETWORK Welcomes you !!! </h1>
            </div>
            <div class="form">
                <div class="input_field">
                    <label>Username</label>
                    <input type="text" class="input" name="hname" required>
                </div>
                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" name="rname" required>
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="number" class="input" name="pname">
                </div>
                <div>
                    <div class="input_field">
                    <label>Area</label>
                    <select class="selectbox" name="selname">
                        <option>Select</option>
                        <option>Panchpakadi</option>
                        <option>Khopat</option>
                        <option>Charai</option>
                        <option>Chandanwadi</option>
                    </select>
                </div>
                </div>
                <div class="input_field">
                    <button type="submit" class="btn" value="Register" name="register"
                    formaction="#">Login</button>
                </div>
        </form>
        <div class="flex">
            <form action="dashboard.html" class="flex-item">
            <button class="button">Admin Page</button>
            </form>
            <form action="newregister.php" class="flex-item">
            <button class="button">New Registration</button>
            </form>
            </div>
        </div>
</body>

</html>