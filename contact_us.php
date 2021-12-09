<?php include 'navbar.php';?>
<?php include 'header.php';?>
<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="container-fluid get pt-5 pb-4"id="Contact">
      <div class="row pt-5">
        <h2 style="color:#0e1572 ;text-align: center;">GET IN TOUCH</h2>
        <center>
        <div class="border"></div>
        </center>
        <div class="col-sm-12 col-md-6">
          <p>Please fill out the form on this section to contact with me. Or call between 8:00 a.m. and 5:00 p.m. EAT, Monday through Friday</p>
         
          <form action="code.php"method="post">
            <div class="form group mb-3">
                <label for="name" class="form-label"> name</label>
                <input type="text"class="form-control"placeholder="johnDoe"autofocus required>
            </div>
        <!--email-->
        <div class="form-group mb-3">
        <label for="Email address" class="form-label">Email Address</label>
                <input type="email"class="form-control"placeholder="" required>
              </div>    
        
        <div class="form-group mb-3">
          <label for="subject" class="form-label"> subject</label>
                <input type="text"class="form-control"placeholder=""autofocus required>
           
        </div>
        <div class="form-group mb-3">
            <label for="massage">message</label>
            <textarea class="form-control" id="" cols="" rows=""></textarea>
        </div>
        <button class="btn btn-dark"type="submit">submit</button>
        
      </form>
        </div>
        
        <div class="col-sm-12 col-md-6">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=zalego%20kenya&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net">don t breathe 2 123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">how to add google map to website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
        </div>
      </div>
    </section>
    
</body>
</html>

<?php include 'footer.php';?>
