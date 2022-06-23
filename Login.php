<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Login</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Login.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link href="./styles/forms.css" rel="stylesheet">

  <title>login</title>
  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "COVID-19 Calculator",
		"logo": "images/COVIDCalculatorLogo.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Login">
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
                  href="Login.html" style="padding: 10px 0px;">Login</a>
              </li>
              <li class="u-nav-item"><a
                  class="u-border-2 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-grey-90"
                  href="Sign-Up.html" style="padding: 10px 0px;">Sign Up</a>
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
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.html">Login</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sign-Up.html">Sign Up</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>
    
    <div class = "container form-signin">
      <?php
         $msg = '';
         
         if (isset($_POST['login']) && !empty($_POST['username']) 
            && !empty($_POST['password'])) {
     
            if ($_POST['username'] == 'demo' && 
               $_POST['password'] == '1234') {
               $_SESSION['valid'] = true;
               $_SESSION['timeout'] = time();
               $_SESSION['username'] = 'demo';
               
               echo 'You have entered valid use name and password';
            }else {
               $msg = 'Wrong username or password';
            }
         }
      ?>
    </div>
    <div class="container">
      <h2 class="mt-5">Log In</h2>
      <!-- generic text form -->
      <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
        <div class="form-group">
          <label>Username</label>
          <input class="form-control mb-2" id="form1">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input class="form-control mb-2" id="form2">
        </div>
        <button type="submit" class="loginbutton">Log-In!</button>
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