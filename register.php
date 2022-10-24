<?php include('connection.php');?>

<?php
if(isset($_POST['register']))
{
   $name = $_POST['username'];
   $pwd  = $_POST['password'];

   $query = "INSERT INTO user_registration values('$name','$pwd')";
   $data = mysqli_query($connection,$query);

   if($data){
    echo"Successful";
    header("location:login.html");
   }else{
      ?>
      <script>
         alert("Username already exist");
      </script>
      <?php
      

    
   }
}
?>


