<?php
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="hoved.css" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">

</head>


<body>

        <body class="drawer drawer--left">
                <header role="banner">
                  <button type="button" class="drawer-toggle drawer-hamburger">
                    <span class="sr-only">toggle navigation</span>
                    <span class="drawer-hamburger-icon"></span>
                  </button>
                  <nav class="drawer-nav" role="navigation">
                    <ul class="drawer-menu">
                      <li><a class="drawer-brand" href="#">Brand</a></li>
                      <li><a class="drawer-menu-item" href="#">Coming soon</a></li>
                      <li><a class="drawer-menu-item" href="#">Coming soon</a></li>
                    </ul>
                  </nav>
                </header>
                <main role="main">
                  <!-- Page content -->
                </main>
              </body>

    <header>

            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">CopenShop</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" id="searchButton1">Link</a>
                        </li>
                        
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
                      </form>
                    </div>
            </nav>
            


    </header>

    <main role="main">
        <br><br>
        <section class="jumbotron py-9 m-0 text-center" id = "jum">
                <div class="container">
                    <h1 class="jumbotron-heading">Welcome to CopenShop</h1>
                    <p class="lead text-muted">Welcome to our online store! Our team is proud to announce that we're now open for business, 
                        and we look forward to serving you all in the future.
                         If you have any questions about this store or the products found within,
                          please don't hesitate to contact us any time.</p>
                    <p>
                    <a href="about.php" class="btn btn-primary my-2">About us</a>
                    </p>
                    <!--<button type="button" class="btn drawer-toggle">Drawer toggle</button>-->

                </div>
        </section>



        <div class="album py-5 bg-light">
            <div class="container">
    
                <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow" id="card1">
                    <img class="card-img-top zoom" src="rsc_shop/Kettel.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting
                             text below as a natural lead-in to additional content.
                              This content is a little bit longer.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a class="viewbtn" href="view.php" id = "Kettel2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                View
                            </button>
                            </a>
                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                        </div>
                        <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="rsc_shop/Plant.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                             <a class = "viewbtn" href="view.php" id = "Plant2">
                            <button type="button" class="btn btn-sm btn-outline-secondary " >
                               View
                            </button>
                            </a> 
                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                        </div>
                        <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="rsc_shop/Whale_Card.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                             <a class = "viewbtn" href="view.php" id = "whale_card2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                   View

                                </button>
                                </a> 
                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                        </div>
                        <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="rsc_shop/Lamp.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                              <a class="viewbtn" href="view.php" id = "Lamp2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                  View

                                </button>
                                </a>
                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                        </div>
                        <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="rsc_shop/Pot.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a class="viewbtn" href="view.php" id = "Pot2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                               View

                                </button>
                                </a>
                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                        </div>
                        <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                    </div>
                </div>
               
    </main>

    <script 
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="hoved.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
</body>


</html>