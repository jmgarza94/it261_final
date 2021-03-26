<?php

$firstName = '';
$lastName = '';
$email = '';
$origin = '';
$deity = '';
$stories = '';
$comments = '';
$agree = '';
$phone = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$originErr = '';
$deityErr = '';
$storiesErr = '';
$commentsErr = '';
$agreeErr = '';
$phoneErr = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //if a field is empty, we are going to create an error variable
    if (empty($_POST['firstName'])) {
        $firstNameErr = 'Please enter your first name';
    } else {
        $firstName = $_POST['firstName'];
    }

    if (empty($_POST['lastName'])) {
        $lastNameErr = 'Please enter your last name';
    } else {
        $lastName = $_POST['lastName'];
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phoneErr = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phoneErr = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        }
    }

    if (empty($_POST['origin'])) {
        $originErr = 'Please select your favorite type of mythology!';
    } else {
        $origin = $_POST['origin'];
    }

    if (empty($_POST['deity'])) {
        $deityErr = 'Please choose your favorite types of deities';
    } else {
        $deity = $_POST['deity'];
    }

    if ($_POST['stories'] == 'NULL') {
        $storiesErr = 'Please select your favorite type of mythology stories';
    } else {
        $stories = $_POST['stories'];
    }

    if (empty($_POST['comments'])) {
        $commentsErr = 'How can we help you?';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['agree'])) {
        $agreeErr = 'You must agree!';
    } else {
        $agree = $_POST['agree'];
    }

    function myDeities() {
        $myReturn = '';
        //if my genres array is not empty, implode it
        if(!empty($_POST['deity'])) {
            $myReturn = implode(', ', $_POST['deity']);
        } return $myReturn;


    }// close myDeities


    if (isset(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['origin'],
        $_POST['deity'],
        $_POST['stories'],
        $_POST['comments'],
        $_POST['agree']
        //$_POST['phone']
    )) {

        // $to = 'joey.garza94@gmail.com';
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email for my final project contact page, ' . date('m/d/y');
        $body = 'First and Last name: ' . $firstName . ' ' . $lastName . '' . PHP_EOL . '
                Email: ' . $email . '' . PHP_EOL . '
                Phone Number: ' . $phone . ''. PHP_EOL . '
                Origin of mythology: ' . $origin . '' . PHP_EOL . '
                Comments: '. $comments .''. PHP_EOL.'
                Type of story: ' . $stories . ''. PHP_EOL .'
                Favorite Types of Deities: '.myDeities().'';

                $headers = array(
                    'From' => 'no-reply@garzawebdesigns.com',
                    'Reply-to' => ''.$email.''

                );


        if (
            $_POST['firstName'] != '' &&
            $_POST['lastName'] != '' &&
            $_POST['email'] != '' &&
            $_POST['deity'] != '' &&
            $_POST['comments'] != '' &&
            $_POST['agree'] != '' &&
            $_POST['phone'] != '' &&
            preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) &&
            $_POST['stories'] != 'NULL'
        ) {

            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        }
    } //closing isset
} //end server request

