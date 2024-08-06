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
    $cat=$_REQUEST['cat'];
    $file=$_FILES['file']['name'];
    $query="INSERT INTO `hire`(`hire_id`, `name`, `email`, `phone`, `message`, `cat`, `File`) VALUES ('NULL','".$name."','".$email."','".$phone."','".$sms."','".$cat."','".$file."')";
    $result=mysqli_query($conn,$query);
    $target_dir='../guarder-html/storeclnfiles/'.$file;
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir);

    echo"The Message Sent to expert";


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

<body class="sub_page">
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
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
  </div>

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
          Hire The Best
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <form method="post" enctype="multipart/form-data">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" name="name" placeholder="Full Name" />
                  </div>
                  <div>
                    <input type="email" name="email" placeholder="Email " />
                  </div>
                  <div>
                    <input type="text" name="phone" placeholder="Phone Number" />
                  </div>
                 
                  <div class="">
                    <input type="text" name="sms" placeholder="Message" class="message_input" />
                  </div> 
                  <div class="">
                    <select name="cat">
                        <option>Choose Categoery</option>
                        <option>Web Development</option>
                        <option>Wordpress</option>
                        <option>Search Engine Optimization(SEO)</option>
                        <option>Programming</option>
                        <option>Python Development</option>
                        <option>C,C++,C sharp</option>
                        <option>Matlab</option>
                        <option>Simulink</option>
                        <option>Graphic Designing</option>
                        <option>Vedio Editing</option>
                        <option>Mathematics Experts</option>
                        <option>other(mention then in the text sms)</option>
                    </select>
                  </div>
                  <div class="">
                    <input type="file" name="file" placeholder="Choose File"  />
                  </div>
                  <div class="btn-box ">
                    <button type="submit" name="submit">
                      Hire
                    </button>
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
              Choose the best for your client.
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
                  Best place for outsourcers
                </a>
              </li>
              <li>
                <a href="">
                  they all come here 
                </a>
              </li>
              <li>
                <a href="">
                  and get best worked done
                </a>
              </li>
              <li>
                <a href="">
                   by the best experts
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
               Choose the best
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
          <div class="info_form ">
            <h5>
              Whatsapp
            </h5>
           
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
      &copy; <span id="currentYear"></span> All Rights Reserved. Design by Muhammad abbas
      
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>