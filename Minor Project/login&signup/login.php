<?php
  session_start();
?>

<?php
        include 'register.php';
        if(isset($_POST['send'])){
          $email = $_POST['email'];
          $password = $_POST['password'];

          $email_search = " select * from registration where email= '$email'";
          $query = mysqli_query($con,$email_search);

          $email_count = mysqli_num_rows($query);
          if($email_count){
            $email_pass = mysqli_fetch_assoc($query);
            $db_pass =   $email_pass['password'];
            $_SESSION['name'] =  $email_pass['name'];
            $pass_decode = password_verify($password, $db_pass);

            if($pass_decode){
             //echo "login success";
             ?>

<?php
             ?>
<script>
  location.replace("admin.php");
</script>
<?php
             
            }else{
            // echo "password incorrect";
            ?>
<script>
  alert("password incorrect");
</script>
<?php
            ?>
<script>
  location.replace("signin.php ");
</script>
<?php
            }
          }else{
             // echo "invailed passward";
             ?>
<script>
  alert(" Create Account...");
</script>
<?php
             ?>
<script>
  location.replace("signin.php ");
</script>
<?php
          }
        }
         ?>
