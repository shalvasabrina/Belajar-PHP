<?php require('login_validation.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagas Abimanyu | Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Section registration card -->
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-xl">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in</p>

                                    <form class="mx-1 mx-md-4" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <!-- <label class="form-label" for="email">Your Email</label> -->
                                                <input type="email" id="email" class="form-control" name="email" placeholder="Email"/>
                                            </div>
                                            <span><?= $username_error?></span>
                                        </div>
                                        
                                        <div class="d-flex flex-row align-items-center mb-1">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <!-- <label class="form-label" for="password1">Password</label> -->
                                                <input type="password" id="password1" class="form-control" name="password1" placeholder="Password"/>
                                            </div>
                                        </div>
                                        <span><?= $password_error?></span>
                                        <div class="d-flex flex-row justify-content-end">
                                            <a href="#" class="link-primary">Forgot Password</a>
                                        </div>
                                        <hr class="solid mb-1">
                                        <div class="d-flex justify-content-center">
                                            <p>Don't have an account? <a href="./register.php">Sign up</a></p>
                                        </div>
                                        <div class="d-flex justify-content-center mx-2 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg" name="submit">Sign in</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-6 d-flex align-items-center order-1 order-lg-2">

                                    <img src="../../assets/img/draw1.svg" class="img-fluid" alt="Image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>