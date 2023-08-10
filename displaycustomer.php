<html>
<head>
    <title> Display Customers</title>
    <style>
    body
        {
            background:#f05462;
        }
        table
        {
            text-align: center;
            background: yellow;
        }
        </style>
    </head>

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM form1";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;
if($total != 0)
{
    ?>
    <h2 align ="center">  Displaying all records </h2>
    <table border="2" cellspacing="7" width="100%">
        <tr>
        <th width="5%">ID</th> 
        <th width="10%">Customer Id</th>    
        <th width="10%">STB-Id id</th>
        <th width="10%">Phone Number</th>
        <th width="15%">Area</th>
        <th width="15%">Recent Plan</th>
        <th width="15%">Subscription</th>
        <th width="10%">Username</th>
        <th width="15%">Password</th>
        </tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['cname']."</td>
                <td>".$result['sname']."</td>
                <td>".$result['pname']."</td>
                <td>".$result['selname']."</td>
                <td>".$result['kname']."</td>
                <td>".$result['sename']."</td>
                <td>".$result['hname']."</td>
                <td>".$result['rname']."</td>
            </tr>";
    }
}    
else
{ 
    echo "No records found";
}
?>
</table>

<script>
    function checkdelete()
    {
        return confirm('Are you sure want to delete this record ?');
    }
</script>