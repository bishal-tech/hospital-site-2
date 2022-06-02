<?php function get_header()
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/img/favicon">

        <!-- Css import start here  -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Font awsome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Slick slider cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="assets/css/style.css">

        <title>Hospital Site</title>
    </head>

    <body>

        <header id="header">

            <div class="container top-header ">
                <a href="index.html">
                    <div class="logo">
                        <h1><span class="blue-text">Jiboan</span> <span class="sky-text">Rekha</span></h1>
                        <p class="blue-text">Hospital</p>
                    </div>
                </a>
                <div class="header-btns">
                    <button class="btn cta-btn-1" type="button" data-bs-toggle="modal" data-bs-target="#covid">Covid
                        Vactionation</button>
                    <button class="btn cta-btn-1" type="button" data-bs-toggle="modal" data-bs-target="#helth-checkup">
                        Helth Checkup</button>
                    <button class="btn cta-btn-1" type="button" data-bs-toggle="modal" data-bs-target="#login">Reports</button>
                    <a href="#" class="btn cta-btn-2" id="app-btn">
                        <h5>Book Appoinment</h5>
                        <p>993257813</p>
                    </a>
                </div>
            </div>

            <!-- -------------- here modal forms start  -->

            <!-- Covid vactionation form start   -->
            <div class="modal fade" id="covid" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content pb-2">
                        <div class="modal-header ">
                            <h3 class="modal-title sky-text" id=""><b>Vactionation Form</b></h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="">
                            <div class="modal-body ">
                                <div class="form-group">
                                    <label for="full_name">Full name</label>
                                    <input type="text" class="form-control" placeholder="Full name">
                                </div>

                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" placeholder="age">
                                </div>
                                <div class="form-group">
                                    <label for="aadhar_number">Aadhar number</label>
                                    <input type="number" class="form-control" placeholder="Aadhar number">
                                </div>
                                <div class="form-group">
                                    <label for="date">last date of vactination</label>
                                    <input type="date" maxlength="12/05/2022" class="form-control" placeholder="Date">
                                </div>
                                <div class="form-group">
                                    <label for="phn_number">Vactination Certificate</label>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phn_number">Phone number</label>
                                    <input type="number" class="form-control" placeholder="Phone number">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="text-center">
                                    <button type="submit " class="">Submit</button>
                                </div>
                            </div>
                            <div class="sky-text text-center"><a href="#">
                                    <h5 class="sky-text ">Forget password ?</h3>
                                </a></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Covid vactionation form End  -->

            <!-- login form for Report button  -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content pb-2">
                        <div class="modal-header ">
                            <h3 class="modal-title sky-text" id=""><b>Log in</b></h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="">
                            <div class="modal-body ">
                                <div class="form-group">
                                    <label for="email1">Email address</label>
                                    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="password1">Password</label>
                                    <input type="password" class="form-control" id="password1" placeholder="Password">
                                </div>
                                <div class="text-center">
                                    <button type="submit " class="">Submit</button>
                                </div>
                            </div>
                            <div class="sky-text text-center"><a href="#">
                                    <h5 class="sky-text ">Forget password ?</h3>
                                </a></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- login form for Report button End  -->

            <!-- Helth checkup form for Report button  -->
            <div class="modal fade" id="helth-checkup" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content pb-2">
                        <div class="modal-header ">
                            <h3 class="modal-title sky-text" id=""><b>Helth Checkup From</b></h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="">
                            <div class="modal-body ">
                                <div class="form-group">
                                    <label for="full_name">Full name</label>
                                    <input type="text" class="form-control" placeholder="Full name">
                                </div>

                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" placeholder="age">
                                </div>

                                <div class="input-group my-1">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Select ...</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Transgender</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="date">Date of Checkup</label>
                                    <input type="date" maxlength="12/05/2022" class="form-control" placeholder="Date">
                                </div>
                                <div class="form-group">
                                    <label for="files">Any old reports</label>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phn_number">Phone number</label>
                                    <input type="number" class="form-control" placeholder="Phone number">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="text-center">
                                    <button type="submit " class="">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Helth checkup form for Report button End  -->



            <nav class=" navbar navbar-expand-lg navbar-light ">
                <div class="container">
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="all-doctors.html">Doctors</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Specality
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Academic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="career.html" tabindex="-1" aria-disabled="true">Career</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html" tabindex="-1" aria-disabled="true">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#footer">Contact</a>
                            </li>

                            <li class="">
                                <a class="btn emg-btn" href="#">Emergency Word</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>

    <?php } ?>