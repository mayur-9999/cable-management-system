<?php
include ("connection.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Menu Bar</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
        <h4>Customer Page</h4>
            <img src="" alt="">
        </div>
        <ul class="menu">
            <li><a href="customerdetails.php">My Details</a></li>
            <li><a href="#">Update My Details</a></li>
            <li><a href="#">Subscription</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>   
        <div class="content-2">
                    <div class="recent-payments">
                        <div class="title">
                            <h1>Plans Subscription</h1>
                            <a href="#" class="btn">View all</a>
                        </div>
                                <table>
                                <tr>
                                    <th>Channel Name</th>
                                    <th>Channel No.</th>
                                    <th>Price</th>
                                    <th>Code</th>
                                    <th>Quality</th>
                                </tr>
                                <tr>
                                    <td>Zee Channel</td>
                                    <td>510</td>
                                    <td>20/-</td>
                                    <td>ZC01</td>
                                    <td>SD</td>
                                </tr>
                                <tr>
                                    <td>Sony Channel</td>
                                    <td>515</td>
                                    <td>15/-</td>
                                    <td>SC02</td>
                                    <td>SD</td>
                                </tr>
                                <tr>
                                    <td>Disney Channel</td>
                                    <td>520</td>
                                    <td>10/-</td>
                                    <td>DC03</td>
                                    <td>SD</td>
                                </tr>
                                <tr>
                                    <td>Discovery Channel</td>
                                    <td>525</td>
                                    <td>15/-</td>
                                    <td>DC04</td>
                                    <td>HD</td>
                                </tr>
                                <tr>
                                    <td>History Tv Channel</td>
                                    <td>530</td>
                                    <td>11/-</td>
                                    <td>HC05</td>
                                    <td>HD</td>
                                </tr>
                                <tr>
                                    <td>Star Plus Channel</td>
                                    <td>535</td>
                                    <td>13/-</td>
                                    <td>SC06</td>
                                    <td>SD</td>
                                </tr>
                                <tr>
                                    <td>Colors Channel</td>
                                    <td>540</td>
                                    <td>10/-</td>
                                    <td>CC07</td>
                                    <td>HD</td>
                                </tr>
                                <tr>
                                    <td>Sony Yay Channel</td>
                                    <td>545</td>
                                    <td>5/-</td>
                                    <td>SC08</td>
                                    <td>SD</td>
                                </tr>
                                <tr>
                                    <td>Ion Televison Channel</td>
                                    <td>550</td>
                                    <td>9/-</td>
                                    <td>IC09</td>
                                    <td>HD</td>
                                </tr>
                                <tr>
                                    <td>CN Channel</td>
                                    <td>560</td>
                                    <td>12/-</td>
                                    <td>CN10</td>
                                    <td>SD</td>
                                </tr>
                                <tr>
                                    <td>Star Sports Channel</td>
                                    <td>570</td>
                                    <td>11/-</td>
                                    <td>SS11</td>
                                    <td>HD</td>
                                </tr>
                                <tr>
                                    <td>Ten Sports Channel</td>
                                    <td>580</td>
                                    <td>15/-</td>
                                    <td>TS12</td>
                                    <td>SD</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
