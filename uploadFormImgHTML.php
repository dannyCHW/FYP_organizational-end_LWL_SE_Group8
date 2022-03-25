<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'format/HTMLheader.php'; ?>
    <link rel="stylesheet" href="checkboxCss.css">

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
</head>

<body style="background-color: #eee8e5;">

    <?php include 'format/bodyStyle.php'; ?>
    <!-- <?php include 'checkSession/orgUserCheckSession.php'; ?> -->

    <!-- nav -->
    <?php include 'format/orgTopBar.php'; ?>
    <!-- nav end -->

    </br></br></br></br></br>
    <!-- <div class="wrapper">
        <form >
            <div class="col-1"></div>
            <label class="col-2 col-form-label form-color">^Attachment<br>
                <p class="fw-lighter">Promotional Materials</p>
            </label>
            <div class="form-holder">
                <div class="input-group" style="min-width: 20vw;">
                    <input type="file" class="form-control form-color2" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept=".jpg, .jpeg, .png, .tiff, .svg" required>
                </div>
            </div>
            
            <button type="submit">Submit</button>
        </form>
    </div> -->

    <a id="scroll" style="display: none;"><span></span></a>

    <?php require_once 'format/orgTopBar.php'; ?>

    <form action="uploadFormImg.php" method="post" enctype="multipart/form-data" class="form2">
        <div class="container w3-content">
            <h5 style="font-size:150%; color:#B19F97;" class="container w3-center">Upload Your File</h5>
            <p class="container w3-center">
                <span style="font-size:90%; color:#B19F97;">Poster of the event</span><br>
                <span style="font-size:200%; color:#B19F97;">
                    <input type="file" name="file" class="form-control form-color2" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept=".jpg, .jpeg, .png, .tiff, .svg" required>
                    <input type="hidden" name="serviceID" value="<?php echo $_GET['serviceID']; ?>" />
                    <input type="hidden" name="currentImgName" value="<?php echo $_GET['oldImg']; ?>" />
                </span>
            </p>

            <p class="w3-center">
                <button type="submit" id="btnConfrim" class="button-smartform2">&nbsp;Submit&nbsp;</button>
                <br>
                <br>
            </p>
        </div>
    </form>

    

</body>

</html>