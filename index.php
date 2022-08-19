<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>epdx</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/mystyles.css" rel="stylesheet"/>

        <?php echo "hello world";  ?>
    </head>
    <body class = "bg-black">
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">epdx</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">submit</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">saves</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
          <!-- today's events -->
          <!-- <h2 class="font-weight-light text-light">
            <a class="btn btn-primary" data-toggle="collapse" href="#collapse_day" role="button" aria-expanded="false" aria-controls="collapse_day">
              today's events
            </a>
          </h2> -->
          <!-- <div class="collapse" id="collapse_day">
        </div> -->
          <!-- this month's events -->
          <!-- <h2 class="font-weight-light text-light">
            <a class="btn btn-primary" data-toggle="collapse" href="#collapse_month" role="button" aria-expanded="false" aria-controls="collapse_month">
              events by month
            </a>
          </h2> -->
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-2">
                <div class="col-lg-7"><img class="img-fluid rounded mb-lg-0" src="./assets/epdx_logo.png" alt="..." /></div>
                <div class="collapse mb-5" id="collapse_month">
                </div>
                <div class="col-lg-5 text-success">
                    <h1 class="font-weight-light text-light">epdx.io</h1>
                    welcome to epdx.io! epdx is a centralized place to
                    publish and find out about everything electronic music
                    happening here in portland. happy dancing.
                    <a class="btn btn-primary" href="#!">Got an event? submit here!</a>
                </div>
            </div>
          </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; EPDX 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
