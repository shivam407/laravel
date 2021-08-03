<!DOCTYPE html>
<html lang="en" dir="">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Hire Systems</title>
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">
<link rel="stylesheet" href="assets/styles/vendor/perfect-scrollbar.css">
<link rel="stylesheet" href="assets/styles/vendor/datatables.min.css">
<link rel="stylesheet" href="assets/styles/vendor/pickadate/classic.css">
<link rel="stylesheet" href="assets/styles/vendor/pickadate/classic.date.css">
<link rel="stylesheet" href="assets/styles/vendor/sweetalert2.min.css">
<link rel="stylesheet" href="assets/styles/css/themes/custom.css">
<link rel="icon" href="assets/images_hisys/favicon_io/android-chrome-192x192.png" sizes="32x32" />
<link rel="icon" href="assets/images_hisys/favicon_io/android-chrome-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="assets/images_hisys/favicon_io/android-chrome-192x192.png" />
</head>

<body class="text-left">
    <div class="auth-layout-wrap" style="background-image: url(./assets/images_hisys/form-back.png)">
        <div class="auth-content">
            <div class="o-hidden">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-9 card m-auto">
                        <div class="p-5">
                            <div class="auth-logo text-center mb-4">
                                <img src="assets/images_hisys/hisys-logo.png" alt="">
                            </div>
                            <h1 class="mb-3 text-18">Sign In</h1>
                            <form class="needs-validation was-validated" action="home.php" novalidate>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" class="form-control " id="validationCustom03" type="email">
                                    <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control " type="password">
                                </div>
                                <button class="btn btn-primary btn-block mt-2">Sign In</button>

                            </form>

                            <div class="mt-3 text-center">
                                <a href="forgot.php" class="text-muted"><u>Forgot Password?</u></a>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>

        

    </div>
    <div class="app-footer ">
                
                <div class="footer-bottom  pt-3 d-flex flex-column flex-sm-row align-items-center ">
                    <div class="d-flex align-items-center pur-fullw pur-space-bet">
                        
                        <div><img class="logo " src="./assets/images/logo.png " alt=" "></div>
                        <div>
                            &copy; <?php echo date('Y'); ?> Hire Systems Pvt Ltd
                            All rights reserved
                        </div>
                    </div>
                </div>
            </div>

    

  
</body>

</html>