<?php
/*Please add login markup for login form and php code for validation...
remember to include header and footer - thx--Shanen

    Add login markup for login form and php code for validation...
    including header and footer - Oanh
*/
?>
<?php
    include('header.php');
?>

<?php
    // declare variables
    $email = "";
    $password = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // store post data into variables
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];
        $error = "This field is required. Please re-enter";

        // validate email field
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
    <h1>Login Page</h1>
    <form action="login.php" method="POST">

    <label for="email">Email:</label>
    <input type="email" id="email" placeholder="test@test.com" value="<?php echo $email; ?>"></br>
    <?php // if email is not entered, display error message
        if(isset('$error')) {
            echo "<p>$error</p>";
        }
    ?>
    <label for="password">Password:</label>
    <input type="password" id="password"></br>
    <?php // if password is not entered, display error message
        if(isset('$error')) {
            echo "<p>$error</p>";
        }
    ?>
    <label for="password">Confirm Your Password:</label>
    <input type="password" id="conf_password"></br>
    <?php // if password is not entered, display error message
        if(isset('$error')) {
            echo "<p>$error</p>";
        }
        if($conf_password != $password) {
            echo "<p>Please enter the matching password.</p>";
        }
    ?>
    <button>Login to Creep It Real</button>

    </form>
</main>

<?php include('footer.php');
?>