<!DOCTYPE html>
<html>
<head>
    <title>Sign Up | Muziko</title>
    
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> -->
    <link href="css/signup.css" rel="stylesheet" type="text/css"/>
    
    
    <!-- <script src="bootstrap/js/jQuery.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
   <!-- ######################### HEADER SECTION ########################### -->
    
    <div class="container">
        <div class="navbar">
            <img src="images/logo/white1.png" class="logo">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#">LOGIN</a></li>
            </ul>
        </div> 
        
        <!-- ######################## CONTENT SECTION ########################### -->

        <center>
            <div class="banner">
                <div class="form">
                    <form class="form-signup" action="insert.php" method="POST">
                        <h1>SIGN UP</h1>
                        <br>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Name">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="mail" class="form-control" placeholder="Email">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <br>
                        
                        
                        <div class="form-group">
                            <input type="number" name="contact" class="form-control" placeholder="Contact">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" placeholder="City">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" value="SUBMIT" name="submit" class="button">
                        </div>
				Already have an account? <a href="index.php">Login</a>
                    </form>
                </div>
            </div>
        </center>
    </div>

   
   <!--########################## FOOTER SECTION ###########################-->
    <footer>
        <div class="footer">
            <div class="footer-logo">
                <img src="images/logo/black1.png" alt="logo" class="logo">
            </div>
            <br>
            <div class="footer-links">
                <table>
                    <tr>
                        <th>COMPANY</th>
                        <th>COMMUNITIES</th>
                        <th>USEFUL LINKS</th>                   
                    </tr>
                    <tr>
                        <td>About</td>    
                        <td>For Artists</td>
                        <td>Support</td>
                    </tr>
                    <tr>
                        <td>Jobs</td>
                        <td>Developers</td>
                        <td>Web Player</td>
                    </tr>
                    <tr>
                        <td>For the Record</td>
                        <td>Advertising</td>
                        <td>Free Mobile App</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Investors</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Vendors</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </footer>
</body> 
</html>
