<?php
include 'config.php';
session_start();
error_reporting (0);
if (isset ($_SESSION["id"])) {header("Location: index.php");
}
if (isset ($_POST["signup"])) {
    $full_name = mysqli_real_escape_string($conn,$_POST["full_name"]);

    $phone_number = mysqli_real_escape_string($conn,$_POST["phone_number"]);

    $email = mysqli_real_escape_string($conn,$_POST["email"]);

    $password = mysqli_real_escape_string($conn,md5($_POST["password"]));

    $cpassword = mysqli_real_escape_string($conn,md5($_POST["cpassword"]));



    $check_email = mysqli_num_rows(mysqli_query($conn,"SELECT email FROM users WHERE email ='$email'"));

    if ($password !== $cpassword){
        echo "<script>alert('password not match');</script>";
    }
    elseif ($check_email > 0) {
        echo "<script>alert('Email already  exist');</script>";
    }
    else{
        $sql = "INSERT INTO users(full_name, phone_number, email, password) VALUE( '$full_name', '$phone_number',  '$email',  '$password')";
    }
    $result = mysqli_query ($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
            <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
            <link rel="stylesheet" href="hhh.css">
    <title>Document</title>
</head>
<body>
    <section class="p-1 bg-dark text-light">
        <div class="container p-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <div class="row">
                        <div class="col">
                            <p> Please Signup Here </p>
                            
                            <label for="formGroupExampleInput" class="form-label">Enter Full Names</label>
                          <input id="text" type="text" class="form-control bg-dark text-light" placeholder=" Full_Name" aria-label="First name" 
                          name="full_name" value="<?php echo $_POST["full_name"]; ?> "required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Enter Phone Number</label>
                          <input id=""type="text" class="form-control bg-dark text-light" placeholder="Phone Number" aria-label="First name" 
                          name="phone_number" value="<?php echo $_POST["phone_number"]; ?> "required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Enter Email</label>
                          <input type="text" class="form-control bg-dark text-light" placeholder="Enter Email" aria-label="First name" 
                          name="email" value="<?php echo $_POST["email"]; ?> "required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Enter Password</label>
                          <input type="password" class="form-control bg-dark text-light" placeholder="Enter Password" aria-label="First name" 
                          name="password" value="<?php echo $_POST["password"]; ?> "required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Confirm Password</label>
                          <input type="password" class="form-control bg-dark text-light" placeholder=" Confirm Password" aria-label="First name" 
                          name="cpassword" value="<?php echo $_POST["cpassword"]; ?> "required />
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto mt-3">
                        <input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
                      </div>
                </div>
                <div class="col-md p-5">
                    <h1>We are Digital Marketing Agency</h1>
                    <p class="lead">
                         Being marketing experts who live and breathe social media, we understand 
                         exactly how to meet all of your social media needs. Whether it's advertisements, 
                         brand development posts, logos, banners or general content - we are here to 
                         bassist.
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>