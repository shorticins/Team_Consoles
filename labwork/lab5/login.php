<?php //php -S localhost:3000 ?>
<?php include('includes/header.php');
    //include pastes header.php on top of this file
?>

        <main>

        <?php

            $email = "";
            $password = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $password = $_POST['password'];
if(empty($email)){
    $email_error = "You forgot to enter your email";
    }

}

        ?>
            <h1>Login Page</h1>

<?php
 if(isset($email_error)) {
     echo $email_error;
 }

?>

 <form action="login.php" method="POST">
            <label for="email">Email: <label>
            <input type="email" name="email" id="email" value="<?php echo $email;?>">

            <label for="password">Password: </label>
            <input type="password" name="password">

            <button>Login</button>




            </form>

        </main>

<?php include('includes/footer.php');