<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>User Registration </title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="header" style="background-color: #820ad1;">
<h2>Create user account</h2>
</div>

<form method="post" action="register.php"> 
<?php echo display_error(); ?>  

    <div  class="input-group">
        <label>Username</label>
        <input type="text" name="username" value=" <?php echo $username; ?>">
    </div>
    
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value=" <?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
    <button type="submit" class="btn" name="register_btn">Register</button>
</div>
<p>
Already have an account? <a href="login.php">Sign in</a>
</p>
</form>
</body>
</html>