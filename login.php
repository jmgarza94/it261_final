<?php //login page will be communicating to our server.php page - username and password

include('server.php');
include('includes/config.php');
include('includes/header.php');

?>

<h1 class="login">Login</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <label>Username</label>
        <input type="text" name="UserName" value="<?php if (isset($_POST['UserName'])) echo $_POST['UserName']; ?>">
        <label>Password</label>
        <input type="password" name="Password">
        <?php
        include('includes/errors.php');
        ?>

        <button type="submit" class="button" name="login_user">Login</button>

        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'" class="reset">Reset</button>
    </fieldset>
</form>

<p class="center">Haven't registered? <a href="register.php">Register Here</a></p>

<?php include('includes/footer.php'); ?>