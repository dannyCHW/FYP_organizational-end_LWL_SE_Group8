<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Form - Sign In</title>
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico" />
    <link rel="stylesheet" href="plugins/w3/w3.css">
    <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
    <script src="plugins/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="plugins/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
        /* Bordered form */
        .form2 {
            border: none;
            border-radius: 15px;
            background-color: #FBF9F8;
            margin: 3.5vw 20vw;
        }

        /* Full-width inputs */
        input[type=text],
        input[type=password] {
            border-radius: 15px;
            /* border: none; */
            width: 100%;
            padding: 8px 10px;
            /* margin: 8px 0; */
            display: inline-block;
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 12px 40px;
        }
    </style>
</head>

<body style="background-color:#EEE8E5;">
    <a id="scroll" style="display: none;"><span></span></a>

    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.html">
                <div class="row">
                    <div class="col col-lg-2"></div>
                    <div class="col-md-auto"><img src="img/IconsPSD.png" alt="" width="50" height="50" class=""></div>
                </div>
            </a>

            <div class="row">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><small>Eng</small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><small>繁</small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><small>簡</small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signin.html"><small>Profile</small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><small>Setting</small></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!-- nav end -->

    <form action="form.html" method="" class="form2 needs-validation" novalidate>
        <div class="container w3-content">
            <h5 style="font-size:150%; color:#8A5122;" class="container w3-center"><b>Sign In</b></h5>
            <p>
                <label for="uid" style="color:#B19F97;">ID:</label>
                <input type="text" name="uid" class="form-control" required>
                <label style="font-size:80%; color:#2715FF;"><a href="#" style="text-decoration: none;">Forgot
                        ID?</a></label>
            </p>

            <p>
                <label for="pw" style="color:#B19F97;">Password:</label>
                <input type="password" name="pw" class="form-control" required>
                <label style="font-size:80%; color:#2715FF;"><a href="#" style="text-decoration: none;">Forgot
                        password?</a></label>
            </p>

            <p class="w3-center">
                <button type="submit" class="button-smartform2">&nbsp;Sign In&nbsp;</button>
                <br><br><hr><br><br>
                New user? <label style="color:#2715FF;"><a href="signup.html" style="text-decoration: none;">Create an account</a></label>
            </p>
        </div>
    </form>

    <!-- footer -->
    <p></p>
    <footer class="py-5" style="background-color: #fff;">
        <div class="row">
            <div class="col-1"></div>

            <div class="col-5">
                <p><b>Contact Us</b></p>
                <p>Phone 852 0000 0000 | Email cs@xxxxxxxxx.com</p>
                <small>Copyright &copy; 2022 XXXXX XXXX Limited. All rights reserved.</small>
            </div>

            <div class="col-4 offset-1">
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of whats new and exciting from us.</p>
                    <div class="d-flex w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button"
                            style="background-color: #987468;">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </footer>
    <!-- footer end -->

</body>

<link rel="stylesheet" href="css/main.css">
<script src="js/main.js"></script>
</html>
