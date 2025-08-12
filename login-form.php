<?php
// Initialize variables
$email = '';
$password = '';
$error_message = '';
$password_attempts = 0;

// Check if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get email and password from form
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_message = 'Invalid email address';
  }

  // Validate password
  if (strlen($password) < 8) {
    $error_message = 'Password must be at least 8 characters long';
  }

  // Check password attempt limit
  if ($password_attempts >= 3) {
    $error_message = 'You have exceeded the maximum number of password attempts';
  }

  // If no errors, submit form
  if (empty($error_message)) {
    // Add code to submit form and authenticate admin
    // For example:
    // $admin = authenticate_admin($email, $password);
    // if ($admin) {
    //   // Login successful, redirect to admin dashboard
    //   header('Location: admin-dashboard.php');
    //   exit;
    // } else {
    //   // Login failed, display error message
    //   $error_message = 'Invalid email or password';
    // }
  }

  // Increment password attempt counter
  $password_attempts++;
}

// Display login form
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <h2>Admin Login</h2>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="<?php echo $email; ?>">

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value="<?php echo $password; ?>">

  <button type="submit">Login</button>
  <p>
    Don't have an account? <a href="#">Register here</a>
  </p>
  <div class="error">
    <?php echo $error_message; ?>
  </div>
</form>