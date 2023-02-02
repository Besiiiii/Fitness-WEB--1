<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Client area</title>
    <link rel="stylesheet" href="../css/messageStyle.css" />
    <!-- <link rel="stylesheet" href="style.css" /> -->
</head>
<body>
<div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user area.</p>      
        <p><a href="../index.html">Home</a> 
        <a href="logout.php">Logout</a></p>
 <?php       
    if (isset($_POST['comment'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);       
        $comment = stripslashes($_REQUEST['comment']);
        $comment = mysqli_real_escape_string($con, $comment);
        // Check user is exist in the database
        $query = "SELECT * FROM `users` 
        WHERE username='$username', email='$email', comment='$comment'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user Leave a Comment page
            // header("Location: message.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/email.</h3><br/>
                  <p class='link'>Click here to <a href='message.php'>Send!</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form  action="" method="post">
        <h1>Send a message!</h1>
            <ul>
                <li>
                    <input type="text" class="comment-input" name="username" placeholder="Username" required />
                    <div class="error"></div>
                </li>
                <li>
                    <input type="text" class="comment-input" name="email" placeholder="Email">
                    <div class="error"></div>
                </li>
                <li>
                    <input type="textarea" class="comment-input" name="comment" placeholder="Leave a Comment...">
                    <div class="error"></div>
                </li>
            </ul>
            <input type="submit" value="Send!"  class="btn"/>
    </form>
</div>
<?php } ?>
</body>
</html>
