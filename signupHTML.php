<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Form - Sign Up</title>
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
            margin: 3.5vw 15vw;
        }

        /* Full-width inputs */
        input[type=text],
        input[type=password],
        input[type=number] {
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
            padding: 1vw 7.5vw;
        }

        select {
            width: 100%;
            padding: 4px 10px;
            /* border: none; */
        }
    </style>
    <script>
    $( document ).ready(function() {
      $("#pwdCheckbox").change(function(){
        if($("#password_input").attr('type')=="password"){
          $("#password_input").attr('type',"text");
          $("#password2").attr('type',"text");
        }else{
            $("#password_input").attr("type","password");
            $("#password2").attr('type',"password");
        }
      });
      $('#createForm').on('submit', function(e){
          if ($('#password_input').val() != $('#password2').val()){
              e.preventDefault();
              alert("The password is not match");
          }else if($("#contactNumber").val().length != 8){
            e.preventDefault();
            alert("The contact number is wrong format");
          }else if($("#faxNumber").val().length != 8){
            e.preventDefault();
            alert("The fax number is wrong format.");
          }else if($("#orgNumber").val().length != 11){
            e.preventDefault();
            alert("The organazation or company number is wrong format.");
          }else if($('#file').val()==''){
            e.preventDefault();
            alert("The documentary proof must be submit.");
          }else{

          }
      });
    });
    </script>
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

    <form id="createForm" action="signup.php" method="POST" class="form2 needs-validation">
        <div class="container w3-content">
            <h5 style="font-size:150%; color:#8A5122;" class="container w3-center"><b>Sign Up</b></h5>
            <p class="fw-lighter small">* Must be filled</p>
            <p>
                <label for="uname" style="color:#B19F97;">*Organization Name</label>
                <input type="text" id="orgName"name="uname" class="form-control" placeholder="e.g. Social Welfare Department"
                    required>
            </p>

            <p>
                <label for="pnum" style="color:#B19F97;">*Phone Number</label>
                <input type="number" id="contactNumber"name="pnum" class="form-control" placeholder="e.g. 23432255" required>
            </p>

            <p>
                <label for="email" style="color:#B19F97;">*Email Address</label>
                <input type="email" id="email" pname="email" class="form-control" placeholder="e.g. swdenq@swd.gov.hk" required>
            </p>

            <p>
                <label for="fnum" style="color:#B19F97;">Fax Number</label>
                <input type="number" id="faxNumber" name="fnum" class="form-control" placeholder="e.g. 28380125">
            </p>

            <p>
                <label for="brnum" style="color:#B19F97;">*SR/BR Number (the first 11 digits)</label>
                <input type="number" id="orgNumber"name="brnum" class="form-control" placeholder="e.g. 12345678123" required>
            </p>

            <p>
                <label for="address" style="color:#B19F97;">*Address</label>
                <input type="text" id="address"name="address" class="form-control"
                    placeholder="e.g. 7/F - 10/F, WU CHUNG HSE, 213 QUEEN'S RD EAST, WAN CHAI, HK" required>
            </p>

            <p>
                <label for="pw" style="color:#B19F97;">*Password</label>
                <input type="password" name="pw" class="form-control" pattern="(?=.*\d)(?=.*[a-z]).{12,}" id="password_input"
                    required>
                <!-- An element to toggle between password visibility -->
                <input id="pwdCheckbox" type="checkbox" />&nbsp;&nbsp;Show Password<br>

                <label style="font-size:80%; color:#987468;">Use 12 or more characters with a mix of letters, numbers &
                    symbols</label>
            </p>

            <p>
                <label for="pw-confirm" style="color:#B19F97;">*Confirm Password</label>
                <input type="password" id="password2" name="pw-confirm" class="form-control" required>
            </p>

            <p>
                <label for="aboutOrganization" style="color:#B19F97;">*About Organization</label>
                <br>
                <textarea id="aboutOrganization" name="aboutOrganization" rows="4" cols="57.5" style="min-height:100px;"
                    class="form-control" placeholder="e.g. Organizational purpose<?="\n"?>        Date of establishment<?="\n"?>        Number of people<?="\n"?>        etc..." required></textarea>
            </p>

            <p>
                <label for="promotional" style="color:#B19F97;">Organazation documentary proof<br><small>&nbsp;&nbsp;Acceptable file format:&nbsp;&nbsp;doc, pdf, txt,
                        svg<br>&nbsp;&nbsp;File size:&nbsp;&nbsp;&lt;10MB<br></small></label>
                <br>
                <input type="file" id="document" name="filename" class="form-control" accept=".pdf, .doc, .txt">
            </p>

            <br>
            <p class="w3-center">
                <button type="submit" name="signupFormSubmit" class="button-smartform2">&nbsp;Submit&nbsp;</button>
            </p>
            <br>
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
