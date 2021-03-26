<?php //

session_start();
//include('config.php');
include('includes/config.php');

if (!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('Location:login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location:login.php');
}

include('includes/header.php'); ?>

<main>


<?php
//notification message
if (isset($_SESSION['success'])) : ?>


    <div class="success">
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif;
if (isset($_SESSION['UserName'])) : ?>

    <div class="welcome-logout">
        <h3> Hello, 
            <?php echo $_SESSION['UserName']; ?>
        </h3>
        <!-- <a href="login.php" class="logout-button">Log out</a> -->
        <a href="index.php?logout='1'" class="logout-button">Log out</a>

    </div>
<?php endif; ?>

<h1 class="myheader">Welcome to my About page</h1>
<img src="images/user_db.jpg" class="aboutPic">
<img src="images/deities_table.jpg" class="aboutPic">
</main>

<?php include('includes/footer.php'); ?>


