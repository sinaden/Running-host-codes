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
    <link rel="stylesheet" href="drawer.css" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">




</head>


<body>
    <div class="drawer drawer--right"  id="drawerRight11">
        <header role="banner">
            
            
            
            
          <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
          </button>
          <nav class="drawer-nav" role="navigation">
            <ul class="drawer-menu">
              
              <div class="container">
                  <br><br><br><br>
                  <h2> Coming Soon </h2>
              <?php
                $sql = "SELECT * FROM users;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // echo "<div class=\"container\" id=\"BasketItem\">";
                        echo $row['user_uid']."<br>";
                        echo "<br>";
                        echo "_______________________________________________________ <br>";
                        // echo "</div>";
                    }
                }
                ?>
                </div>
            </ul>
            
          </nav>
        </header>
        <main role="main">
          <!-- Page content -->
        </main>
    </div>

    <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">CopenShop</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Pricing</a>
                        </li>
                      </ul>
                      <span class="navbar-text">  

                            <button class="btn btn-outline-success p-0 my-0 drawer-toggle" type="button" id="basket-button">
                                    <img src="rsc_shop/basket2.png" alt="">

                                </div>
                                    </div>
                                    </li>
                                </button>
                      </span>
                    </div>
                  </nav>

    </header>



    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" id = "view_box">
            <div class="col-6 p-5 ml-5 my-5 boxy">
                    <h1 class="display-4 font-weight-normal"> Product Information </h1>
                    <p class="lead font-weight-normal text-left" id = "dscBox">
                            
                        
                    </p>
                    
                    <p class="btn btn-outline-secondary" id="add-cart">Add to your cart</p>
            </div>    
    </div>
    
    <div class="d-flex flex-row bd-highlight">

            <div class="flex-fill bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
              <div class="my-3 py-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="flex-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
              <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="flex-fill bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                    <div class="my-3 py-3">
                      <h2 class="display-5">Another headline</h2>
                      <p class="lead">And an even wittier subheading.</p>
                    </div>
                    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
                  </div> 
    </div>

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