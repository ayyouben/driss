<?php 
 require_once('config.php');

session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM utilisateur WHERE Email = '$email' and Password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count >0 ) {

      
        

         $_SESSION['login_user'] = $email;
         $_SESSION['login_id'] = $row['Id_user'];
         $_SESSION['login_type'] = $row['Role'];
         $_SESSION['login_name']=$row['nom'];
         echo 1;

      }else {
        echo 0;

      }
   }
?>
