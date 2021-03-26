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

include('includes/header.php');

?>

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


<main class="mainContent">
    <h1>Welcome to my final project</h1>
    <h2>My topic is mythology</h2>
    <p>The topic for my final project is all types of mythology, with a focus on my favorite,
         which is Aztec mythology. My database holds deities and gods from different types of mythology,
          while my switch page consists of the main Aztec deities.
    <p>My Contact page holds a questionnaire about the different aspects of mythology, from the origin,
         the different types of Gods/Deities and what they governed or what they were known for, 
         and favorite type of mythological stories.
    </p>
    </p>
</main>
<aside>
    <img src="images/mythology.jpg" class="mainPic">
</aside>

