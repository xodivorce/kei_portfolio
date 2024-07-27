<?php
require 'connection.php';

function id_exists($conn, $id) {
  $sql = "SELECT * FROM `students` WHERE college_id = '$id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    return true;
  }
  else {
    return false;
  }
}

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['collegeID']) && isset($_POST['course']) && isset($_POST['date'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $college_id = $_POST['collegeID'];
  $course = $_POST['course'];
  $reg_date = $_POST['date'];
  
  if(!id_exists($conn, $college_id)) {
    try {
      $sql = "INSERT INTO `students` (id, name, phone, email, college_id, course, reg_date) VALUES (NULL, '$name', '$phone', '$email', '$college_id', '$course', '$reg_date')";
      
      if($conn -> query($sql)) {
        echo "<script type='text/javascript'>alert('Student Info Added Successfully!')</script>";
      }
      else {
        echo "<script type='text/javascript'>alert('Failed to add Student Info!')</script>";
      }
    }
    catch (Exception $e) {
      echo $e; 
    }
  }
  else {
    echo "<script type='text/javascript'>alert('Student ID already exists! Please choose another ID')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information System</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
    <link rel="icon" type="image/png" href="./assets/images/kei1.png">
</head>
<body>
    <h1>KINGSTON EDUCATIONAL INSTITUTE</h1>
    <a href="https://keical.edu.in">
        <img src="assets/images/kei.png" alt="kei logo & site" class="fixed-image" width="60" height="60" style="position: relative ; top: -10px; left: -335px;">
    </a>
    <nav>
        <img src="assets/images/moon.png" id="icon">
    </nav>  
    <form autocomplete="off" id="student-info-form" name="student-info-form" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <h4>STUDENT INFORMATION SYSTEM</h4>
        <input class="forminputs" type="text" id="name" name="name" placeholder="Name" required/>
        <input class="forminputs" type="text" id="phone" name="phone" placeholder="Phone" required/>
        <input class="forminputs" type="email" id="email" name="email" placeholder="Email" required/>
        <input class="forminputs" type="text" id="collegeID" name="collegeID" placeholder="College ID" required/>
        <select class="forminputs" id="course" name="course" required>
            <option value="" id ="select" disabled selected>-- Select a Course --</option>
            <option value="ME">ME</option>
            <option value="CST">CST</option>
            <option value="BCA">BCA</option>
            <option value="SCHOOL">SCHOOL</option>
            <option value="CIVIL">CIVIL</option>
            <option value="MANAGEMENT">MANAGEMENT</option>
            <option value="LLB">LLB</option>
        </select>
        <input class="forminputs" type="date" id="date" name="date" required>
        <div>
            <button class="buttons" id="submit-btn" type="submit">Submit</button>
            <button class="buttons" id="reset-btn" type="reset">Reset</button>
        </div>
        <div class="preloader">
            <div class="loader"></div>
          </div>     
    </form>
    <script src="./assets/js/script.js"></script>
</body>
<footer>
    <p> <a href="https://keical.edu.in">About us</a> |
    <a href="https://instagram.com/xodivorce"> &copy;2024 Xodivorce.in,</a>
    <a href="https://github.com/xodivorce"> All rights reserved</a> </p>
</footer>
</html>
