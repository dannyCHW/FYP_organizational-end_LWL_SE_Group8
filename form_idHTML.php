<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'format/HTMLheader.php'; ?>
    <title>Form ID-Smart Form</title>
    <style>
        /* Bordered form */
        .form2 {
            border: none;
            border-radius: 15px;
            background-color: #FBF9F8;
            margin: 10vw 20vw;
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

    <script>
        $(document).ready(function() {

        });
    </script>
</head>

<body style="background-color:#EEE8E5;">
    <a id="scroll" style="display: none;"><span></span></a>

    <?php require_once 'format/orgTopBar.php'; ?>

    <form action="javascript:out();" method="post" class="form2">
        <div class="container w3-content">
            <h5 style="font-size:150%; color:#B19F97;" class="container w3-center">Your Form ID number</h5>
            <p class="container w3-center">
                <span style="font-size:90%; color:#B19F97;">Please save the Form ID number for reference.</span><br>
                <span style="font-size:200%; color:#B19F97;"><?php echo $_GET['serviceID']; ?></span>
            </p>

            <p class="w3-center">
                <button type="submit" id="btnConfrim" class="button-smartform2">&nbsp;Confirm&nbsp;</button>
                <button type="button" onclick="javascript: goToUploadPosterPage();" id="btnUpImg" class="button-smartform2">&nbsp;Upload Poster?&nbsp;</button>
                <br>
                <br>
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
                <form action="" method="">
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of whats new and exciting from us.</p>
                    <div class="d-flex w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button" style="background-color: #987468;">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </footer>
    <!-- footer end -->

</body>
<link rel="stylesheet" href="css/main.css">
<script src="js/main.js"></script>
<script>
    function goToUploadPosterPage() {
        
    }

    function out() {
        window.location.href = 'orgLobbyHTML.php';
    }
</script>

</html>