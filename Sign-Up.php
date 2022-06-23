<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM Users WHERE userName = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO Users (userName, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: Login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Sign Up</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Sign-Up.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link href="./styles/forms.css" rel="stylesheet">
  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "COVID-19 Calculator",
		"logo": "images/COVIDCalculatorLogo.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Sign Up">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
  <div class="content">
  <header class="u-clearfix u-header u-header" id="sec-baec">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="home.html" class="u-image u-logo u-image-1" data-image-width="484" data-image-height="197">
        <img src="images/COVIDCalculatorLogo.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse"
          style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
          <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
            href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-grey-90"
                href="Home.html" style="padding: 10px 0px;">Home</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-grey-90"
                href="Prediction-Tool.html" style="padding: 10px 0px;">Prediction Tool</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-grey-90"
                href="Information.html" style="padding: 10px 0px;">Information</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-grey-90"
                href="About-Us.html" style="padding: 10px 0px;">About Us</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-grey-90"
                href="Contact.html" style="padding: 10px 0px;">Contact</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-grey-90"
                href="Login.php" style="padding: 10px 0px;">Login</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-grey-90"
                href="Sign-Up.php" style="padding: 10px 0px;">Sign Up</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="home.html">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Prediction-Tool.html">Prediction
                    Tool</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Information.html">Information</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-Us.html">About Us</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php">Login</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sign-Up.php">Sign Up</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <div class="container">
    <h2 class="mt-5">Sign Up</h2>
    <form>
      <div class="form-group">
        <label>Username</label>
        <input class="form-control mb-2 <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="form1" value="<?php echo $username; ?>">
        <span class="invalid-feedback"><?php echo $username_err; ?></span>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input class="form-control mb-2" id="form2">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input class="form-control mb-2 <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" type="password" id="form2"  value="<?php echo $password; ?>">
        <span class="invalid-feedback"><?php echo $password_err; ?></span>
      </div>
      <div>
          <label>Confirm Password</label>
          <input class="form-control mb-2 <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" type="password" id="form2">
          <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
      </div>
      <button type="submit" class="loginbutton btn-dark btn">Sign up</button>
    </form>
  </div>
</div>

  <footer class="u-black u-clearfix u-footer" id="sec-341c">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="home.html" class="u-image u-logo u-image-1" data-image-width="483" data-image-height="196">
        <img src="images/COVIDCalculatorLogoInverted.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse">
          <a class="u-button-style u-nav-link" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled">
            <li class="u-nav-item"><a class="u-button-style u-nav-link">Terms of Use</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link">Privacy Policy</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link">License Agreement</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link">© 2022 Group 3 – All Rights Reserved</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link">Terms of Use</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link">Privacy Policy</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link">License Agreement</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link">© 2022 Group 3 – All Rights Reserved</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
</body>

</html>