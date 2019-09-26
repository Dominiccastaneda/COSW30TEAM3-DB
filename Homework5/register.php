<?php // php -S localhost:8080 ?>

<?php include('includes/header.php'); ?>
<?php


$first_name = "";
$last_name = "";
$email = "";
$password = "";
$confirm_password = "";



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procees our form and validate it
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    // validate
    if(empty($first_name)) {
      echo  "Enter your first name please";
    }
    if(empty($last_name)) {
      echo  "Enter your last name please";
    }
    if(empty($email)) {
      echo  "Enter your email please";
    }
    if(empty($password)) {
      echo  "Enter your password please";
    }
    if(empty($confirm_password)) {
      echo  "Confirm your password please";
    }
}
?>

    <main>
        <h1>Sticky Form</h1>

        <form action="login.php" method="POST">
            <label for="first_name">First Name</label>
            <input type="first_name" id="first_name" name="first_name" placeholder="" value="<?php echo $first_name ?>">
            <label for="last_name">Last Name</label>
            <input type="last_name" id="last_name" name="last_name" placeholder="" value="<?php echo $last_name ?>">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="email" value="<?php echo $email ?>">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="" value="<?php echo $password ?>">
            <label for="confirm_password">Confirm Password</label>
            <input type="confirm_password" id="confirm_password" name="confirm_password" placeholder="" value="<?php echo $confirm_password ?>">

            <button>Register!</button>
    </main>

<?php include('includes/footer.php'); ?>