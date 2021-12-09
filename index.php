<?php include 'header.php';?>
<?php include 'navbar.php';?>
      <!--carousel section starts-->
      <div id="carouselExampleCaptions" class="carousel slide main-slider" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/go-kart-2.jpg" class="d-block w-100" alt="image">
          </div>
          <div class="carousel-item">
            <img src="images/go-kart-4852767_960_720.jpg" class="d-block w-100" alt="image">
          </div>
          <div class="carousel-item">
            <img src="images/go-karts-3.jpg" class="d-block w-100" alt="image">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!--carousel section ends-->
      <script type="text/javascript">
    var _smartsupp = _smartsupp || {};_smartsupp.key = 'eb2cde98c63a6c8aecb268abb10aa2d222b8dba5';
    window.smartsupp||(function(d) {
    var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
    s=d.getElementsByTagName('script')[0];c=d.createElement('script');
    c.type='text/javascript';c.charset='utf-8';c.async=true;
   c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);})(document);
  </script>
      <!--icons section-->
      <section>
        <div class="icons-bar">
        <a href="https://twitter.com/CollinsGuantai" style="background-color: rgb(0, 174, 255); "><i class="fab fa-twitter"class="icon"></i></a>&nbsp;&nbsp;&nbsp;
          <a href="mailto:guantaicollins115@gmail.com" style="background-color: rgb(255, 0, 0); "><i class="fas fa-envelope"class="icon"></i></a>&nbsp;&nbsp;&nbsp;
          <a href="http://wa.me/254703106227" style="background-color: rgb(19, 121, 9);"><i class="fab fa-whatsapp"class="icon"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
       </div>
      <div class="icons-social">
      <a href="#"><i class="fas fa-address-book" ></i><br>Enrol</i></a>&nbsp;&nbsp;&nbsp;
          <a href="#"><i class="fas fa-plus"></i><br>Apply</i></a>&nbsp;&nbsp;&nbsp;
          <a href="#"><i class="far fa-file" ></i><br>Join us</i></a>&nbsp;&nbsp;&nbsp;
          </div>
      </section>
      <!--first section-->
      <section class="container-fluid first text-center pt-5 pb-5">
        <h1 style="color: blue;">This is what we Offer</h1>
        <center>
        <div class="border"></div>
        </center>
        <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velie</p>
      </section>
      <!--second section-->
      <section class="container second text-center pt-5 pb-6">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4">
           <h2 style="color: blue;"><i class="fas fa-hands-helping"class="cal"></i></h2>
           <h2 style="color: blue;">Brighter Future</h2>
           <center>
           <div class="border"></div>
          </center>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever</p>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <h2 style="color: blue;"><i class="fas fa-people-carry" class="cal"></i></h2> 
            <h2 style="color: blue;">Qualified Teachers</h2>
            <center>
            <div class="border"></div>
          </center>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever</p>
           </div>
           <div class="col-sm-6 col-md-4 col-lg-4">
            <h2 style="color: blue;"><i class="fas fa-book" class="cal"></i></h2> 
            <h2 style="color: blue;">State-of-The-Art </h2>
            <center>
               <div class="border"></div>
              </center>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever</p>
           </div>
        </div>
      </section>
      <!--excellence section-->
      <section class="container excellence pt-5 pb-5 ">
        <h1 style="color: blue;" >Our Excellence</h1>
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <button onclick="playVid()" type="button">Play Video</button>
            <button onclick="pauseVid()" type="button">Pause Video</button><br> 

            <video id="myVideo" width="320" height="200">
            <source src="images/videoplayback.mp4" type="video/mp4">
            <source src="images/videoplayback.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
            </video>

            <script> 
            var vid = document.getElementById("myVideo"); 

            function playVid() { 
            vid.play(); 
            } 

            function pauseVid() { 
            vid.pause(); 
            } 
            </script> 
          </div>
          <div class="col-sm-6 col-md-6">
            <h3 style="text-align: center; color: blue;" >Science Olympiad</h3>
            <center>
            <div class="border"></div>
          </center>
            <p class="par">Frederica Academy admits students of any race, color, national origin, religion, and sex to all the rights, privileges, programs, and activities generally accorded or made available to students at the school. It does not discriminate because of race, color, national origin, religion, sex, or any other category protected by law in the administration of its education policies, admissions policies, scholarship and loan programs, and athletic and other school-administered programs.</p>
            <h4 style="color: blue;"><i class="fas fa-calendar-alt"></i> Awarded on:12th may 2021</h4>
          </div>
        </div>
      </section>
      <!--falcalty section-->
      <section class="container-fluid bg-dark text-center falcalty pt-5 pb-5">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 pt-4">
            <h2>
              120</h2>
            <center>
            <div class="border"></div>
          </center>
            <h5>students</h5>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 pt-4">
            <h2>173</h2>
            <center>
            <div class="border"></div>
          </center>
            <h5>Teachers</h5>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 pt-4">
            <h2>39</h2>
            <center>
            <div class="border"></div>
          </center>
            <h5>Departments</h5>
          </div>
        </div>
      </section>
      <!--card section-->
      <section class="container program text-center pt-5 pb-5">
        <h2 style="color: blue;">Latest News and Events</h2>
        <center>
          <div class="border"></div>
        </center>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="card">
              <img src="images/camp-4.png" alt="image" class="card-img-top">
              <div class="card-body">
                <h6 class="card-title">17th Jul 2021   By Dancum</h6><hr>
                <h6 style="color: blue;">Riverside Camping</h6>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea iure facere dicta architecto nam repellendus eius laudantium illum quia laboriosam.
                </p>
              </div>
          </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 pb-5">
            <div class="card">
              <img src="images/f1-2696459_960_720.jpg"alt="image" class="card-img-top">
              <div class="card-body">
                <h6 class="card-title">10th Aug 2021   By Dancum</h6><hr>
                <h6 style="color: blue;">J.F.KENNEDY IT Hub</h6>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea iure facere dicta architecto nam repellendus eius laudantium illum quia laboriosam.
                </p>
              </div>
          </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 pb-5">
            <div class="card">
              <img src="images/fast-1281628_960_720.jpg"alt="image" class="card-img-top">
              <div class="card-body">
                <h6 class="card-title">16th Sept 2021   By Dancum</h6><hr>
                <h6 style="color: blue;">NCAA Intercollegiate Games</h6>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea iure facere dicta architecto nam repellendus eius laudantium illum quia laboriosam.
                </p>
              </div>
          </div>
          </div>
        </div>
        <a href="#" class="btn btn-dark text-center "><i class="fas fa-eye"></i>Read more</a>
      </section>


<?php include 'footer.php';?>
 