<?php require('register_validation.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagas Abimanyu | Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Section registration card -->
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-xl">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11"></div>
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <!-- <form class="mx-1 mx-md-4" action="register_validation.php" method="post"> -->
                                    <form class="mx-1 mx-md-4" method="post">
                                
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <!-- <label class="form-label" for="name">Your Name</label> -->
                                                <input type="text" id="name" class="form-control" name="name" placeholder="Name"/>
                                                <span><?php echo $username_error?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <!-- <label class="form-label" for="email">Your Email</label> -->
                                                <input type="email" id="email" class="form-control" name="email" placeholder="Email"/>
                                                <span><?php echo $email_error?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <!-- <label class="form-label" for="password1">Password</label> -->
                                                <input type="password" id="password1" class="form-control" name="password1" placeholder="Password"/>
                                                <span><?php echo $password1_error?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <!-- <label class="form-label" for="password2">Repeat your password</label> -->
                                                <input type="password" id="password2" class="form-control" name="password2" placeholder="Repeat your password"/>
                                                <span><?php echo $password2_error?></span>
                                                <span><?php echo $passwordfull_error?></span>
                                            </div>
                                        </div>
                                        <div class="form-check d-flex justify-content-center">
                                            <input class="form-check-input me-2" type="checkbox" id="agree" name="agree" />
                                            <label class="form-check-label" for="agree">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                            <span><?php echo $agreement_error?></span>
                                        </div>
                                        <hr class="solid mb-1">
                                        <div class="d-flex justify-content-center">
                                            <p>Already have an account? <a href="./login.php">Sign in</a></p>
                                        </div>
                                        <div class="d-flex justify-content-center mx-2 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg" name="submit">Register</button>
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