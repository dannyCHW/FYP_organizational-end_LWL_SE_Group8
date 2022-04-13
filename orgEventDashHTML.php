<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Smart Form</title>
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico" />
    <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
    <!-- Use Bootstrap 5.1 to avoid dropdown input bugs -->
    <script src="plugins/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <!-- Used non-minified Bootstrap CSS stylesheet -->
    <link rel="stylesheet" href="plugins/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/orgDash.css">
    <script src="js/main.js"></script>
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <link href="plugins/material-design-icons-3.0.1/iconfont/material-icons.css" rel="stylesheet">

    <script>
      $(document).ready(function() {



      });
    </script>
</head>

<body class="theme-bg-color4">

    <a id="scroll" style="display: none;"><span></span></a>

    <!-- nav -->
    <?php include 'checkSession/orgUserCheckSession.php'; ?>
    <?php include 'format/orgTopBar.php'; ?>
    <?php include 'orgGetEventValue.php'; ?>
    <!-- nav end -->

    <nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ms-4 mx-4">
            <h1 class="h2 theme-color9 theme-bg-color8 addRadiusBorder2 addSurroundedPadding3" ><?php include 'orgDashBoxHTML/heading.php'; ?></h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm noBorder theme-color8 btn-smartform3" id="exportBtn">
                        <span style="padding:10px;"class="material-icons inline_icon" id="kpiBtn"></span>
                        Export Event Report
                    </button>

                    <button style="padding:10px;" type="button" class="btn btn-sm noBorder theme-color8 btn-smartform3" id="dropdownMenuButton2">
                        Export KPI Month Report
                    </button>
                </div>
            </div>
        </div>

        <div class="nav nav-tabs theme-bg-color8 footerRadiusBorder d-flex justify-content-center" id="nav-dashboard-tab" role="tablist">
            <button class="nav-link active theme-color6" style="border-radius: 1rem 1rem 0rem 0rem;" id="nav-dashboard-tab" data-bs-toggle="tab"
                data-bs-target="#nav-dashboard" type="button" role="tab" aria-controls="nav-dashboard"
                aria-selected="false" onfocus="navTabsNowFocus(this);"><span class="material-icons inline_icon">Dashboard</span></button>
        </div>
    </nav>







    <div class="tab-content theme-bg-color8 theme-color6 navbarRadiusBorder addShadow" id="nav-tabContent">

        <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel" aria-labelledby="nav-dashboard-tab">

            <main class="main-content">
                <div class="container-fluid py-4">

                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                  <?php include 'orgDashBoxHTML/dashtop1.php'; ?>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                  <?php include 'orgDashBoxHTML/dashtop2.php'; ?>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Applicants</p>
                                                <h5 class="font-weight-bolder">
                                                    4000
                                                </h5>
                                                <p class="mb-0">
                                                    <span class="text-success text-sm font-weight-bolder">+40%</span>
                                                    since last quarter
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div>
                                                <span class="material-icons">people</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Approvals</p>
                                                <h5 class="font-weight-bolder">
                                                    1000
                                                </h5>
                                                <p class="mb-0">
                                                    <span class="text-danger text-sm font-weight-bolder">-10%</span>
                                                    than last month
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div>
                                                <span class="material-icons">check_box</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-4">
                      <?php include 'orgDashBoxHTML/applicantDetail.php'; ?>
                        <div class="col-lg-5">
                            <!-- chart -->
                            <div class="card card-carousel overflow-hidden h-100 p-0">
                                <div id="piechart"></div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <div class="card ">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-2"><span class="material-icons inline_icon">info</span> Other Information</h6>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center ">
                                        <tbody>
                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Applicant Type:</p>
                                                            <h6 class="text-sm mb-0">Elderly</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Applicants:</p>
                                                        <h6 class="text-sm mb-0">3000</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Involed Amount:</p>
                                                        <h6 class="text-sm mb-0">$430,900</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Approval Rate:</p>
                                                        <h6 class="text-sm mb-0">79.9%</h6>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Applicant Type:</p>
                                                            <h6 class="text-sm mb-0">Low educated people</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Applicants:</p>
                                                        <h6 class="text-sm mb-0">1500</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Involed Amount:</p>
                                                        <h6 class="text-sm mb-0">$230,900</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Approval Rate:</p>
                                                        <h6 class="text-sm mb-0">70.9%</h6>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Applicant Type:</p>
                                                            <h6 class="text-sm mb-0">New immigrants</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Applicants:</p>
                                                        <h6 class="text-sm mb-0">500</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Involed Amount:</p>
                                                        <h6 class="text-sm mb-0">$90,900</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Approval Rate:</p>
                                                        <h6 class="text-sm mb-0">69.9%</h6>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Applicant Type:</p>
                                                            <h6 class="text-sm mb-0">Minorities</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Applicants:</p>
                                                        <h6 class="text-sm mb-0">500</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Involed Amount:</p>
                                                        <h6 class="text-sm mb-0">$90,900</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Approval Rate:</p>
                                                        <h6 class="text-sm mb-0">59.9%</h6>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </main>

            <div class="text-center small bg-secondary theme-color8">- End of Report -</div>

        </div>

        <div class="tab-pane fade" id="nav-application" role="tabpanel" aria-labelledby="nav-application-tab">
            <ol class="list-group list-group-numbered">
                <header>
                    <div class="bg-warning py-2 d-flex justify-content-start">
                        <div class="fw-bold ms-2"><span class="badge bg-primary rounded-pill"
                                id="numberOfNewApplication">#</span> New applications found</div>
                    </div>

                    <nav id="navbar_top" class="navbar navbar-expand-lg theme-bg-color9 theme-color8 d-flex justify-content-between">
                        <div class="col-sm-2 px-4 me-auto">
                            <h6>Applicant Snapshots</h6>
                        </div>
                        <div class="col-sm-2 ms-auto">
                            <h6 class="text-end px-4">Submission Date</h6>
                        </div>
                    </nav>
                </header>

                <!-- Add application row -->
                <ul><div id="applicationList"></div></ul>
            </ol>

            <div class="text-center small bg-secondary theme-color8 willAppearWhenSrollTo">- End of Report -</div>
        </div>

        <div class="tab-pane fade d-flex justify-content-center" id="nav-view" role="tabpanel"
            aria-labelledby="nav-view-tab">
            <!-- Add form view -->
            <div id="thisFormView"></div>
        </div>
    </div>




























    <div class="addResponsiveHeight"></div>
    <div class="addResponsiveHeight"></div>

    <!-- footer -->
    <div class="theme-bg-color8 theme-color6 footerRadiusBorder addShadow">
        <small>
            <div class="px-4 py-3">
                <div class="row g-4 py-4 row-cols-1 row-cols-lg-2">
                    <div class="col d-flex justify-content-center">
                        <form>
                            <h5 class="pb-2 border-bottom"><b>Contact Us</b></h5>
                            <br>
                            <div class="row row-cols-2 d-flex justify-content-start">
                                <div class="col-4">
                                    <p><span class="material-icons inline_icon"
                                            style="vertical-align: top;">phone</span> Phone</p>
                                    <p><span class="material-icons inline_icon" style="vertical-align: top;">mail</span>
                                        Email</p>
                                </div>
                                <div class="col-5">
                                    <p>+852 0000 0000</p>
                                    <p>cs@xxxxxxxxx.com</p>
                                </div>
                            </div>
                            <small>Need service or support? Start your request now and we’ll find you a
                                solution.</small>
                        </form>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <form action="#" class="needs-validation">
                            <h5 class="pb-2 border-bottom"><b>Subscribe to our newsletter</b></h5>
                            <br>
                            <p>Monthly digest of whats new and exciting from us.</p>
                            <div class="row">
                                <div class="col">
                                    <input id="newsletter1" type="email" class="form-control dimmer addShadow"
                                        style="border-color: #d3ac9c; min-width: 20vw;" placeholder="Email address"
                                        required>
                                </div>
                                <div class="col">
                                    <button id="emailSubcribeBtn"
                                        class="btn btn-primary btn-smartform3 showSubscription" type="submit"><span
                                            class="material-icons inline_icon">send</span> Subscribe</button>
                                </div>
                            </div>
                            <small>We’ll never share your email address with a third-party. </small>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom theme-bg-color3 theme-color8 footerRadiusBorder">
                <div class="px-4 py-3">
                    <div class="row g-4 py-4 row-cols-2 row-cols-lg-3">
                        <div class="col">
                            <h5 class="title d-flex justify-content-center">Smart Form</h5>
                            <div class="py-4 d-flex justify-content-center">
                                <ul class="list-unstyled">
                                    <li> <a href="index.html">Index</a></li>
                                    <li> <a href="#">About Us</a></li>
                                    <li> <a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="title d-flex justify-content-center">Your Form</h5>
                            <div class="py-4 d-flex justify-content-center">
                                <ul class="list-unstyled">
                                    <li> <a href="overview.html">Overview</a></li>
                                    <li> <a href="createform.html">Create Form</a></li>
                                    <li> <a href="#">Guide</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="title d-flex justify-content-center">Account</h5>
                            <div class="py-4 d-flex justify-content-center">
                                <ul class="list-unstyled">
                                    <li> <a href="#">Profile</a></li>
                                    <li> <a href="signin.html">Sign In</a></li>
                                    <li> <a href="signup.html">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <hr>
                        <small>
                            <p>
                                <span class="text-muted">Copyright &copy;
                                    <script>document.write(new Date().getFullYear())</script> XXXXX XXXX Limited. All
                                    rights reserved.
                                </span>
                                <span class="addPaddingLeft">Privacy Policy - <a href="#"
                                        onclick="openNewWindow_tc();">Terms and Conditions</a></span>
                            </p>
                        </small>
                    </div>
                </div>
            </div>
        </small>
    </div>
    <!-- footer end -->
