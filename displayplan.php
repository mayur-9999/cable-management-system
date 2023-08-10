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

$query = "SELECT * FROM form2";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;
if($total != 0)
{
    ?>
    <h2 align ="center">Plans </h2>
    <table border="2" cellspacing="7" width="100%">
        <tr>
        <th width="5%">id</th>
        <th width="5%">Plan Name</th> 
        <th width="10%">Plan code</th>    
        <th width="10%">Price</th>
        <th width="10%">Quality</th>
        <th width="10%">Operation</th>
        </tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['plname']."</td>
                <td>".$result['pcname']."</td>
                <td>".$result['prname']."</td>
                <td>".$result['qname']."</td>
                <td><a href='updateplan.php?id=$result[id]'><input type='submit' value='Edit' class='Edit'</a>
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