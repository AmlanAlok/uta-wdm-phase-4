<?php 

require '../service/SignUpService.php';

$signUpService = new SignUpService();

$selectedRole = '';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    // var_dump($_POST);
    $signUpService->storeSignUpInfo();

}

$rolesList = $signUpService->fetchAllRoles();
$buildingsList = $signUpService->fetchAllBuildings();
$subdivisionsList = $signUpService->fetchAllSubdivisions();
// var_dump($rolesList);
var_dump($buildingsList);
// var_dump($subdivisionsList);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../static/style.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    </head>
    <body>
        <div class="topnav">
            City View
            <a href="./login.html">Login</a>
            <a class="active" href="./sign-up.html">SignUp</a>
            <a href="./contact_us.html">Contact Us</a>
            <a href="/blog">Forum</a>
            <a href="./about.html">About Us</a>
            <a href="../index.html">Home</a>
        </div>
        <div class="container">
            <h2 class="sign" align="center" style="color:#4F4846;">Sign up</h2> <br>
            <div >
                <!-- <form  class="ContactUsForm" action="mailto:user@yahoomail.com" method="POST"> -->
                <form  class="ContactUsForm" method="POST">    
                    <div>
                        <div>
                            <label for="fname"></label>
                            <input type="text"  id="fname" name="first-name" value=""  placeholder= "First Name"> &nbsp
                            <label for="lname"></label>
                            <input type="text" id="lname" name="last-name" value=""  placeholder= "Last Name"> <br><br>
                            <label for="email"></label>
                            <input type="email" id="email"  name="email" value=""  placeholder= "Email"> <br><br>
                            <label for="password"></label>
                            <input type="password" id="password" name="password"  value="" placeholder= "Password"> <br><br>
                            <label for="repassword"></label>
                            <input type="password" id="repassword" name="repassword"  value="" placeholder= "Retype Password"> <br><br>
                        </div>
                        <div>
                            <label for="address1" style="color:#4F4846;">User's Address:</label> <br>
                            <input type="text" id="address1" name="address1"  value="" placeholder= "Street 1"><br><br>
                            <label for="address2"></label>
                            <input type="text" id="address2" name="address2" value="" placeholder= "Street 2"><br><br>
                            <label for="city"></label>
                            <input type="text" id="city" name="city"  value="" placeholder= "City"><br><br>
                            <label for="state"></label>
                            <input type="text" id="state" name="state"  value="" placeholder= "State"> <br><br>
                            <label for="zip"> </label>
                            <input type="text" id="zip" name="zip"  value="" placeholder= "Zip Code"> <br><br>
                            <label for="phno"> </label>
                            <label for="country"></label>
                            <input type="text" id="country" name="country"  value="" placeholder= "Country"><br><br>
                            <input type="tel" id="phno" name="phone-number"  value="" placeholder= "Phone Number"><br><br>
                        </div>
                    </div>
                    
                    <div>

                        <label for="rname">Responsible Contact's Name</label>
                        <input type="text" id="rname" name="rname" value=""  placeholder= "Name"> <br><br>

                        <label for="raddress">Responsible Contact's Address:</label> <br>
                        <input type="text" id="raddress" name="raddress" value=""  placeholder= "Address"><br><br>
                        
                        <label for="rcity"></label>
                        <input type="text" id="rcity" name="rcity" value=""  placeholder= "City"><br><br>
                        <label for="rcountry"></label>
                        <input type="text" id="rcountry" name="rcountry" value=""  placeholder= "Country"><br><br>
                        
                        <label for="rzip"> </label>
                        <input type="text" id="rzip" name="rzip" value=""  placeholder= "Zip Code"> <br><br>
                        <label for="rphno"> </label>
                        <input type="tel" id="rphno" name="rphno" value=""  placeholder= "Phone Number"> <br><br>
                    </div>
                    <div>
                        <!-- <label for="selection_type">What do you want to sign up for:</label>
                        <select name="selection_type"  id="selection_type">
                            <option value="1">Subdivision</option>
                            <option value="2">Building</option>
                            <option value="3">Apartment</option>
                            <option value="4">Services</option>
                            <option value="5">Self-Service Apartment</option>
                        </select><br><br> -->

                        <label for="role">Role:</label>
                        <select name="role"  id="role" onchange="getRoleDropdownValue()">
                            <?php foreach ($rolesList as $role): ?>
                                <option value="<?= htmlspecialchars($role->role_id); ?>"><?= htmlspecialchars($role->role_name); ?></option>
                            <?php endforeach; ?>    
                            
                        </select><br><br>

                        <label for="role">Choose Subdivision:</label>
                        <select name="subdivision" id="subdivision">
                            <?php foreach ($subdivisionsList as $subdivision): ?>
                                <option value="<?= htmlspecialchars($subdivision->subdivision_id); ?>"><?= htmlspecialchars($subdivision->subdivision_name); ?></option>
                            <?php endforeach; ?>

                        </select>


                    </div>
                    <div class="SignUpFormButtons" style="text-align: center;">
                        <input id="btnSubmit" type="submit" value="Submit"> &nbsp;&nbsp;
                        <input type="reset">
                    </div>
                    
                </form>
            </div>
        </div>
        <footer>
            <p align="center" class="footer">
                <span style="float: left;">All Rights Reserved</span>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a> &nbsp;&nbsp;
                <a href="https://facebook.com"><i class="fab fa-facebook"></i></a>&nbsp;&nbsp;
                <a href="https://youtube.com"><i class="fab fa-youtube"></i></a>&nbsp;&nbsp;
                <span style="float: right;">www.cityview.com</span>
            </p>
        </footer>

        <script src="sign-up.js"></script>
    </body>
</html>