<?php include('connection.php');?>
<?php 


if(isset($_POST['submit']));
{
    
   @$name  = $_POST['name'];
   @$email = $_POST['email'];
   @$phone = $_POST['phone'];
   @$address = $_POST['address']; 
   @$type = $_POST['foodtype'];
   @$quantity = $_POST['quantity'];
   @$date = $_POST['date'];
   @$time = $_POST['time'];

   $query = "INSERT INTO donor_data values('$name','$email','$phone','$address','$type','$quantity','$date','$time')";
   $data = mysqli_query($connection,$query);

   if($data){
    ?>
    <script>
      alert("Successfully donated");
      </script>
      <?php
   
   }else{
    echo"<h1>Your Previous donation of food is not executed<h1>";
   }
}
?>