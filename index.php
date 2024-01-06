<?php include('header.php') ?>

  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MyCollege</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
        
        <li class="nav-item dropdown">
          <?php if (isset($_SESSION['login'])) { ?>
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user mr-2"></i>Account
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="/sms-project/admin/dashboard.php">Dashboard</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
          <?php } else { ?>
          <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>User login</a>
          <?php } ?>
        </li>
      </ul>
          </div>
        </div>
      </nav>
     
    <div class="d-flex" style="height: 500px; background: linear-gradient(-45deg,navy,transparent);">
      <div class="container-fluid my-auto">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="display-3 ">school Management System</h1>
                <p class=""> College is a leading institution dedicated to providing quality education and fostering holistic development. 
                    With a commitment to excellence, we strive to empower students with knowledge, skills, and values that prepare 
                    them for a successful and fulfilling future.</p>
                <a href="" class="btn btn-lg btn-dark">Get Started</a>
                
            </div>
            <div class="col-lg-6">
                <div class="w-50 mx-auto card">
                    <div class="card-body">
                        <h3>Registration Form</h3>
                        <div>
                            <form action="" method="post">
                                <div class="form-outline my-4" data-mdb-input-init>
                                    <input type="text" id="typeText" class="form-control" />
                                    <label class="form-label" for="typeText">Name</label>
                                  </div>
                                  <div class="form-outline my-4" data-mdb-input-init>
                                    <input type="text" id="typeText" class="form-control" />
                                    <label class="form-label" for="email">Email</label>
                                  </div>
                                  <div class="form-outline my-4" data-mdb-input-init>
                                    <input type="text" id="typeText" class="form-control" />
                                    <label class="form-label" for="mobile">Mobile No</label>
                                  </div>
                                  <button class="btn btn-lg btn-primary btn-block">Submit Form</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
    </div>

    <!-- About us -->
    <section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>About <br> College Administration</h2>
                <div>
              <p>
              A college is an educational institution that provides higher
              learning and specialized training beyond the secondary school 
              level. Colleges offer a diverse range of academic programs, 
              including undergraduate and graduate degrees, vocational 
              training, and professional certifications.</p>
              <p>
              Colleges play a crucial role in shaping individuals for their 
              future careers by providing in-depth knowledge in various fields
              of study. They foster intellectual growth, critical thinking, and 
              skill development. Students in college engage in academic pursuits, 
              research, extracurricular activities, and social interactions, 
              contributing to a holistic educational experience.
              </p>
            </div>
            <a href="about-us.php" class="btn btn-secondary btn-dark">Know More</a>
            </div>
            
            <div class="col-lg-6" style="background:url(./assets/images/OIP.jpeg)">

               
            </div>
        </div>
    </div>
</section>

    <!-- Our courses -->

    <section class="py-5 ">
        <div>
            <h2 class="text-center my-5">Our Courses</h2>
        </div>
        <div class="container">
            <div class="row">
              <?php for($i=0;$i<12;$i++) {?>
            <div class="col-lg-3">
                    <div class="card">
                        <div>
                            <img src="./assets/images/OIP.jpeg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <b> Web Design & Development</b>
                            <p class="card-text">
                                <b>Duration : </b> 45 hours <br>
                                <b>Price : </b> 4000/- Rs
                            </p>
                            <button class="btn btn-sm btn-block btn-primary ">Enroll Now</button>
                        </div>
                    </div>
                </div>

               <?php } ?>
            </div>
        </div>
    </section>

<!-- Our professors -->
    <section class="py-5 bg-light">
        <div>
            <h2 class="text-center">Our Professors</h2>
        </div>

        <div class="container">
          <div class="row">
            <?php for($i=0;$i<8;$i++) {?>
              <div class="col-lg-3 my-5">
              <div class="card">
                <div class="col-7 position-absolute" style="top: -50px;">
                    <img src="./assets/images/placeholder.png" alt="" class="mw-100 border rounded-circle">
                </div>
                
                <div class="card-body pt-5 mt-5">
                <h5 class="card-title">Professor's Name</h5>
                <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                <p class="card-text">
                  <b>Courses : </b>5 <br>
                  <b>Ratings : </b> 
                </p>
                </div>
              </div>
            </div>

            <?php }?>
            
          </div>
        </div>
    </section>

<!-- Achievements -->
<section class="py-5 text-white"  style="background:#3923a7">

    <div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pr-5">
            <h2>Acheivements</h2>
            <p>Our college has gained recognition on the global stage through collaborations with international institutions, exchange programs, and participation in global conferences. This global perspective enhances the overall educational experience for our students.</p>

            <img src="./assets/images/OIP.jpeg" alt="" class="img-fluid rounded">
          </div>
          <div class="col-lg-6 my-auto">
            <div class="row">
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr class="border-warning">
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr class="border-warning">
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr class="border-warning">
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr class="border-warning">
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

 <!-- Testimonials -->
 <section class="py-5">


    <div class="text-center mb-5">
      <h2 class="font-weight-bold">What Pepole Says</h2>
      <p class="text-muted"> People may express their opinions about a college in various ways, and here are some common factors that contribute to what people might say</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="border rounded position-relative">
            <div class="p-4 text-center">
            The availability and diversity of extracurricular activities, such as sports, clubs, and cultural events, can significantly impact people's opinions. A vibrant campus life and opportunities for personal development outside the classroom contribute positively.
            </div>
            <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left: .5rem; opacity:.2"></i>
          </div>
          <div class="text-center mt-n2">
            <img src="./assets/images/placeholder.png" alt="" class="rounded-circle border" width="100" height="100">
            <h6 class="mb-0 font-weight-bold">Name Of Candidate</h6>
            <p><i>Designation</i></p>
          </div>
        </div>
        <div class="col-6">
          <div class="border rounded position-relative">
            <div class="p-4 text-center">
            Individuals often comment on a college's academic reputation, including the quality of faculty, educational programs, and success rates of graduates. Positive experiences with challenging and engaging coursework can lead to favorable reviews.
            </div>
            <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left: .5rem; opacity:.2"></i>
          </div>
          <div class="text-center mt-n2">
            <img src="./assets/images/placeholder.png" alt="" class="rounded-circle border" width="100" height="100">
            <h6 class="mb-0 font-weight-bold">Name Of Candidate</h6>
            <p><i>Designation</i></p>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- Footer -->
<footer style="background:url(./assets/images/OIP.jpeg) center/cover no-repeat">
    <div  class="py-5 text-white" style="background:#000000bb"> 
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4">
              <h5>Useful Links</h5>

              <ul class="fa-ul ml-4">
                <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Home</a></li>
                <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>About Us</a></li>
                <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Courses</a></li>
                <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Terms & Conditions</a></li>
                <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h5>Social Presence</h5>

              <div>
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                </span>
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                </span>
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                </span>
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
                </span>
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
                </span>
              </div>
            </div>
            <div class="col-lg-3">
              <h5>Subscribe Now</h5>
              <form action="">
                <!-- Material input -->
                <div class="form-group my-4">
                  <input type="email" id="email-s" class="form-control" placeholder="Your Email">
                </div>
                <button class="btn btn-secondary py-2 btn-block">Submit</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  </footer>


  <section class="py-2 bg-dark text-light">
    <div class="container-fluid">
      Copyright 2020-2020 All Rights Reseved. <a href="#" class="text-light">School Management System</a>
    </div>
  </section>
  
  <?php include('footer.php') ?>
  