</body>

<!-- Add application row -->
<script id="addApplicationRow" type="text/template">
    <li class="list-group-item willAppearWhenSrollTo">
        <a class="dropdown-item d-flex justify-content-between justify-content-start">
            <div>
                <table>
                    <tr>
                        <td>
                            <div class="fw-bold">
                                CHAN Tai Man <span class="badge bg-primary rounded-pill">New Applicant</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="list-group-item list-group-item-action">View this application</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <span class="badge bg-secondary rounded-pill">04/07/2022</span>
            </div>
        </a>
    </li>
    <li class="list-group-item willAppearWhenSrollTo">
        <a class="dropdown-item d-flex justify-content-between justify-content-start">
            <div>
                <table>
                    <tr>
                        <td>
                            <div class="fw-bold">
                                CHEUNG Tai Tai <span class="badge theme-bg-color9 rounded-pill">Old Applicant</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="list-group-item list-group-item-action">View this application</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <span class="badge bg-secondary rounded-pill">04/07/2022</span>
            </div>
        </a>
    </li>
</script>

<!-- Add form view -->
<script id="thisFormViewBody" type="text/template">
    <div>
        <h2></h2>
            <section>
                <div class="inner addRadiusBorder">
                    <div class="form-content">
                        <div class="form-header">
                            <img alt="" class="banner-smartform3">
                            <h3 class="theme-color2 form-title">
                                <div class="row">
                                    <div class="col-3 mobile_width100"><span class="material-icons"
                                            style="font-size: 100%; vertical-align: text-bottom;">view_list</span>
                                    </div>
                                    <div class="col-6 mobile_width100">Welfare Information</div>
                                </div>
                            </h3>
                        </div>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2 ">
                                <p class="text-start form-color addPaddingLeft nowrap">*Name</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <input type="text" id="v0_check" placeholder="Welfare Name"
                                    class="form-control form-bg-color dimmer addShadow" disabled>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2 ">
                                <p class="text-start form-color addPaddingLeft nowrap">Introduction</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <textarea name="" id="v1_check" placeholder="Summary 50 words"
                                    style="min-height: 100px;" class="form-control form-bg-color dimmer addShadow"
                                    disabled></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2 ">
                                <p class="text-start form-color addPaddingLeft nowrap">Welfare Website</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <input type="url" id="v2_check" placeholder="URL"
                                    class="form-control form-bg-color dimmer addShadow" pattern="https?://.+" disabled>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2 ">
                                <p class="text-start form-color addPaddingLeft nowrap">Welfare Requirements</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <input type="text" id="v3_check" placeholder="Target audience"
                                    class="form-control form-bg-color dimmer addShadow" disabled>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2 ">
                                <p class="text-start form-color addPaddingLeft nowrap">Age Limit</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <input type="number" placeholder="Age" id="v4_check"
                                    class="form-control form-bg-color dimmer addShadow" min="0" max="200" disabled>
                                <div class="addPaddingLeft">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="v5_check" disabled>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            or after
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="v6_check" disabled>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            or under
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <label class="col-2 col-form-label form-color addPaddingLeft nowrap">*Apply Date</label>
                            <div class="col-2">
                                <input type="date" class="form-control form-bg-color dimmer addShadow" id="v7_check"
                                    style="max-width: 10.5rem; min-width: 10.5rem;" disabled>
                            </div>
                            <div class="col-1"></div>
                            <label class="col-2 col-form-label form-color addPaddingLeft nowrap">Deadline Date</label>
                            <div class="col-2">
                                <input type="date" class="form-control form-bg-color dimmer addShadow" id="v8_check"
                                    style="max-width: 10.5rem; min-width: 10.5rem;" disabled>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <label class="col-2 col-form-label form-color addPaddingLeft nowrap">Distribution
                                Date</label>
                            <div class="col-2">
                                <input type="date" class="form-control form-bg-color dimmer addShadow" id="v9_check"
                                    style="max-width: 10.5rem; min-width: 10.5rem;" disabled>
                            </div>
                            <div class="col-1"></div>
                            <label class="col-2 col-form-label form-color addPaddingLeft nowrap">End Date</label>
                            <div class="col-2">
                                <input type="date" class="form-control form-bg-color dimmer addShadow" id="v10_check"
                                    style="max-width: 10.5rem; min-width: 10.5rem;" disabled>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2 ">
                                <p class="text-start form-color addPaddingLeft nowrap">The amount involved</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <input type="number" id="v11_check" placeholder="HK$"
                                    class="form-control form-bg-color dimmer addShadow" disabled>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2 ">
                                <p class="text-start form-color addPaddingLeft nowrap">*Privacy Policy & Disclaimer</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <textarea name="" id="v12_check" class="form-control form-bg-color dimmer addShadow"
                                    style="min-height: 100px;" disabled></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2 ">
                                <p class="text-start form-color addPaddingLeft nowrap">Promotional Corner<br><small>(to
                                        Applicant)</small></p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <textarea name="" id="v13_check" placeholder="Welcome, Thank you, etc"
                                    class="form-control form-bg-color dimmer addShadow" style="min-height: 100px;"
                                    disabled></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2 ">
                                <p class="text-start form-color addPaddingLeft nowrap">Supplementary Information<br><small>(to
                                        Smart Form)</small></p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <textarea name="" id="v14_check" class="form-control form-bg-color dimmer addShadow"
                                    style="min-height: 100px;" disabled></textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <label class="col-2 col-form-label form-color addPaddingLeft nowrap">Poster/Banner<br>
                                <p class="fw-lighter">Attachment</p>
                            </label>
                            <div class="form-holder">
                                <div class="" style="min-width: 20vw;">
                                    <input type="text" class="form-control form-bg-color dimmer addShadow" id="v15_check"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                        style="max-width: 15.5rem; min-width: 15.5rem; z-index: 0;" disabled>
                                    <!-- <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button> -->
                                </div>
                            </div>
                            <label class="col-2 col-form-label form-color addPaddingLeft nowrap">*Logo<br>
                                <p class="fw-lighter">Attachment</p>
                            </label>
                            <div class="form-holder">
                                <div class="" style="min-width: 20vw;">
                                    <input type="text" class="form-control form-bg-color dimmer addShadow" id="v16_check"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                        style="max-width: 15.5rem; min-width: 15.5rem; z-index: 0;" disabled>
                                    <!-- <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button> -->
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="addResponsiveHeight3"></div>
                        <!-- Section 3 2nd part -->
                        <div class="form-header">
                            <img alt="" class="banner-smartform2">
                            <h3 class="theme-color2 form-title">
                                <div class="row">
                                    <div class="col-3 mobile_width100"><span class="material-icons"
                                            style="font-size: 100%; vertical-align: text-bottom;">view_list</span></div>
                                    <div class="col-6 mobile_width100">Question Setting</div>
                                </div>
                            </h3>
                        </div>
                        <div class="recipe">
                            <br>
                            <div class="addPaddingLeft">
                                <div class="row">
                                    <p class="text-start form-color">Basic Information</p>
                                </div>
                                <div class="row g-3 py-2 row-cols-2 row-cols-lg-3">
                                     <div class="col">
                                        <label class="form-check-label nowrap">
                                            <input class="form-check-input form-bg-color" type="checkbox" value=""
                                            id="b0_check" checked disabled>
                                            HKID number
                                        </label>
                                     </div>
                                     <div class="col">
                                        <label class="form-check-label nowrap">
                                            <input class="form-check-input form-bg-color" type="checkbox" value=""
                                            id="b1_check" checked disabled>
                                            English name
                                        </label>
                                     </div>
                                     <div class="col">
                                        <label class="form-check-label nowrap">
                                            <input class="form-check-input form-bg-color" type="checkbox" value=""
                                            id="b2_check" checked disabled>
                                            Chinese name
                                        </label>
                                     </div>
                                </div>
                                <div class="row g-3 py-2 row-cols-2 row-cols-lg-3">
                                     <div class="col">
                                        <label class="form-check-label nowrap">
                                            <input class="form-check-input form-bg-color" type="checkbox" value=""
                                            id="b3_check" checked disabled>
                                            Birthday
                                        </label>
                                     </div>
                                     <div class="col">
                                        <label class="form-check-label nowrap">
                                            <input class="form-check-input form-bg-color" type="checkbox" value=""
                                            id="b4_check" checked disabled>
                                            Gender
                                        </label>
                                     </div>
                                </div>
                            </div>

                            <br>
                            <div class="d-flex justify-content-center">
                                <div class="recipe__ingredients">
                                    <table cellpadding="0" cellspacing="0" class="recipe-table" id="recipeTable">
                                        <tbody id="recipeTableBody2">
                                            <tr id="tr0_check">
                                                <td class="addSurroundedPadding">
                                                    <span>
                                                        <select
                                                            class="form-control form-select form-select-sm form-item-focus2 form-bg-color dimmer  tr0_check input_minHeight"
                                                            id="arraySelect_check" onchange="" disabled>
                                                            <option value="" selected hidden>Unselected</option>
                                                            <option value="0">Option</option>
                                                            <option value="1">Yes/No</option>
                                                            <option value="2">Short Answer</option>
                                                            <option value="3">Multiple Choice</option>
                                                            <option value="4">Correspondence Address</option>
                                                            <option value="5">Email Address</option>
                                                            <option value="6">Phone Number</option>
                                                            <option value="7">Name</option>
                                                            <option value="8">Nationality</option>
                                                            <option value="9">Birthday</option>
                                                            <option value="10">HKID/Passport Number</option>
                                                            <option value="11">Employment</option>
                                                            <option value="12">Marriage</option>
                                                            <option value="13">Amount</option>
                                                            <option value="14">Gender</option>
                                                            <option value="15">Signature</option>
                                                            <option value="16">Date</option>
                                                            <option value="17">Number</option>
                                                            <option value="18">District</option>
                                                            <option value="19">Checkbox</option>
                                                        </select>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr0_check input_minHeight"
                                                            id="textarea_check" rows="1" placeholder="Question "
                                                            disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr0_check input_minHeight"
                                                            id="2textarea_check" rows="1"
                                                            placeholder="Description " disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <div id="arrayInput_check"></div>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr id="tr1_check">
                                                <td class="addSurroundedPadding">
                                                    <span>
                                                        <select
                                                            class="form-control form-select form-select-sm form-item-focus2 form-bg-color dimmer  tr1_check input_minHeight"
                                                            id="arraySelect2_check" onchange="" disabled>
                                                            <option value="" selected hidden>Unselected</option>
                                                            <option value="0">Option</option>
                                                            <option value="1">Yes/No</option>
                                                            <option value="2">Short Answer</option>
                                                            <option value="3">Multiple Choice</option>
                                                            <option value="4">Correspondence Address</option>
                                                            <option value="5">Email Address</option>
                                                            <option value="6">Phone Number</option>
                                                            <option value="7">Name</option>
                                                            <option value="8">Nationality</option>
                                                            <option value="9">Birthday</option>
                                                            <option value="10">HKID/Passport Number</option>
                                                            <option value="11">Employment</option>
                                                            <option value="12">Marriage</option>
                                                            <option value="13">Amount</option>
                                                            <option value="14">Gender</option>
                                                            <option value="15">Signature</option>
                                                            <option value="16">Date</option>
                                                            <option value="17">Number</option>
                                                            <option value="18">District</option>
                                                            <option value="19">Checkbox</option>
                                                        </select>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm  form-item-focus form-bg-color dimmer  tr1_check input_minHeight"
                                                            id="textarea2_check" rows="1" placeholder="Question "
                                                            disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr1_check input_minHeight"
                                                            id="2textarea2_check" rows="1"
                                                            placeholder="Description " disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <div id="arrayInput2_check"></div>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr id="tr2_check">
                                                <td class="addSurroundedPadding">
                                                    <span>
                                                        <select
                                                            class="form-control form-select form-select-sm form-item-focus2 form-bg-color dimmer  tr2_check input_minHeight"
                                                            id="arraySelect3_check" onchange="" disabled>
                                                            <option value="" selected hidden>Unselected</option>
                                                            <option value="0">Option</option>
                                                            <option value="1">Yes/No</option>
                                                            <option value="2">Short Answer</option>
                                                            <option value="3">Multiple Choice</option>
                                                            <option value="4">Correspondence Address</option>
                                                            <option value="5">Email Address</option>
                                                            <option value="6">Phone Number</option>
                                                            <option value="7">Name</option>
                                                            <option value="8">Nationality</option>
                                                            <option value="9">Birthday</option>
                                                            <option value="10">HKID/Passport Number</option>
                                                            <option value="11">Employment</option>
                                                            <option value="12">Marriage</option>
                                                            <option value="13">Amount</option>
                                                            <option value="14">Gender</option>
                                                            <option value="15">Signature</option>
                                                            <option value="16">Date</option>
                                                            <option value="17">Number</option>
                                                            <option value="18">District</option>
                                                            <option value="19">Checkbox</option>
                                                        </select>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr2_check input_minHeight"
                                                            id="textarea3_check" rows="1" placeholder="Question "
                                                            disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr2_check input_minHeight"
                                                            id="2textarea3_check" rows="1"
                                                            placeholder="Description " disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <div id="arrayInput3_check"></div>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr id="tr3_check">
                                                <td class="addSurroundedPadding">
                                                    <span>
                                                        <select
                                                            class="form-control form-select form-select-sm form-item-focus2 form-bg-color dimmer  tr3_check input_minHeight"
                                                            id="arraySelect4_check" onchange="" disabled>
                                                            <option value="" selected hidden>Unselected</option>
                                                            <option value="0">Option</option>
                                                            <option value="1">Yes/No</option>
                                                            <option value="2">Short Answer</option>
                                                            <option value="3">Multiple Choice</option>
                                                            <option value="4">Correspondence Address</option>
                                                            <option value="5">Email Address</option>
                                                            <option value="6">Phone Number</option>
                                                            <option value="7">Name</option>
                                                            <option value="8">Nationality</option>
                                                            <option value="9">Birthday</option>
                                                            <option value="10">HKID/Passport Number</option>
                                                            <option value="11">Employment</option>
                                                            <option value="12">Marriage</option>
                                                            <option value="13">Amount</option>
                                                            <option value="14">Gender</option>
                                                            <option value="15">Signature</option>
                                                            <option value="16">Date</option>
                                                            <option value="17">Number</option>
                                                            <option value="18">District</option>
                                                            <option value="19">Checkbox</option>
                                                        </select>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr3_check input_minHeight"
                                                            id="textarea4_check" rows="1" placeholder="Question "
                                                            disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr3_check input_minHeight"
                                                            id="2textarea4_check" rows="1"
                                                            placeholder="Description " disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <div id="arrayInput4_check"></div>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr id="tr4_check">
                                                <td class="addSurroundedPadding">
                                                    <span>
                                                        <select
                                                            class="form-control form-select form-select-sm form-item-focus2 form-bg-color dimmer  tr4_check input_minHeight"
                                                            id="arraySelect5_check" onchange="" disabled>
                                                            <option value="" selected hidden>Unselected</option>
                                                            <option value="0">Option</option>
                                                            <option value="1">Yes/No</option>
                                                            <option value="2">Short Answer</option>
                                                            <option value="3">Multiple Choice</option>
                                                            <option value="4">Correspondence Address</option>
                                                            <option value="5">Email Address</option>
                                                            <option value="6">Phone Number</option>
                                                            <option value="7">Name</option>
                                                            <option value="8">Nationality</option>
                                                            <option value="9">Birthday</option>
                                                            <option value="10">HKID/Passport Number</option>
                                                            <option value="11">Employment</option>
                                                            <option value="12">Marriage</option>
                                                            <option value="13">Amount</option>
                                                            <option value="14">Gender</option>
                                                            <option value="15">Signature</option>
                                                            <option value="16">Date</option>
                                                            <option value="17">Number</option>
                                                            <option value="18">District</option>
                                                            <option value="19">Checkbox</option>
                                                        </select>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr4_check input_minHeight"
                                                            id="textarea5_check" rows="1" placeholder="Question "
                                                            disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr4_check input_minHeight"
                                                            id="2textarea5_check" rows="1"
                                                            placeholder="Description " disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <div id="arrayInput5_check"></div>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr id="tr5_check">
                                                <td class="addSurroundedPadding">
                                                    <span>
                                                        <select
                                                            class="form-control form-select form-select-sm form-item-focus2 form-bg-color dimmer  tr5_check input_minHeight"
                                                            id="arraySelect6_check" onchange="" disabled>
                                                            <option value="" selected hidden>Unselected</option>
                                                            <option value="0">Option</option>
                                                            <option value="1">Yes/No</option>
                                                            <option value="2">Short Answer</option>
                                                            <option value="3">Multiple Choice</option>
                                                            <option value="4">Correspondence Address</option>
                                                            <option value="5">Email Address</option>
                                                            <option value="6">Phone Number</option>
                                                            <option value="7">Name</option>
                                                            <option value="8">Nationality</option>
                                                            <option value="9">Birthday</option>
                                                            <option value="10">HKID/Passport Number</option>
                                                            <option value="11">Employment</option>
                                                            <option value="12">Marriage</option>
                                                            <option value="13">Amount</option>
                                                            <option value="14">Gender</option>
                                                            <option value="15">Signature</option>
                                                            <option value="16">Date</option>
                                                            <option value="17">Number</option>
                                                            <option value="18">District</option>
                                                            <option value="19">Checkbox</option>
                                                        </select>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr5_check input_minHeight"
                                                            id="textarea6_check" rows="1" placeholder="Question "
                                                            disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <textarea
                                                            class="form-control form-control-sm form-item-focus form-bg-color dimmer  tr5_check input_minHeight"
                                                            id="2textarea6_check" rows="1"
                                                            placeholder="Description " disabled></textarea>
                                                    </span>
                                                    <span>
                                                        <div id="arrayInput6_check"></div>
                                                    </span>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="text-center small bg-secondary theme-color8">- End of Report -</div>
                        </div>
                    </form>
                </div>
        </section>
    </div>
