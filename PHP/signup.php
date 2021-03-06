<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">

        <!--Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!--Stylesheets-->
        <link rel="stylesheet" type="text/css" href="../CSS/Page5and6.css" />
        <link href="../css-fas/all.css" rel="stylesheet">

        <!--Shortcut icon (tab icon)-->
        <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">
        
        <title>Sign Up</title>
    </head>
    <body>
        <?php require('navbar.php'); ?>
        <div class="banner mb-3 mx-4">
            <h3>Create an account with us today.</h3>
            <p>Collect points on purchases and redeem them for rewards!</p>
        </div>        
        <h2 class="pb-3 text-center">Sign Up</h2>
        <div class="container-sm shadow rounded col col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 bg-light p-3 pt-5 pb-4">
            <form action="signup.php" method="POST" id="signupForm">
                <div class="row row-cols-2 justify-content-center align-items-center">
                    <div class="col col-8 col-md-5 col-lg-4">
                        <label for="fname" class="form-label">First name</label>
                        <input type="text" class="form-control" id="fname" name="fname">
                        <p id="fnameInvalid" class="invalid"></p>
                    </div>
                    <div class="col col-8 col-md-5 col-lg-4">
                        <label for="lname" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lname" name="lname">
                        <p id="lnameInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-8 col-sm-8 offset-md-1 col-md-4 offset-lg-2 col-lg-3 offset-xl-2 col-xl-3">
                        <label for="postalCode" class="form-label">Postal Code</label>
                        <input type="text" class="form-control" id="postalCode" name="postalCode">
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col offset-lg-2 offset-xl-2 offset-md-1 col-8 col-lg-6 col-xl-6">
                        <p id="postalCodeInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col offset-lg-2 offset-xl-2 offset-md-1 col-8 col-lg-6 col-xl-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <p id="emailInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col offset-lg-2 offset-xl-2 offset-md-1 col-8 col-lg-6 col-xl-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <p id="passwordInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col offset-lg-2 offset-xl-2 offset-md-1 col-9">
                        <div class="form-check pb-0">
                          <input class="form-check-input" type="checkbox" id="termsCheck">
                          <label class="form-check-label" for="termsCheck">
                            Yes, I agree to the terms and conditions.
                          </label>
                        </div>
                      </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col offset-lg-2 offset-xl-2 offset-md-1 col-8">
                        <p id="termsCheckInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="pb-2">
                    <p class="text-center"><a href="login.php" class="link">Already have an account? Click here to login.</a></p>
                </div>
                <div class="row mb-3 justify-content-center">
                    <button class="btn btn-secondary col-7 col-lg-6 col-xxl-4" type="reset">Reset</button>
                </div>
                <div class="row mb-3 justify-content-center">
                    <button class="btn submit col-7 col-lg-6 col-xxl-4" type="button" onclick="validate('signupForm')">Sign Up</button>
                </div>
            </form>
        </div>
        <?php require('footer.php'); ?>

        <!--Personal Javascript-->
        <script src="../JS/P5_6.js"></script>

        <!--Bootstrap Javascript-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
<?php
if (isset($_POST['email'])) {
    // POST items from sign up form
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $postCode = $_POST['postalCode'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user already exists in user database
    $users = json_decode(file_get_contents("../DB/users.json"), true);
    foreach ($users['users'] as $user => $userInfo) {
        if (strcasecmp($userInfo['email'], $email) == 0) {
            echo '<script type="text/javascript">
            document.getElementById("termsCheckInvalid").innerHTML = "An account with that email already exists. Please try with a different email or login with that email.";
            </script>';
            echo "<script type='text/javascript'>alert('An account with the email " . $userInfo['email'] . " already exists. Please try with a different email or login with that email.');</script>";
            $accountExists = TRUE;
            break;
        }
    }
    if (!$accountExists) {
        echo "<script type='text/javascript'>alert('New account created with the email " . $userInfo['email'] .". Welcome " . $firstName . "!');</script>";
        $users['users'][] = $_POST;
        file_put_contents('../DB/users.json', json_encode($users));
        $_SESSION["user"] = $_POST;
        $_SESSION["logIn"] = true;
        header("Location: index.php");
        exit();
    }
}
?>