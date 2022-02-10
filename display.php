<?php
$title = $_POST['Title'];
$first_name1 = $_POST['Firstname'];
$last_name1 = $_POST['Lastname'];
$dob = $_POST['date'];
$telephone = $_POST['phone'];
$filename = $_POST['filename'];
$email = $_POST['email'];
$message = $_POST['message'];

?>
Thankyou <?php echo $title;echo $first_name1; echo " ".$last_name1;?>
<br>
You have submitted the following details
<br>
Date of Birth:<?php echo $dob?>
<br>
Telephone:<?php echo $telephone?>
<br>
File uploaded:<?php echo $filename?>
<br>
Message:<?php echo $message?>
<br>