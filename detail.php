<?php include 'header.php'; ?>

<!-- Page Header Start -->
<!-- <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop Detail</p>
            </div>
        </div>
    </div> -->
<!-- Page Header End -->


<!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="img/lenovo.png" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="img/hp.png" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="img/Mouse.png" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="img/apple.png" alt="Image">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <?php
            include 'DBconn.php';

            if (isset($_POST["detail"]))
                $_SESSION['id'] =  $_POST["detail"];
            $id = $_SESSION['id'];
            $id = substr($id, 1,);
            if ($_SESSION['id'][0] == 'l') {
                $sql = "select * from laptops2 where id = $id";
                $res = mysqli_query($connection, $sql);
                $row = mysqli_fetch_array($res);
                echo '<h3 class="font-weight-semi-bold">' . $row['manufacturer'] . ' - ' . $row['model_name'] . '</h3>';
                echo '<h3 class="font-weight-semi-bold mb-4">$' . $row['price'] . '</h3>
                    <p class="mb-4"> ' . $row['manufacturer'] . ' ' . $row['model_name'] . ' - ' . $row['cpu'] . ' - ' . $row['category'] . ' - ' . $row['ram'] . 'GB RAM</p>';

                echo '<form method="post" action="cartCode.php">
                <button class="btn btn-primary px-3" name="cart" value=' . $_SESSION['id'] . '><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
            </form>
            <br>';
           
            } else {
                $sql = "select * from hardware where Id = $id";
                $res = mysqli_query($connection, $sql);
                $row = mysqli_fetch_array($res);
                echo '<h3 class="font-weight-semi-bold">' . $row['Name'] . ' - ' . $row['Category'] . '</h3>';
                echo '<h3 class="font-weight-semi-bold mb-4">$' . $row['Price'] . '</h3>
                    <p class="mb-4"> ' . $row['Name'] . ' - ' . $row['Category'] . '</p>';
                echo '<form method="post" action="cartCode.php">
                    <button class="btn btn-primary px-3" name="cart" value=' . $_SESSION['id'] . '><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                </form>';
            }
            echo '<br>
            <form method="post" action="addRating.php">
            <label >Rate (1-5):</label>
            <input type="number"  name="rate" min="1" max="5" required><br>
                <button class="btn btn-primary px-3" name="ratebtn" value=' . $_SESSION['id'] . '><i class="fa fa-shopping-cart mr-1"></i> Rate</button>
            </form>';


            $_SESSION['ItemView'][$id] = $_SESSION['id'][0];



            ?>

            <!-- <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Reviews)</small>
                </div> -->



        </div>
    </div>
</div>
</div>
<div class="row px-xl-5">
    <div class="col">
        <div class="nav nav-tabs justify-content-center border-secondary mb-4">
            <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Information</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-pane-1">
                <h4 class="mb-3">Product Description</h4>
                <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                <p>Dolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.</p>
            </div>
            <div class="tab-pane fade" id="tab-pane-2">
                <h4 class="mb-3">Additional Information</h4>
                <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0">
                                Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                            </li>
                            <li class="list-group-item px-0">
                                Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                            </li>
                            <li class="list-group-item px-0">
                                Duo amet accusam eirmod nonumy stet et et stet eirmod.
                            </li>
                            <li class="list-group-item px-0">
                                Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0">
                                Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                            </li>
                            <li class="list-group-item px-0">
                                Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                            </li>
                            <li class="list-group-item px-0">
                                Duo amet accusam eirmod nonumy stet et et stet eirmod.
                            </li>
                            <li class="list-group-item px-0">
                                Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-pane-3">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-4">1 review for "Colorful Stylish Shirt"</h4>
                        <div class="media mb-4">
                            <img src="img/asus.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                <div class="text-primary mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4">Leave a review</h4>
                        <small>Your email address will not be published. Required fields are marked *</small>
                        <div class="d-flex my-3">
                            <p class="mb-0 mr-2">Your Rating * :</p>
                            <div class="text-primary">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="message">Your Review *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Shop Detail End -->


<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Discount 20%</span></h2>
    </div>



    <!-- <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                        <div class="d-flex justify-content-center">
                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
          <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                        <div class="d-flex justify-content-center">
                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>

        </div> -->
</div>
<div class="container-fluid offer pt-10">
    <div class="row justify-content-center">
        <div class="col-md-10 pb-10">
            <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-20">
                <div class="row px-xl-5 pb-3">
                    <?php
                    include 'DBconn.php';
                    include 'apriori.php';
                    $S1 = "SELECT  DISTINCT(UserID) as UserID from orders";
                    $user = mysqli_query($connection, $S1);
                    $arr_users = array();
                    while ($Row = mysqli_fetch_array($user)) {
                        array_push($arr_users, $Row["UserID"]);
                    }
                    $arr = [];
                    for ($i = 0; $i < count($arr_users); $i++) {
                        $S2 =  "select ProductID from orders where UserID='.$arr_users[$i].'";
                        $res = mysqli_query($connection, $S2);
                        while ($row = mysqli_fetch_array($res)) {
                            $arr[$i][] = $row[0];
                        }
                    }
                    $cnt = 0;
                    $lastItme = array_key_last($_SESSION['pakageOfItem']);
                    foreach ($_SESSION['pakageOfItem'] as $Index => $Id) {
                        $sql = "select * from hardware where Id = $Id";
                        $res = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_array($res)) {
                            echo '<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    </div>
                                    <img class="img-fluid w-100" src="Keyboard.png" alt="">
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">' . $row['Name'] . '</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>' . $row['Price'] . '</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            if ($cnt != count($_SESSION['pakageOfItem']) - 1) {
                                echo '<div style="margin:30px 0px 30px 0; "><h1>+</h1></div>';
                                $cnt++;
                            }
                        }
                    }
                    ?>
                </div>
                <form class="text-center">
                    <button class="btn btn-primary px-4" name="cart" value=""><i class="fa fa-shopping-cart mr-2"></i> Add To Cart</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Products End -->



<?php include 'footer1.php' ?>