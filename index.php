<?php 
/*
    * This source code was submitted by B.Alan Christofer to Codechef development team
    * Distribution of this source code without permission is illegal
    * To claim a valid licence, please contact copyright@webxspark.com for more info
*/
require_once './required/functions.php';
$App = new webxspark;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Geolocation App</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
    <!-- DuDialogAlert -->
    <link rel="stylesheet" href="https://cdn.webxspark.com/plugins/css/duDialog.min.css">
</head>
</head>

<body>
    <!--Main Navigation-->
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" target="_blank" href="https://webxspark.com/">
                    <img src="https://webxspark.com/assets/images/header_logo-2.png" height="30" alt="" loading="lazy"
                        style="margin-top: -3px;" />
                </a>
            </div>
        </nav>

        <div id="intro" class="p-5 text-center"></div>
    </header>
    <!--Main Navigation-->

    <!--Main-->
    <main class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <!--Section-->
                    <section class="hero">
                        <div class="text-start">
                            <h1 class="hero-heading">IP Geolocation API</h1>
                            <div class="hero-text-box">
                                <p>Get the location of any IP with a world-class API<br> serving city, region, country
                                    and lat/long data.</p>
                            </div>
                            <div class="hero-text-box">
                                <button class="btn btn-primary btn-lg" try>Try It Out</button>
                            </div>
                        </div>
                    </section>
                    <!--Section-->
                </div>

                <div class="col-md-6 mb-4">
                    <section>
                        <section class="text-center pb-4 mb-4 fw-bold">
                            <i class="fa fa-arrow-down"></i>
                            Try it for free
                            <i class="fa fa-arrow-down"></i>
                        </section>
                        <div class="card search-box">
                            <div class="card-body">
                                <form method="POST">
                                    <div class="input-group">
                                        <input name="ip" type="search" class="form-control rounded" placeholder="IP Address" value="<?php echo $App::fetchIP(); ?>" />
                                        <button type="submit" class="btn btn-primary">Locate</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr class="hr">
                        <section>
                            <div class="card">
                                <div class="card-body">
                                    <div class="ip-details">
                                        <div class="ip-details-content">
                                            <status></status>
                                            <div class="pre-data"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <!--Main-->

    <!-- JQuery Plugin -->
    <script src="https://cdn.webxspark.com/plugins/js/query.min.js"></script>
    <!-- Wxp.js Plugin -->
    <script src="https://cdn.webxspark.com/libraries/dev/wxp.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <!-- DuDialogAlert -->
    <script src="https://cdn.webxspark.com/plugins/js/duDialog.min.js"></script>
    <!-- Custom Javascript -->
    <script src="./assets/js/app.js"></script>
</body>

</html>