</script>

<script>
    $(document).ready(function () {
        // Add application row
        var htmlString = $('#addApplicationRow').html();
        var times = 20;
        for (let i = 0; i < times; i++){
            $('#applicationList').append(htmlString);
        }

        // Update application list count for indexing
        function updateApplicationListCountForIndexing() {
            document.getElementById('numberOfNewApplication').innerHTML = document.getElementById('applicationList').getElementsByTagName('li').length;
        };
        updateApplicationListCountForIndexing();
    });

    // Add form view
    var count = 0;
    function navTabsNowFocus(thisObj){
        var htmlString2 = $('#thisFormViewBody').html();
        if (thisObj.id == 'nav-view-tab' && count <= 0){
            $('#thisFormView').append(htmlString2);
            count++;
        } else {
            if (document.getElementById('thisFormView').getElementsByTagName('div')[0] != null) {
                document.getElementById('thisFormView').getElementsByTagName('div')[0].remove();
            }
            count--;
        }
    }

    // DOMContentLoaded
    var thisFormViewIsFocusing = false;
    document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener('scroll', function () {
                if ($('#nav-application-tab').is(':focus')) {
                    thisFormViewIsFocusing = true;
                } else if ($('#nav-view-tab').is(':focus') || $('#nav-dashboard-tab').is(':focus')) {
                    thisFormViewIsFocusing = false;
                }
            if (window.scrollY > 265 && thisFormViewIsFocusing == true) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.getElementById('navbar_top').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
</script>

<!-- chart -->
<script type="text/javascript" src="js/gstatic_charts_loader.js"></script>
<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ['Applicant Type', '%'],
      ['Elderly', 70],
      ['Low educated people', 20],
      ['New immigrants', 5],
      ['Minorities', 5]
    ]);

      // Optional; add a title and set the width and height of the chart
      var options = {'title':'Applicants', 'width':400, 'height':400};

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
</script>

<link rel="stylesheet" href="plugins/material-design-iconic-font/css/material-design-iconic-font.css">
<link rel="stylesheet" href="css/createform_form.css">
<script src="js/Sortable.js"></script>

</html>
