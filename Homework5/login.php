<?php // php -S localhost:8080 ?>

<?php include('includes/header.php'); ?>
<?php

$email = "";
$password = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procees our form and validate it
    $email = $_POST['email'];
    $$password = $_POST['password'];
    // validate
//    if(empty)
}
?>

    <main>
        <h1>Sticky Form</h1>

        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="test" value="<?php $email ?>">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">

    </main>

<?php include('includes/footer.php'); ?>