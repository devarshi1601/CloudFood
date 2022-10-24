<?php
    $username = $_POST['username'];
    $pwd      = $_POST['password'];
    
    $con = new mysqli("localhost","root","123456","registration");

    if($con -> connect_error)
    {
      die("failed to connect : " .$con ->connect_error);
    }
    else
    {
      $stmt = $con ->prepare("select * from user_registration where name = ?");
      $stmt->bind_param("s",$username);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if($stmt_result->num_rows > 0){
             $data = $stmt_result->fetch_assoc();
             if($data['password'] == $pwd){
              header("location:donor.html");
             }
      }else{
        ?>
        <script>
          alert("Invalid Username or Password");
        </script>
        <?php
      }
    }
?>