<?php include 'navbar.php';?>
<?php include 'header.php';?>
<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stepwise school</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <section class="container-fluid">
        <div class="row">
            <div class=" mx-auto">
                <form action="register_connect.php" method="post">
                    <div class="card"> 
                        <div class="card header bg-primary">
                            <h2 class="text-white">Welcome To st_stephen Boxing Academy</h2>
                        </div>
                        <div class="card body">
                            <!--Input name start-->
                            <div class="form-group mb-3">
                                <label for="name">Full name</label>
                                <input type="text"name="name"class="form-control" required>
                            </div>
                            <!--Input name ends-->

                            <!--Input email starts-->
                            <div class="form-group mb-3">
                                <label for="email">Email Address</label>
                                <input type="email"name="email"class="form-control" required>
                            </div>
                            <!--Input email ends-->

                            <!--Input password starts-->
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password"name="password"class="form-control" required>
                            </div>
                            <!--input password ends-->
                            <div class="form-group mb-3">
                                <label for="Courses">Select Courses</label>
                                <select class="form-control" name="course" required>
                                    <option selected disabled>--Select Courses--</option>
                                    <option >Go kart racing</option>
                                    <option >Defensive Driving</option>
                                    <option >FIA Rules</option>
                                    <option >Mechanical Enginering</option>
                                    <option >Steward Training</option>    
                                </select>
                               </div>
                           <!--description-->
                           <!-- <div class="form-group mb-3">
                               <label for="description">description</label>
                               <textarea name="description" class="form-control" placeholder="course details" rows="5"></textarea>
                              
   
                           </div> -->
                           <!--duration-->
                           <!-- <div class="form-group mb-3">
                               <label for="duration">duration</label>
                               <input type="number" name="duration"class="form-control" placeholder="" required>
                           </div> -->
                           <!--fee-->
                           <!-- <div class="form-group mb-3">
                               <label for="fee">fee</label>
                               <input type="number" name="fee"class="form-control" placeholder="" required>
   
                           </div> -->
                            <!--button starts-->
                            <button type="submit"name="registerButton"class="btn btn-block btn-dark">Register</button>
                            <!--button ends-->
                        </div>
                    </div>
                </form>
            </div>
            <div class=" pt-5 pb-5">
                <div class="card nel">
                  <div class="cardbody">
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