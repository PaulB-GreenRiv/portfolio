<?php
    require ('includes/phpSetup.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>

<section>
    <?php

    include ("includes/NavigationBar.html");

    /*
     * 	first_name VARCHAR(20) NOT NULL,
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
     */
        $sql = "SELECT first_name, last_name, job_title, company, linkedIn_URL, email, met, message, addMe, email_format, submitted 
                FROM guestbook";
        $result = mysqli_query($cnxn, $sql);
        foreach ($result as $row) {
            $first = $row['first_name'];
            $last = $row['last_name'];
            $job = $row['job_title'];
            $company = $row['company'];
            $linkUrl = $row['linkedIn_URL'];
            $email = $row['email'];
            $met = $row['met'];
            $message = $row['message'];
            $addMe = $row['addMe'];
            $format = $row['email_format'];
            $submitted = $row['submitted'];

            echo "<div>";
            echo "<h1>$first $last</h1>";
            echo "<p>$job for $company. LinkedIn: $linkUrl</p>";
            echo "<p>Email at: $email</p>";
            echo "<p>Met by means: $met</p>";
            echo "<p>Message: $message</p>";
            echo "<p>Add Them? $addMe, Email format: $format</p>";
            echo "<p>Submitted: $submitted</p>";
            echo "</div>";
        }
    ?>
</section>
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>