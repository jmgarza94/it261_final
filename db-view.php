<?php  //people-view.php

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:db.php');
}

$sql = 'SELECT * FROM deities_table WHERE deityId = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or
    die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $deityName = stripslashes($row['deityName']);
        $origin = stripslashes($row['origin']);
        $governence = stripslashes($row['governence']);
        $description = stripslashes($row['description']);
        $feedback = '';

    } //closing while


} else {
    $feedback = 'Nobody is home - they are out to lunch';

} //closing else










include('includes/config.php');
include('includes/header.php');
?>
<!-- <div id="wrapper" style="width:940px; margin:0 auto;"> -->
<!-- <main style="width:580px; float:left;"> -->
<main>
<h1 class="godPage">Welcome to the <?php echo $deityName ;?> page!</h1>

<?php 
    if($feedback == '') {
        echo '<ul class="godInfo">';
        echo '<li class="godName"><b>Name: </b> '.$deityName.'</li>';
        echo '<li class="godOrigin"><b>Origin: </b> '.$origin.'</li>';
        echo '</ul>';
        echo '<p class="godDescr">'.$description.'</p>';
        echo '<p class="goBack"><a href="db.php">Return to our list of deities</a></p>';
    } else {
        echo $feedback;
    }
?>

</main>
<aside>
<?php if($feedback == '') {
    echo '<img src="images/god'.$id.'.jpg" alt="'.$deityName.'" class="godPic">';
} ;?>
</aside>
<?php
// releasing the web server
mysqli_free_result($result);

//close the connection

mysqli_close($iConn);


include('includes/footer.php');  ?>