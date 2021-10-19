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
    <link rel="stylesheet" href="/admin/style.css">
    <title>Student Portal</title>
  </head>
  <body>



  <div class="container header_wrapper"> <!-- Container -->

    <div class="row"> <!-- Row -->

      <div class="col-md-8"> <!-- Call 8 -->
        <div class="text_wrapper">
          <p>নিচের এই ফ্রম টা পূরণ করে ছাত্র-ছাত্রীদের প্রোফাইল দেখতে পারবেন এবং আপনি যদি একজন টিচার হন তাহলে রেজিস্ট্রেশন করুন অথবা লগইন করুন</p>
        </div>
      </div> <!-- Call 8 -->

      <div class="col-md-2"> <!-- Call 2 -->
        <div class="button1">
          <button><a href="registration.php">রেজিস্টার </a></button>
        </div>
      </div>

      <div class="col-md-2">
        <div class="button2">
          <button><a href="login.php">লগইন </a></button>
        </div>
      </div>
    </div>

  </div> <!-- Row -->

</div> <!-- Container -->


  <div class="container wrapper">
    <div class="row">
      <div class="col-md-12">
        <div class="login_middle_box">
          <form>
           <label for="cars">পর্ব সিলেক্ট করুন</label>
            <select name="cars" id="cars">
              <option value="volvo">প্রথম পর্ব</option>
              <option value="saab">দ্বিতীয় পর্ব</option>
              <option value="opel">তৃতীয় পর্ব</option>
              <option value="opel">চতুর্থ পর্ব </option>
              <option value="opel">পঞ্চম পর্ব </option>
              <option value="opel">ষষ্ঠ পর্ব </option>
              <option value="opel">সপ্তম পর্ব </option>
              <option value="opel">অষ্টম পর্ব </option>
            </select> <br>
          <input type="text" name="roll" placeholder="রোল নম্বরটি দিন" required=""><br>
          <input type="submit" name="submit" value="দেখুন">
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid footer_wrapper">
    <div class="row">
      <div class="col-md-12">
        <div class="headline">
          <h3>The System Developed By Dev Sajid</h3>
        </div>
      </div>
    </div>
  </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>
