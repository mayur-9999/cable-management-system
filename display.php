<html>
<head>
    <title> Display</title>
    <style>
    body
        {
            background:yellow;
        }
        table
        {
            background: white;
        }
        .update, .delete
        {
            background-color:green;
            color: white;
            border: 0;
            outline: none;
            border-radius:5px;
            height: 23px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
        .delete
        {
            background-color:red;
            color: white;
            border: 0;
            outline: none;
            border-radius:5px;
            height: 23px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }

        </style>
    </head>

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;
if($total != 0)
{
    ?>
    <h2 align ="center">  Displaying all records </h2>
    <table border="2" cellspacing="7" width="85%">
        <tr>
        <th width="5%">Id</th>    
        <th width="10%">Email id</th>
        <th width="10%">Phone Number</th>
        <th width="15%">Operations</th>
        </tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['ename']."</td>
                <td>".$result['mname']."</td>

        <td><a href='update_design.php?id=$result[id]'><input type='submit' value='update' class='update'></a>
        <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = ' return checkdelete()'></a></td>

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