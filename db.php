<?php //people.php page


include('config.php');
include('includes/config.php');
include('includes/header.php');

//we need to connect to the DB

$sql = 'SELECT * FROM deities_table';


$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or
    die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        //this array is going to display the contents of your row
        echo '<ul class="godList">';
        echo '<li>For more information <a href="db-view.php?id=' . $row['deityId'] . '">' . $row['deityName'] . '</a></li>';
        echo '<li><b>Name of God/Deity:</b> ' . $row['deityName'] . '</li>';
        echo '<li><b>Origin of Deity:</b> ' . $row['origin'] . '</li>';
        echo '</ul>';
    } //end while loop

} else { //close if mysqli num rows
    echo 'Nobody home';
}


// releasing the web server
mysqli_free_result($result);

//close the connection

mysqli_close($iConn);

include('includes/footer.php');  ?>