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

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // store post data into variables
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];
        $error = "This field is required. Please re-enter";
        // validate email field
        if(empty($f_name)) {
            $error;
        }
        if(empty($l_name)) {
            $error;
        }
        if(empty($email)) {
            $error;
        }
        if(empty($password)) {
            $error;
        }
        if(empty($conf_password)) {
            $error;
        }
    }
?>
<main>
    <h1>Registration Form</h1>
    <form action="register.php" method="POST">

    <label for="f_name">First Name:</label>
    <input type="name" id="f_name" value="<?php echo $f_name; ?>"></br>
    <?php // if first name is not entered, display error message
        if(isset('$error')) {
            echo "<p>$error</p>";
        }
    ?>
    <label for="l_name">Last Name:</label>
    <input type="name" id="l_name" value="<?php echo $l_name; ?>"></br>
    <?php // if last name is not entered, display error message
        if(isset('$error')) {
            echo "<p>$error</p>";
        }
    ?>
    <label for="email">Email</label>
    <input type="email" id="email" placeholder="test@test.com" value="<?php echo $email; ?>"></br>
    <?php // if email is not entered, display error message
        if(isset('$error')) {
            echo $error;
        }
    ?>
    <label for="password">Password</label>
    <input type="password" id="password"></br>
    <?php // if password is not entered, display error message
        if(isset('$error')) {
            echo "<p>$error</p>";
        }
    ?>
    <label for="conf_password">Re-enter Your Password</label>
    <input type="password" id="conf_password"></br>
    <?php // if confirmed is not entered, display error message
        if(isset('$error')) {
            echo "<p>$error</p>";
        }
        elseif($conf_password != $password) {
            echo "<p>Please enter the matching password.</p>";
        }
        else {
            echo "<p>Click it!</p>";
        }

    ?>

    <button>Welcome to Creep It Real</button>

    </form>
</main>

<?php include('footer.php');
?>
