<!DOCTYPE html>
<?php session_start() ?>
<html>
    <head>
        <title>User List</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/P910styles.css">
        <link rel="stylesheet" href="../css-fas/all.css">
        <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body id="userListPage">
        <div class="sidebar">
            <header>La Meilleure Épicerie</header>
            <div class="list-group">
                <a href="../HTML/index.html" id="home" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Home</a>
                <a href="../HTML/P7_P8/products.html" id="Inventory" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Inventory</a>
                <a href="../HTML/userList.html" id="accounts" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Accounts</a>
                <a href="../HTML/p11-12/orders.html" id="orders" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Orders</a> 
                <a href="#" id="analytics" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Analytics</a>
                <a href="#" id="settings" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Settings</a>
                <a href="" id="reports" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Reports</a>
                <a href="#" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" id="login"> <b>Logout</b></a>
            </div>
          </div>
        
        <div class = "container-sm shadow rounded bg-light offset-3 p-4">
            <h1>User List</h1>
            <p>Please click on the account you wish to visit.</p>
            <div class="list-group" id = "userList">
                <a href="../HTML/Pravina.html" id="pravina" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                      Pravina Ferdinand
                    <span class="badge badge-success badge-pill">4</span>
                    
                </a>
                <button type="button" id="pravinaclose" hidden class="close" onclick="deletePravina()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <a href="../HTML/Estelle.html" id="estelle" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Estelle Adeodatus
                    
                    <span class="badge badge-success badge-pill">17</span>
                </a>
                <button type="button" id="estelleclose" hidden class="close" onclick="deleteEstelle()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <a href="../HTML/Antonius.html" id="antonius" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Antonius Ayanda
                    
                    <span class="badge badge-success badge-pill">6</span>
                </a>
                <button type="button" id="antoniusclose" hidden class="close"onclick="deleteAntonius()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <a href="../HTML/Katrina.html" id="katrina" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Katrina Higini
                    <span class="badge badge-success badge-pill">5</span>
                </a>
                <button type="button" id="katrinaclose" hidden class="close" onclick="deleteKatrina()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <a href="../HTML/Yazmin.html" id="yazmin" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Yazmin Gabriel</a>
                <button type="button" id="yazminclose" hidden class="close" onclick="deleteYazmin()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <a href="../HTML/Alexandre.html" id="alexandre" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Alexandre Ayako
                    <span class="badge badge-success badge-pill">8</span>
                </a>
                <button type="button" id="alexandreclose" hidden class="close" onclick="deleteAlexandre()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <a href="../HTML/Edward.html" id="edward" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Edward Elvira</a>
                <button type="button" id="edwardclose" hidden class="close" onclick="deleteEdward()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <a href="../HTML/Nathaniel.html" id="nathaniel" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Nathaniel Banks</a>
                <button type="button" id="nathanielclose" hidden class="close" onclick="deleteNathaniel()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <a href="../HTML/Madelaine.html" id="madelaine" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Madelaine Wuntch
                    <span class="badge badge-success badge-pill">32</span>
                </a>
                <button type="button" id="madelaineclose" hidden class="close" onclick="deleteMadelaine()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class = "text-center">
                <button type = "button" id = "addUser" onclick = 'addUser()' class = "btn btn-success">Add User</button>
                <button type = "button" id = "delUser"  class = "btn btn-success">Delete User</button>
            </div> 
        </div>
        <div class = "container-sm shadow rounded bg-light offset-3 p-4" id="addUserContainer"hidden>
            <h1>Add User</h1>
            <p>Please fill this form to add an additional user.</p>
            <form action = "../PHP/addUser.php" method="POST" id="addUserForm" name="addUserForm">
                <div class="row row-cols-2 justify-content-center align-items-center">
                    <div class="col col-8 col-md-5 col-lg-4">
                        <label for="fname" class="form-label">First name</label>
                        <input type="text" class="form-control" id="addfname" name="fname">
                        <p id="addfnameInvalid" class="invalid"></p>
                    </div>
                    <div class="col col-8 col-md-5 col-lg-4">
                        <label for="lname" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="addlname" name="lname">
                        <p id="addlnameInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-8 col-sm-8 offset-md-1 col-md-4 offset-lg-2 col-lg-3 offset-xl-2 col-xl-3">
                        <label for="postalCode" class="form-label">Postal Code</label>
                        <input type="text" class="form-control" id="addpostalCode" name="postalCode">
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col offset-lg-2 offset-xl-2 offset-md-1 col-8 col-lg-6 col-xl-6">
                        <p id="addpostalCodeInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col offset-lg-2 offset-xl-2 offset-md-1 col-8 col-lg-6 col-xl-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="addemail" name="email">
                        <p id="addemailInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col offset-lg-2 offset-xl-2 offset-md-1 col-8 col-lg-6 col-xl-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="addpassword" name="password">
                        <p id="addpasswordInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col offset-lg-2 offset-xl-2 offset-md-1 col-9">
                        <div class="form-check pb-0">
                          <input class="form-check-input" type="checkbox" id="addtermsCheck">
                          <label class="form-check-label" for="termsCheck">
                            Yes, I agree to the terms and conditions.
                          </label>
                        </div>
                      </div>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col offset-lg-2 offset-xl-2 offset-md-1 col-8">
                        <p id="addtermsCheckInvalid" class="invalid"></p>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <button class="btn btn-success col-7 col-lg-6 col-xxl-4" type="button" id="addBtn" onclick="confirm('addUserForm')" value="go to addUser.php">Add User</button>
                </div>
            </form>
        </div>
        <div id="footer">
            <a href="https://facebook.com" id="facebookIcon" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="https://instagram.com" id="instagramIcon" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://twitter.com" id="twitterIcon" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
            <h6 id="headFooter">
                Thanks for shopping at La Meilleure Épicerie. <br>
                To contact us, please click <a href="contact-us.html" class="contact-page">here</a>.
            </h6>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="../JS/users.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
<?php 
    // $formComplete = isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['password']) && isset($_POST['postalCode']);
    if (isset($_POST['fname'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $postCode = $_POST['postalCode'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        echo $fname + $lname + $postCode + $email + $pass;
        $users = json_decode(file_get_contents("../DB/users.json"), true);

        foreach ($users['users'] as $user => $userData) {
          if (strcasecmp($userData['email'], $email) == 0) {
            echo "<script type='text/javascript'>alert('The email " . $userInfo['email'] . " has already been used to make an account. Please log in with that email or use another one.');</script>";
            $emailUsed = TRUE;
            break;
          }
        }

        if (!$emailUsed) {
          echo "<script type='text/javascript'> alert('Your email has successfully been created. Thank you for choosing La Meilleure Épicerie, " . $fname . "!');</script>";
          $users['users'][] = $_POST;
          file_put_contents('../DB/users.json', json_encode($users));
          
        }
    }
?>
