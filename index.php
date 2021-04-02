<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>CGPA Calculator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
    if($_SERVER("REQUEST_METHOD") == "POST"){
          $first = $_POST['first'];
          $second = $_POST['second'];
          $third = $_POST['third'];
          $four = $_POST['four'];
          $five = $_POST['five'];
          $six = $_POST['six'];
          $seven = $_POST['seven'];
          $eight = $_POST['eight'];
          
          if(empty($first) || empty($second) || empty($third) || empty($four) || empty($five) || empty($six) ||  empty($seven) || empty($eight)){
                $msg = <div class='alert alert-danger'>
          }
    }
    <div class="container">
    <div class="card">
        <h2 class="text-center text-success p-4">CGPA Calculator</h2>
    <div class="card-body">
    <form action="" class="w-50 m-auto" method="post">
    <table class="table border">
    <tr>
          <td><label for="">First Semester:</label></td>
          <td><input class="form-control" type="text" name="first"></td>
    </tr>
    <tr>
          <td><label for="">Second Semester:</label></td>
          <td><input class="form-control" type="text" name="second"></td>
    </tr>
    <tr>
          <td><label for="">Third Semester:</label></td>
          <td><input class="form-control" type="text" name="third"></td>
    </tr>
    <tr>
          <td><label for="">Fourth Semester:</label></td>
          <td><input class="form-control" type="text" name="four"></td>
    </tr>
    <tr>
          <td><label for="">Fifth Semester:</label></td>
          <td><input class="form-control" type="text" name="five"></td>
    </tr>
    <tr>
          <td><label for="">Sixth Semester:</label></td>
          <td><input class="form-control" type="text" name="six"></td>
    </tr>
    <tr>
          <td><label for="">Seventh Semester:</label></td>
          <td><input class="form-control" type="text" name="seven"></td>
    </tr>
    <tr>
          <td><label for="">Eighth Semester:</label></td>
          <td><input class="form-control" type="text" name="eight"></td>
    </tr>
    </table>
   <input class="btn-btn-success" type="submit" name="submit" value="Calculate">
    </form>
    </div>
    </div>
    </div>
</body>
</html>