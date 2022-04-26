<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'format/HTMLheader.php';?>
    <title>Smart Form Homepage</title>
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
            window.location.href = 'signupHTML.php';
          });
          $("#btnLogin").click(function() {
            window.location.href = 'loginHTML.php';
          });
          $("#logo").click(function() {
            window.location.href = 'homepageHTML.php';
          });
        });
    </script>

</head>

<body>
    <a id="scroll" style="display: none;"><span></span></a>

    <!-- nav -->
  <?php include 'format/HTMLbar.php';?>
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
                    <br>

                <div class="theme-bg-color8 addShadow addSurroundedPadding2" style="border-radius: 2rem 2rem 2rem 2rem;">
                    <b style="font-size: 125%;" class="theme-color2">About Our Team</b>
                    <br><br>

                    <div class="row">
                        <div class="col theme-color5 overflowAuto">
                            <span>
                                <img src="img/Samantha.png" class="sth-center" alt="Samantha" style="width:100%;max-width:105px">
                                <br>
                                <h6 class="text-center">LAU Wing Yin</h6>
                            </span>
                        </div>

                        <div class="col theme-color5 overflowAuto">
                            <span>
                                <img src="img/Cinna.png" class="sth-center" alt="Cinna" style="width:100%;max-width:105px">
                                <br>
                                <h6 class="text-center">CHEUNG Tsz Yin</h6>
                            </span>
                        </div>

                        <div class="col theme-color5 overflowAuto">
                            <span>
                                <img src="img/Wenni.png" class="sth-center" alt="Wenni" style="width:100%;max-width:105px">
                                <br>
                                <h6 class="text-center">YEUNG Wai Yin</h6>
                            </span>
                        </div>

                        <div class="col theme-color5 overflowAuto">
                            <span>
                                <img src="img/Cyrus.png" class="sth-center" alt="Cyrus" style="width:100%;max-width:105px">
                                <br>
                                <h6 class="text-center">LAU Ka Pui</h6>
                            </span>
                        </div>
                        <br><br><br><br><br><br><br><br>
                        <p class="text-center theme-color2" style="font-size:90%;">
                            We are studying Higher Diploma in Creative Media (Web & App).
                            <br>
                            Our abilities include HTML5, JS, CSS3, jQuery, Python, PHP, SQL, NoSQL, and Adobe PR, AI, XD, ID...
                        </p>
                    </div>

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
                <p>Phone 852 xxxx xxxx | Email xxxxx@stu.vtc.edu.com</p>
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
