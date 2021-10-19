<?php
require_once 'dbcon.php';
  if(isset($_POST['submit'])){

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    $photo = explode('.',$_POST['photo']);
    $ext = end($photo);
    $photo_name = $full_name.'.'.$ext;


    if ( !$full_name == "" ) {
      if (!$email == "" ) {
        if (!$password == "" ) {
          if (!$c_password == "" ) {
              if(strlen($password)>7){
                  if ($password == $c_password){

                    // Checking If Email is Already Exist or Not
                      $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email'");
                          if(mysqli_num_rows($query) == 0){

                              $result = mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `password`, `photo`) VALUES ('$full_name', '$email', '$password', '$photo_name')");

                              if ($result){
                                    $success = "বিনা খরচে রেজিস্টার হয়ে গেছে";
                              } else {
                                $regis_error = "মনে হচ্ছে একটি সমস্যা হয়েছে";
                              }

                          } else {
                            $email_exist = "এই ইমেলে একটি অ্যাকাউন্ট আছে ";
                          }

                  }else {
                    $match_error = "পাসস ওয়ার্ড তো মিললই না";
                  }
              }else {
                $char_error = "৮ টা অক্ষর দেওয়া লাগবে";
              }
          }else {
            $confirm_error = "একই পাসওয়ার্ড দেন";
          }
        }else {
          $password_error = "পাস ওয়ার্ডেও কিপ্টামু";
        }
      }else {
        $email_error = "ইমেইল টা অন্তত দেন";
      }
    } else {
      $name_error = "নাম দিতে টাকা লাগে না";
    }



  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Main CSS --->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin Login Page</title>
  </head>
  <body>

  <div class="container wrapper_regis">
    <div class="row">
      <div class="col-md-12">
        <div class="headline">
          <h3>এখানে স্যারদের বিনামূল্যে রেজিস্ট্রেশন করানো হয়! </h3>
        </div>
        <div class="headlin">
          <h3>
            <?php
                if (isset($success)){
                  echo $success;
                  echo $success;
                }
             ?>
             <?php
                 if (isset($regis_error)){
                   echo $regis_error;
                 }
              ?>
          </h3>
        </div>
        <div class="regis_middle_box">
          <form action="" method="POST">
          <input type="text" name="full_name" placeholder="পুরো নাম জানা থাকলে দিন"> <br>
          <span class="error">
            <?php
                if (isset($name_error)){
                  echo $name_error;
                }
             ?>
          </span>
          <input type="email" name="email" placeholder="নিজের ইমেইল থাকলে দিন"> <br>
          <span class="error">
            <?php
                if (isset($email_error)){
                  echo $email_error;
                }
             ?>
          </span>
          <span class="error">
            <?php
                if (isset($email_exist)){
                  echo $email_exist;
                }
             ?>
          </span>
          <input type="password" name="password" placeholder="একটি কড়া পাসওয়ার্ড দিন *****"><br>
          <span class="error">
            <?php
                if (isset($password_error)){
                  echo $password_error;
                }
             ?>
          </span>
          <span class="error">
            <?php
                if (isset($char_error)){
                  echo $char_error;
                }
             ?>
          </span>
          <input type="password" name="c_password" placeholder="কড়া পাসওয়ার্ডটি আবার দিন*****"><br>
          <span class="error">
            <?php
                if (isset($confirm_error)){
                  echo $confirm_error;
                }
             ?>
          </span>
          <span class="error">
          <?php
              if (isset($match_error)){
                echo $match_error;
              }
           ?>
        </span>
          <input type="file"  name="photo" id="img"><br>
          <input type="submit" name="submit" value="দিন এক কোপ">
          </form>
          <div class="row">
            <div class="col-md-6">
              <div class="left">
                <a href="index.html">স্টুডেন্ট পোর্টাল</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right">
                <a href="login.html">লগইন</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>
