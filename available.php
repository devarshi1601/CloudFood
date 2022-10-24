<html>
    <head>
        <title>available</title>
        <style>
            *{
                border-size:border-box;
            
            }
            body 
            {
               background:white;
            }
            table{
                background:white;
            }
            footer
            {
                text-align:center;
                background-color:#333;
                color:white;
                bottom:0;
                display:block;
                position:fixed;
                width:100%;
                height:20px;
                font-size:17px;
            }
        </style>
        <link rel="icon" type="image/x-icon" href="logo.jpg">
    </head>
       


<?php
include('connection.php');

$query = "SELECT * FROM donor_data";
$data  = mysqli_query($connection,$query);

$total  = mysqli_num_rows($data);




//echo $total;

if($total != 0)
{
    ?>
    <h2 align="center">Available Food List</h2>
    <table border="4" cellspacing="7" width="87%" align="center">
        <tr>
        <th width="12%">Name</th>
        <th width="25%">Address</th>
        <th width="8%">Phone No</th>
        <th width="12%">Type of Food</th>
        <th width="10%">Quantity</th>
        <th width="10%">Cook Date</th>
        <th width="10%">Cook Time</th>
        </tr>
    


    <?php
   while($result = mysqli_fetch_assoc($data))
   {
    echo "<tr>
            <td>".$result['name']."</td> 
            <td>".$result['address']."</td>  
            <td>".$result['phone_no']."</td>  
            <td>".$result['type_of_food']."</td>  
            <td>".$result['quantity']."</td>  
            <td>".$result['cook_date']."</td>  
            <td>".$result['cook_time']."</td>  
         </tr>      ";
   }
}else{
    echo"no record found";
}
?>
</table>

<footer> 
&#169; Copyright 2022, All Right Reserved &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Developed By - Devarshi Shukla
</footer>
</html>
