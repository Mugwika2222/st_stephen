<?php include 'navbar.php';?>
<?php include 'header.php';?>
<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>st_stephen</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <section class="container-fluid">
        <div class="row">
            <div class=" mx-auto">
                <form action="login_connect.php" method="post">
                    <div class="card">
                        <div class="card header bg-primary">
                            <h2 class="text-white">Welcome To st_stephen Academy</h2>
                        </div>
                        <div class="card body">
                            <!--Input name start-->
                            <div class="form-group mb-3">
                                <label for="name">Full name</label>
                                <input type="text"name="name"class="form-control">
                            </div>
                            <!--Input name ends-->
                            <!--Input password starts-->
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password"name="password"class="form-control">
                            </div>
                            <!--input password ends-->
                            <!--button starts-->
                            <button type="submit"name="registerButton"class="btn btn-block btn-dark">Login</button>
                            <!--button ends-->
                        </div>
                    </div>
                </form>
            </div>
            <div class="pt-5 pb-5">
                <div class="card nel">
                  <div class="cardbody"style>
                    <h4 class="contact" style="color: #0e1572;text-align: center;">Contact Details:</h4>
                    <h4><i class="fas fa-map-marker-alt icon">st_stephen<br> Nairobi,Kenya</i></h4><br>
                   <h4><i class="far fa-envelope">info@designs.co.ke</i></h4><br>
                   <h4><i class="fas fa-phone-alt icon">+254-701-234-567</i></h4><br>
                    <h4><i class="far fa-clock icon">Open: Mon- Fri<br>&nbsp;8:00am - 6:00pm</i></h4><Br>
                  </div>

                </div>
              </div>
        </div>
    </section>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include 'footer.php';?>