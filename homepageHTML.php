<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Form Homepage</title>
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico" />
    <link rel="stylesheet" href="plugins/w3/w3.css">
    <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
    <script src="plugins/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="plugins/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
        /* BG Animations */
        @-webkit-keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @-moz-keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @-o-keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @-webkit-keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        @-moz-keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        @-o-keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        @keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        /* Main styles */
        body {
            /* img size is 50x50 */
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
            -webkit-animation: bg-scrolling-reverse 5s infinite;
            /* Safari 4+ */
            -moz-animation: bg-scrolling-reverse 5s infinite;
            /* Fx 5+ */
            -o-animation: bg-scrolling-reverse 5s infinite;
            /* Opera 12+ */
            animation: bg-scrolling-reverse 5s infinite;
            /* IE 10+ */
            -webkit-animation-timing-function: linear;
            -moz-animation-timing-function: linear;
            -o-animation-timing-function: linear;
            animation-timing-function: linear;
        }
    </style>

    <script>
        $( document ).ready(function() {
          $("#btnJoinUs").click(function() {
            window.location.href = 'http://127.0.0.1/fpy_github/signupHTML.php?#';
          });
          $("#btnLogin").click(function() {
            window.location.href = 'http://127.0.0.1/fpy_github/loginHTML.php?#';
          });
          $("#logo").click(function() {
            window.location.href = 'http://127.0.0.1/fpy_github/homepageHTML.php?#';
          });
        });
    </script>

</head>

<body>
    <a id="scroll" style="display: none;"><span></span></a>

    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #EEE8E5;">
        <div class="container-fluid">

            <div class="row" id="logo">
                <div class="col col-lg-2"></div>
                <div class="col-md-auto"><img src="img/IconsPSD.png" alt="" width="50" height="50" class=""></div>
            </div>

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

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="img/MachineDesignOutlook.png" alt="Machine Design Outlook" class="index-machineOutlook">
            </div>

            <div class="col col-min-width">
                <div style="font-family:Roboto;">
                    <br><br><br>
                    <p style="font-size:90%; color:#595959;">
                        S&nbsp;m&nbsp;a&nbsp;r&nbsp;t&nbsp;&nbsp;F&nbsp;o&nbsp;r&nbsp;m<br>
                    <div class="wrapperTyping">
                        <div class="typing-demo">
                            <span style="font-size:500%; color:#987468;"><b>One for All, Smart for
                                    Care</b></span><br><br>
                        </div>
                    </div>
                    <span style="font-size:120%; color:#603832;"><b>Corporate social responsibility
                            (CSR)</b> is a self-regulating business model that helps a company be socially
                        accountable.
                        <br><br> We provide a platform for you to create welfare that changing the world.</span>
                    <br><br>
                        <button class="button-smartform w3-right" id="btnLogin">&nbsp&nbsp&nbsp;Login&nbsp&nbsp;&nbsp</button>
                        <button class="button-smartform w3-right" id="btnJoinUs">&nbsp;Join Us!&nbsp;</button>
                    </p>
                    <br><br>

                    <br><br><br><br><br><br><br><br><br><br>
                    <p class="w3-center" style="font-size:90%; color:#B58767;"> We are studying Higher Diploma
                        in Creative Media (Web & App).
                        <br>Our abilities include HTML5, JS, CSS3, jQuery, Python, PHP, SQL, NoSQL, and Adobe
                        PR, AI, XD, ID...
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <p></p>
    <footer class="py-5" style="background-color: #EEE8E5;">
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
