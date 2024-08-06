<?php session_start();
$servername="localhost";
$username="root";
$password="";
$db="outsourcer";


$conn=mysqli_connect($servername,$username,$password,$db);

if(isset($_REQUEST['submit'])){
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $sms=$_REQUEST['sms'];
    $query="INSERT INTO `get_in_touch`(`message`, `name`, `email`, `phone`, `sms`) VALUES ('NULL','".$name."','".$email."','".$phone."','".$sms."')";
    $result=mysqli_query($conn,$query);

}

?>



<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/outsourcerlogo.jpg" type="image/x-icon">

  <title>Outsourcer</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/hero-bg.jpg" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Choose the best 
              </span>
            </a>
            <a href="" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +923027963309
              </span>
            </a>
            <a href="" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                abbasabbas3309@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span>
                Outsourcer
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>


            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Hire_Expert.php">Hire Expert</a>
                </li>
                <li class="nav-item">
                    <div style="margin-top: 27px;">
                <a href="https://wa.link/3mebzq">
                    
                <i class="fa fa-whatsapp" aria-hidden="true" style="margin-top: 10px; width:25px; height:25px;"></i>Whatsapp</a></div>
              </a>
                </li>
                
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Hire Best  <br>
                      <span>
                        Freelancer.
                      </span>
                    </h1>
                    <p>
                      Efficiency is doing things right; effectiveness is doing the right things.
                    </p>
                    <div class="btn-box">
                     
                      <a href="Hire_Expert.php" class="btn-2">Hire Expert</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Work Done <br>
                      <span>
                        On Merit
                      </span>
                    </h1>
                    <p>
                      Your are working on the safest platform and there is no compromise in quaility of the work.
                    </p>
                    <div class="btn-box">
                      
                      <a href="Hire_Expert.php" class="btn-2">Hire Expert</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Back Payment <br>
                      <span>
                        If Not Satisified
                      </span>
                    </h1>
                    <p>
                     Our company does not force the clients to work with us . Rather give his payment back if the work is not satisfactory for him.
                    </p>
                    <div class="btn-box">
                      
                      <a href="Hire_Expert.php" class="btn-2">Hire Expert</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container idicator_container">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
<style>
 @media (min-width: 1200px) {
    .container {
        max-width: 1250px;
    }
}
</style>
  <section class="about_section layout_padding">
    <div class="container con" >
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box" style="width:100%;">
              <img src="../guarder-html/images/outsource.png" style="width:650px;" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Who Are We?
              </h2>
            </div>
            <p>
              Our company brings together elite freelancers to form dynamic, collaborative teams. We leverage the diverse skills and expertise of our network to deliver outstanding project outcomes. By fostering seamless interaction among freelancers, we ensure innovative and efficient solutions. Trust us to streamline your outsourcing needs with excellence and precision.
            </p>
            <div class="btn-box">
              <a href="Hire_Expert.php">
                Hire Expert
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our services
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              
                  <img src="images/graphicdesignlogo1.png" style="width: 100px;"/>
                
            </div>
            <div class="detail-box">
              <h6>
                Graphic Designer
              </h6>
              <p>
              Our creative designers excel at crafting visually compelling and innovative designs that capture attention and communicate your brand's message effectively.
              </p>
              <a href="Hire_Expert.php">
                Hire
              </a>
            </div>
          </div>
        </div>
         
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              
              <img src="images/vedioediting2.png" style="width: 100px;"/>
            </div>
            <div class="detail-box">
              <h6>
                Vedio Editor
              </h6>
              <p>
              Our video editors transform raw footage into engaging, polished content, with a focus on storytelling, pacing, and professional quality.
              </p>
              <a href="Hire_Expert.php">
                Hire
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              
              <img src="images/web2.png" style="width: 100px;"/>
            </div>
            <div class="detail-box">
              <h6>
               Programmer
              </h6>
              <p>
              Our programming experts develop tailored software solutions, leveraging languages like C, C++, Python, and MATLAB to build efficient, scalable systems.
              </p>
              <a href="Hire_Expert.php">
                Hire
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              
                  <img src="images/seo.jpg" style="width: 100px;"/>
                
            </div>
            <div class="detail-box">
              <h6>
                Search Engine Optimization
              </h6>
              <p>
              Our creative designers excel at crafting visually compelling and innovative designs that capture attention and communicate your brand's message effectively.
              </p>
              <a href="Hire_Expert.php">
                Hire
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              
                  <img src="images/webdevelopment.png" style="width: 155px;"/>
                
            </div>
            <div class="detail-box">
              <h6>
                Web Development
              </h6>
              <p>
              Our creative designers excel at crafting visually compelling and innovative designs that capture attention and communicate your brand's message effectively.
              </p>
              <a href="Hire_Expert.php">
                Hire
              </a>
            </div>
          </div>
        </div>




        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              
                  <img src="images/Screenshot 2024-08-04 010806.png" style="width: 100px;"/>
                
            </div>
            <div class="detail-box">
              <h6>
              Data Structures and Algorithms
              </h6>
              <p>
              Our creative designers excel at crafting visually compelling and innovative designs that capture attention and communicate your brand's message effectively.
              </p>
              <a href="Hire_Expert.php">
                Hire
              </a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- client section -->

  

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <div class="img-box">
        <img src="images/contact-bg.jpg" alt="">
      </div>
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Get In touch 
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <form method="post" action="index.php" enctype="multipart/form-data">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" name="name" placeholder="Full Name" />
                  </div>
                  <div>
                    <input type="email" name="email" placeholder="Email " />
                  </div>
                  <div>
                    <input type="phone" name="phone" placeholder="Phone Number" />
                  </div>
                  <div class="">
                    <input type="text" name="sms" placeholder="Message" class="message_input" />
                  </div>
                 
                  <div class="btn-box ">
                    <input type="submit" value="send" name="submit"/>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- team section -->

  
  <!-- end team section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <a class="navbar-brand" href="index.html">
              <span>
                Outsourcer
              </span>
            </a>
            <p>
              Connecting the freelancers from all around the world.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="">
                  dolor sit amet, consectetur
                </a>
              </li>
              <li>
                <a href="">
                  magna aliqua. Ut enim ad
                </a>
              </li>
              <li>
                <a href="">
                  minim veniam,
                </a>
              </li>
              <li>
                <a href="">
                  quisdotempor incididunt r
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Contact Us
            </h5>
          </div>
          <div class="info_contact">
            <a href="" class="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Choose the best for your work.
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : 03027963309
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                abbasabbas3309@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Whatsapp
            </h5>
          </div>
            <div class="social_box">
              <a href="https://wa.link/3mebzq">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->




  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <span id="currentYear"></span> All Rights Reserved. Design by Muhammad Abbas
      
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>