?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <label>First Name</label>
            <input type="text" name="firstName" value="<?php if (isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>">
            <span class="err"><?php echo $firstNameErr; ?></span>

            <label>Last Name</label>
            <input type="text" name="lastName" value="<?php if (isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>">
            <span class="err"><?php echo $lastNameErr; ?></span>

            <label>Email</label>
            <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <span class="err"><?php echo $emailErr; ?></span>

            <label>Phone</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
            <span class="err"><?php echo $phoneErr; ?></span>

            <label>Favorite Origin of Mythology</label>
            <ul>
                <li><input type="radio" name="origin" value="greek" <?php if (isset($_POST['origin']) && $_POST['origin'] == 'greek') echo 'checked="checked"'; ?> class="origin">Greek</li>
                <li><input type="radio" name="origin" value="roman" <?php if (isset($_POST['origin']) && $_POST['origin'] == 'roman') echo 'checked="checked"'; ?> class="origin">Roman</li>
                <li><input type="radio" name="origin" value="christian" <?php if (isset($_POST['origin']) && $_POST['origin'] == 'christian') echo 'checked="checked"'; ?> class="origin">Christian</li>
                <li><input type="radio" name="origin" value="aztec" <?php if (isset($_POST['origin']) && $_POST['origin'] == 'aztec') echo 'checked="checked"'; ?> class="origin">Aztec</li>
                <li><input type="radio" name="origin" value="mayan" <?php if (isset($_POST['origin']) && $_POST['origin'] == 'mayan') echo 'checked="checked"'; ?> class="origin">Mayan</li>
                <li><input type="radio" name="origin" value="nordic" <?php if (isset($_POST['origin']) && $_POST['origin'] == 'nordic') echo 'checked="checked"'; ?> class="origin">Nordic</li>
                <li><input type="radio" name="origin" value="african" <?php if (isset($_POST['origin']) && $_POST['origin'] == 'african') echo 'checked="checked"'; ?> class="origin">African</li>
                <li><input type="radio" name="origin" value="egyptian" <?php if (isset($_POST['origin']) && $_POST['origin'] == 'agyptian') echo 'checked="checked"'; ?> class="origin">Egyptian</li>
            </ul>
            <span class="err"><?php echo $originErr; ?></span>


            <label>Favorite Types of Deities</label>
            <ul>
                <li><input type="checkbox" name="deity[]" value="sun" <?php if (isset($_POST['deity']) && in_array('sun', $deity)) echo 'checked="checked"'; ?>>Sun</li>
                <li><input type="checkbox" name="deity[]" value="moon" <?php if (isset($_POST['deity']) && in_array('moon', $deity)) echo 'checked="checked"'; ?>>Moon</li>
                <li><input type="checkbox" name="deity[]" value="underworld" <?php if (isset($_POST['deity']) && in_array('underworld', $deity)) echo 'checked="checked"'; ?>>Underworld</li>
                <li><input type="checkbox" name="deity[]" value="war" <?php if (isset($_POST['deity']) && in_array('war', $deity)) echo 'checked="checked"'; ?>>War</li>
                <li><input type="checkbox" name="deity[]" value="life" <?php if (isset($_POST['deity']) && in_array('life', $deity)) echo 'checked="checked"'; ?>>Life</li>
                <li><input type="checkbox" name="deity[]" value="earth" <?php if (isset($_POST['deity']) && in_array('earth', $deity)) echo 'checked="checked"'; ?>>Earth</li>
                <li><input type="checkbox" name="deity[]" value="fertility" <?php if (isset($_POST['deity']) && in_array('fertility', $deity)) echo 'checked="checked"'; ?>>Fertility</li>
                <li><input type="checkbox" name="deity[]" value="hunting" <?php if (isset($_POST['deity']) && in_array('hunting', $deity)) echo 'checked="checked"'; ?>>Hunting</li>
                <li><input type="checkbox" name="deity[]" value="death" <?php if (isset($_POST['deity']) && in_array('death', $deity)) echo 'checked="checked"'; ?>>Death</li>
                <li><input type="checkbox" name="deity[]" value="rain" <?php if (isset($_POST['deity']) && in_array('rain', $deity)) echo 'checked="checked"'; ?>>Rain</li>
                <li><input type="checkbox" name="deity[]" value="harvest" <?php if (isset($_POST['deity']) && in_array('harvest', $deity)) echo 'checked="checked"'; ?>>Harvest</li>
            </ul>
            <span class="err"><?php echo $deityErr; ?></span>

            <label>Favorite Type of Story</label>
            <select name="stories">
                <option value="NULL" <?php if (isset($_POST['stories']) && $_POST['stories'] == 'NULL') echo 'selected="unselected"'; ?>>Select one</option>
                <option value="heroic" <?php if (isset($_POST['stories']) && $_POST['stories'] == 'heroic') echo 'selected="selected"'; ?>>Heroic</option>
                <option value="tragedy" <?php if (isset($_POST['stories']) && $_POST['stories'] == 'tragedy') echo 'selected="selected"'; ?>>Tragedy</option>
                <option value="romantic" <?php if (isset($_POST['stories']) && $_POST['stories'] == 'romantic') echo 'selected="selected"'; ?>>Romantic</option>
                <option value="revenge" <?php if (isset($_POST['stories']) && $_POST['stories'] == 'revenge') echo 'selected="selected"'; ?>>Revenge</option>
                <option value="moral" <?php if (isset($_POST['stories']) && $_POST['stories'] == 'moral') echo 'selected="selected"'; ?>>Moral Stories</option>
            </select>
            <span class="err"><?php echo $storiesErr; ?></span>

            <label>Comments</label>
            <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
            <span class="err"><?php echo $commentsErr; ?></span>

            <label>Agree</label>
            <ul>
                <li><input type="radio" name="agree" value="agree" <?php if (isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked="checked"'; ?>>Agree</li>
            </ul>
            <span class="err"><?php echo $agreeErr; ?></span>

            <input type="submit" value="Send it!">

            <p><a href="">Reset</a></p>

        </fieldset>

    </form>