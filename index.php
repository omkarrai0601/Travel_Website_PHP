<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Josefin+Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,700&display=swap" rel="stylesheet">

    <title>Tour and Travels</title>

    <style>
        /* CSS styles */
        .same-size {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Krishna Tourism</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <!-- -------------------------------------------------CAROUSEL--------------------------------------------- -->


    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/sw1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Russia</h3>
                    <p>We had such a great time in Russia!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/sw2.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Italy</h3>
                    <p>Thank you, Italy!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/sw3.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Switzerland</h3>
                    <p>We love Mountains!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    

    <!-- ------------------------About Us ------------------------------- -->

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/sw5.jpg" class="img-fluid aboutimg">
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Lorem ipsum dolor sit.</h2>
                    <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque in suscipit repudiandae qui debitis nisi possimus ullam aspernatur ducimus neque, a iure totam ut laboriosam fugit voluptatem eius assumenda tenetur perspiciatis nostrum distinctio, minima reiciendis provident eos! Voluptas laudantium dolores vero doloremque ipsam iusto harum voluptatibus maxime, possimus voluptates illum!</p>
                    <a href="about.php" class="btn btn-primary"> for more detail click here</a>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------------Our Services-------------------------------------------------- -->


    <section class="my-3">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card"  >
                        <img class="card-img-top" style="width: 100%; height: 300px; object-fit: cover; " src="images/sw4.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12" >
                    <div class="card"  >
                        <img class="card-img-top" style="width: 100%; height: 300px;" src="images/sw7.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" >
                        <img class="card-img-top" style="width: 100%; height: 300px;" src="images/sw9.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- --------------------------------OUR GALLERY----------------------------------- -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/g2.jpg" class="img-fluid pb-4 same-size ">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/GI1.webp" class="img-fluid pb-4 same-size">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/g3.jpg" class="img-fluid pb-4 same-size same-size">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/g4.avif" class="img-fluid pb-4 same-size">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/g5.avif" class="img-fluid pb-4 same-size">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/g6.avif" class="img-fluid pb-4 same-size">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/g7.jpg" class="img-fluid pb-4 same-size">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/g8.webp" class="img-fluid pb-4 same-size">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/g10.avif" class="img-fluid pb-4 same-size">
                </div>
                

                
                
            </div>
        </div>
    </section>

<!-- --------------------------------User Information----------------------------------------------------- -->

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">User Information</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Comment</label>
                    <textarea class="form-control" name="comment" autocomplete="off"> </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </section>

    <!-- -----------------------------------footer---------------------------------- -->

    <footer>
        <p class="p-3 bg-dark text-white text-center"> Email: @krishnatourism.co.in <br> Phone: +918545256896/11016-5485746  <br> Address: HauzKhas New Delhi </p>

        

    </footer>



    <!-- ----------------------------------------Bootstrap Script--------------------------------------------- -->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>