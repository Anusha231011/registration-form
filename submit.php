<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $dob = htmlspecialchars($_POST['dob']);
  $gender = htmlspecialchars($_POST['gender']);
  $course = htmlspecialchars($_POST['course']);
  $address = htmlspecialchars($_POST['address']);
} else {
  echo "<h2>Invalid Request</h2>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Application Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Application Submitted Successfully 🎉</h1>
  </header>

  <div class="result-box">
    <h2>Applicant Details</h2>
    <p><strong>Full Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Date of Birth:</strong> <?= $dob ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>Course Applied:</strong> <?= $course ?></p>
    <p><strong>Address:</strong> <?= nl2br($address) ?></p>
  </div>

  <footer>
    <p>© 2025 Online Application System</p>
  </footer>
</body>
</html>
