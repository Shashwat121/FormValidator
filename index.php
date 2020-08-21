<?php
include('dbconnection.php');
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile'];
$query=mysqli_query($con,"insert into users(Name,Email,Mobile) values('$name','$email','$mobile_no')");

if($query)
{
  echo "<script>alert('Form has been successfully validated and submitted!!');</script>";
  echo "<script>window.location.href ='validated.php'</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Validation</title>
    <script type="text/javascript" src="./check_form.js"></script>
    <style media="screen">
      body
      {
        text-align: center;
      }
      button
      {
         margin-left: 20px;
      }

      .name,.email
      {
        padding-left: 10px;
      }

      div
      {
        margin-left: 25%;
        margin-top: 60px;
        padding-top: 150px;
        height: 280px;
        width: 50%;
        background-color:powderblue;
      }
      h1
      {
        text-decoration:underline;
        text-align: center;
        margin-left: 70px;
      }

    </style>
  </head>
  <body>
    <h1>FORM VALIDATOR</h1>
  <div class="">
    <form onsubmit="return validate_details();" method="post">
      <label for="name">Name:</label> <span class="name"><input id="name"  name="name" type="text" placeholder="Enter your Name"></span><br><br>
      <label for="email">Email:</label> <span class="email"><input id="email" name="email" type="text" placeholder="Enter your Email id"></span><br><br>
      <label for="name">Mobile:</label> <span class="mobile"><input id="mobile" name="mobile" type="text" placeholder="Enter your Mobile number"></span><br><br>
      <button type="submit" name="submit" id="submit">Submit</button>
    </form>

  </div>

  </body>
</html>
