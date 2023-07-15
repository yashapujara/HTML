<?php 
require'database.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];
  $rating = $_POST["rating"];
  $rating1 = $_POST["rating1"];

  $query = "INSERT INTO `feedback` (`Name`, `username`, `email`, `comment`, `rating`, `rating1`)
   VALUES ('$name','$username','$email','$comment','$rating','$rating1')";
  mysqli_query($conn,$query);
  
    echo "
  <script>alert('Data Inserted Successfully')</script>";  
}
?>
<!DOCTYPE html>
<html>
<head>
  <title> Profile Feedback Form</title>
  <!-- Link to external CSS file -->
  <link rel="stylesheet" href="style.css">

  <!-- Link to jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Link to RateYo JS file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<!-- Link to external JS file -->
<link rel="stylesheet" href="rateyo.css">
  <!-- Link to RateYo CSS file -->


</head>
<body>

  <div class="container mt-5">
    <h1>Feedback Form</h1>
    <form method="post">
      <div class="mb-3">
        <label for="nameInput" class="form-label">Name:</label>
        <br>
        <input type="text" class="form-control" name="name" id="nameInput" required>
      </div>
      <div class="mb-3">
        <label for="userinput" class="form-label">Username:</label>
        <br>
        <input type="text" class="form-control" name="username" id="userInput" required>
      </div>
      <div class="mb-3">
        <label for="emailInput" class="form-label">Email:</label>
        <br>
        <input type="email" class="form-control" id="emailInput" name="email" required>
      </div>
      <div class="mb-3">
        <label for="commentInput" class="form-label">Comments:</label>
        <br>
        <textarea class="form-control" id="commentInput" name="comment" required></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label"> Give Rating:</label><br><br>
        <div id="ratingInput"></div>
        <input type="hidden" id="rating" name="rating" required>
      </div>
      <br>
      <div class="mb-3">
        <label class="form-label"> Rate Our Portfolio:</label><br><br>
        <div id="ratingInput1"></div>
        <input type="hidden" id="rating1" name="rating1" required>
      </div>
      <br>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>

  <!-- Link to jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <!-- Link to RateYo JS file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
  <!-- Link to external JS file -->
  <script src="script.js"></script>
  
  
</div>
</body>
</html>
