<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Form - Form</title>
  <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico" />
  <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
  <script src="plugins/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="plugins/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body style="background-color: #eee8e5;">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

  <!-- main body -->
  <main>
    <div class="center">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Get started</h1>
            <p class="fs-5 col-md-8">Quickly and easily get started with Smart Form.</p>
            <div class="mb-5">
              <a href="createformHTML.php" class="btn btn-primary btn-lg px-4" style="background-color: #987468;">Create
                Your
                Welfare</a>
            </div>
          </div>
          <div class="col">
            <img src="img/typewriter.svg" alt="" height="250vw">
          </div>
        </div>
      </div>

      <hr class="col-3 col-md-2 mb-5">

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <a href="#" class="column col-xs-6" id="sepia">
                  <img src="img/oldAgeLivingAllowance.png" alt="" width="100%" height="100%">
                </a>
                <div class="card-body">
                  <p class="card-text">Old Age Living Allowance</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">Last modified by Cyrus on DEC 2</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <a href="#" class="column col-xs-6" id="sepia">
                  <img src="img/010531200095mkopyABED.jpeg" alt="" width="100%" height="100%">
                </a>
                <div class="card-body">
                  <p class="card-text">Senior Citizen Card</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">Last modified by Cyrus on DEC 2</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em">Thumbnail</text>
                </svg>
                <div class="card-body">
                  <p class="card-text">Smart Form Welfare</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">Last modified by Cyrus on DEC 2</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em">Thumbnail</text>
                </svg>
                <div class="card-body">
                  <p class="card-text">Smart Form Welfare</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">Last modified by Cyrus on DEC 2</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em">Thumbnail</text>
                </svg>
                <div class="card-body">
                  <p class="card-text">Smart Form Welfare</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">Last modified by Cyrus on DEC 2</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em">Thumbnail</text>
                </svg>
                <div class="card-body">
                  <p class="card-text">Smart Form Welfare</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">Last modified by Cyrus on DEC 2</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em">Thumbnail</text>
                </svg>
                <div class="card-body">
                  <p class="card-text">Smart Form Welfare</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">Last modified by Cyrus on DEC 2</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em">Thumbnail</text>
                </svg>
                <div class="card-body">
                  <p class="card-text">Smart Form Welfare</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">Last modified by Cyrus on DEC 2</small>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </main>
  <!-- main body end -->

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

</html>