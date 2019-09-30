<?php
/*Please add login markup for registration form and php code for validation...
remember to include header and footer - thx--Shanen
    Add login markup for registration form and php code for validation...
    including header and footer - Oanh
*/
?>
<?php
    include('header.php');
?>

<?php
    // declare variables
    $f_name = "";
    $l_name = "";
    $email = "";
    $password = "";
    $conf_password ="";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // store post data into variables
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];

        // validate email field
        if(empty($f_name)) {
            $error_f = "This field is required. Please enter your first name.";
        }
        elseif(empty($l_name)) {
            $error_l = "This field is required. Please enter your last name.";
        }
        elseif(empty($email)) {
            $error_e = "This field is required. Please enter your email.";
        }
        elseif(empty($password)) {
            $error_p = "This field is required. Please enter your password.";
        }
        elseif(empty($conf_password)) {
            $error_cp = "This field is required. Please re-enter your password.";
        }
        else{
        }
    }
?>

<main>
    <h1 id="register_header">Registration Form</h1>

    <form action="register.php" method="POST">
    <label for="f_name" class="register_label">First Name:</label>
    <input type="text" id="f_name" name="f_name" value="<?php echo $f_name; ?>"></br>

    <?php // if first name is not entered, display error message
        if(isset($error_f)) {
            echo "<p>$error_f</p>";
        }
    ?>
    <label for="l_name"  class="register_label">Last Name:</label>
    <input type="text" id="l_name" name="l_name" value="<?php echo $l_name; ?>"></br>
    <?php // if last name is not entered, display error message
        if(isset($error_l)) {
            echo "<p>$error_l</p>";
        }
    ?>
    <label for="email" class="register_label">Email:</label>
    <input type="email" id="email" name="email" placeholder="test@test.com" value="<?php echo $email; ?>"></br>
    <?php // if email is not entered, display error message
        if(isset($error_e)) {
            echo "<p>$error_e</p>";
        }
    ?>
    <label for="password" class="register_label">Password:</label>
    <input type="password" id="password" name="password"></br>
    <?php // if password is not entered, display error message
        if(isset($error_p)) {
            echo "<p>$erro_pr</p>";
        }
    ?>
    <label for="conf_password" class="register_label">Confirm Your Password:</label>
    <input type="password" id="conf_password" name="conf_password"></br>
    <?php // if confirmed is not entered, display error message
        if(isset($error_cp)) {
            echo "<p>$error_cp</p>";
        }
        elseif($conf_password != $password) {
            echo "<p>Oops! Something is wrong. Re-enter your password.</p>";
        }
        else {

        }
    ?>

    <input type="submit" name="register_button" value="Register to Creep It Real!">

    <?php // display message when submit button is clicked and all fields are correctly entered
    if ((isset($_POST['register_button']))  && (!isset($error_f)) && (!isset($error_l))&& (!isset($error_e)) && (!isset($error_p)) && (!isset($error_cp)) && ($conf_password == $password)) {
    echo "<p>Congratulations!!! You are registered to Creep It Real!</p>";
    echo "<p>Look for our special announcements in your inbox.</p>";
    }
?>


    </form>

</main>

<?php include('footer.php');
?>