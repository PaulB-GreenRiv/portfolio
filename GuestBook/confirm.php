<?php
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require ($_SERVER['HOME'].'/connect.php');
    $cnxn = connect();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thank you very much!</h1>
</body>
</html>
<?php

    include ("includes/NavigationBar.html");

    $first = $_POST['fName'];
    $last = $_POST['lName'];
    $title = $_POST['jTitle'];
    $company = $_POST['company'];
    $linkURL = $_POST['linkUrl'];
    $email = $_POST['email'];
    $met = $_POST['category'];
    if (!empty($_POST['other']))
    {
        $met = $_POST['other'];
    }
    $message = $_POST['message'];
    $addMe = $_POST['Addme'];
    $eformat = $_POST['format'];

    echo "<p>$first</p>";
    echo "<p>$last</p>";
    echo "<p>$title</p>";
    echo "<p>$company</p>";
    echo "<p>$linkURL</p>";
    echo "<p>$email</p>";
    echo "<p>$met</p>";
    echo "<p>$message</p>";
    echo "<p>$addMe</p>";
    echo "<p>$eformat</p>";

/*
 * CREATE TABLE guestbook (
	first_name VARCHAR(20) NOT NULL,
	last_name VARCHAR(40) NOT NULL,
	job_title VARCHAR(40),
	company VARCHAR(30),
	linkedIn_URL VARCHAR(40),
	email VARCHAR(60),
	met TEXT NOT NULL,
	message TEXT,
	addMe ENUM('Yes', 'No') default 'No',
	email_format ENUM('Text', 'HTML') default 'Text',
	submitted datetime NOT NULL DEFAULT current_timestamp());

    INSERT INTO guestbook (first_name, last_name, job_title, company, linkedIn_URL, email, met, message, addMe, email_format)
    VALUES ('Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Yes', 'Text');
 */
    $sql = "INSERT INTO guestbook (first_name, last_name, job_title, company, linkedIn_URL, email, met, message, addMe, email_format)
    VALUES ('$first', '$last', '$title', '$company', '$linkURL', '$email', '$met', '$message', '$addMe', '$eformat')";
    $success = mysqli_query($cnxn, $sql);
    if (!$success)
    {
        echo "<p>ERROR</p>";
        return;
    }

?>
