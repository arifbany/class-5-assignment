<?php include "./class.php";?>
<!doctype html>
<html lang="en">

<head>
    <title>Module 5 - Assignment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/295/295128.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <div>
        <div class="login-box">
            <h2> CREAT A FORM</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="user-box">
                    <input type="text" name="name" required="required">
                    <label>NAME</label>
                </div>
                <div class="user-box">
                    <input type="email" name="email" required="required">
                    <label>EMAIL</label>
                </div>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <!-- Login -->
                    <input type="submit" value="Submit">
                </a>

            </form>
        </div>
        <!-- assignment 2 --> 
                       <div class="output">
            <h2> BASIC OOP</h2>
            <p>NAME: <span><?php echo $taskTwoName; ?></span></p>
            <p>EMAIL: <span><?php echo $taskTwoEmail; ?></span></p>
            <hr /><br>

            <!-- assignment 3 --> 
            <h2>SUPER GlOBAL</h2>
            <p>NAME: <span><?php echo $name; ?></span></p>
            <p>EMAIL: <span><?php echo $email; ?></span></p>
        </div>
    </div>
</body>

</html>