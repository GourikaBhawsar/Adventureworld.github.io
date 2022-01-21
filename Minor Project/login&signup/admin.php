<?php
session_start();

if(!isset($_SESSION['name'])){
   header('location:signin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Minor Project/css/gouriproject.css" />
    <title>Document</title>
    <style>
      * {
        padding: 0;
        margin: 0;
      }
      .munmun {
        width: 100%;
        height: 100vh;
        color:pink;
      }
      .one {
        width: 100%;
        height: 15vh;
        border-bottom: 1px solid darkgoldenrod;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        align-items: center;
      }
      .submit {
        width: 60px;
        height: 30px;
        background-color: darkred;
        border-radius: 20px;
        color: wheat;
        border: none;
        margin: 40px;
        cursor: pointer;
      }
      .submit:hover {
        color: black;
        background-color: rgb(199, 196, 27);
      }
      .submit:active {
        color: black;
        background-color: green;
      }
      .two {
        width: 100%;
        height: 80vh;
        justify-content: center;
        align-items: center;
      }
      p {
        font-size: 30px;
        text-align: center;
        padding-top: 100px;
      }
    </style>
  </head>
  <body>
    <section class="munmun">
      <div class="one">
        <button type="submit" class="submit"> <a href="logout.php">Logout</a> </button>
      </div>
      <div class="two"><p>Welcome <br> <?php echo $_SESSION['name']; ?></p></div>
    </section>
  </body>
</html>
