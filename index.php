<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Port-folio</title>
        <link rel="stylesheet" href="style.css" />

        <link href="vendor/aos/aos.css" rel="stylesheet" />
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
        <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
        <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
        <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
        <link href="vendor/css/style.css" rel="stylesheet" />
        <link href="footer.css" rel="stylesheet" />
        

        <style>
            
.resume:hover{
    mix-blend-mode: inherit !important;
}

            .back {
  background-color: #151515;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  border-radius: 5px;
  overflow: hidden;
}

.back {
  width: 100%;
  height: 100%;
  justify-content: center;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.back::before {
  position: absolute;
  content: ' ';
  display: block;
  width: 160px;
  height: 160%;
  background: linear-gradient(90deg, transparent, #ff9966, #ff9966, #ff9966, #ff9966, transparent);
  animation: rotation_481 5000ms infinite linear;
}

.back-content {
  position: absolute;
  width: 98%;
  height: 99%;
  background-color: #151515;
  border-radius: 5px;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 30px;
}



@keyframes rotation_481 {
  0% {
    transform: rotateZ(0deg);
  }

  0% {
    transform: rotateZ(360deg);
  }
}


             body {
  background-color: #b2caf1 !important;
   background-image: url('wp5823210-8k-desktop-hd-wallpapers.jpg');
  /* background-position: center center; */
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.nav-link:hover{
    content: "";
    /* color: #149ddd !important; */
    color: white !important;
  border: none !important;
} 

.nav-link{
    border-bottom: 1px solid rgba(255, 255, 255, .25);
}

.col-lg-4 {
  height: 300px; /* [1.1] Set it as per your need */
  overflow: hidden; /* [1.2] Hide the overflowing of child elements */
}

/* [2] Transition property for smooth transformation of images */
.col-lg-4 img {
  transition: transform .5s ease;
}

/* [3] Finally, transforming the image when container gets hovered */
.col-lg-4:hover img {
  transform: scale(1.5);
}

.profile1:hover img {
    color: white;
    background-color: #f2f4f7;
    border: 1px solid #a1a6ad;
    transform: scale(1.2);
    transition: transform .5s ease;
}





@media (max-width: 1199px) {


  .nav-list {
    list-style: none;
    display: flex;
    gap: 1.5rem;
    margin-left: 5rem;
    font-size: small;
    margin-right: auto;
}

}
@media (max-width: 991px) {


.navbar{
  max-inline-size: -webkit-fill-available !important;
  margin: 0 1rem !important;


}
}
@media (max-width: 900px) {


.nav-list{
  list-style: none;
    display: flex;
    gap: 1rem;
    margin-left: 2rem;
    font-size: small;
    margin-right: auto;
}
}
@media (max-width: 845px) {

  .logo{
    font-size: 1rem;
    font-weight: 400;
   
  }
}
@media (max-width: 750px) {

  .profile1{
    display: none;
  }
  .nav-list{
    margin-left: auto;
  }
}
@media (max-width: 628px) {
  .navbar{
    justify-content: center !important;
  }
  .logo{
    margin-bottom: 1rem !important;
  }
  .wall{
    align-items: center !important;
    flex-direction: column !important;
    justify-content: center !important;
    flex-direction: column !important;
  }
  .social-links{
    flex-direction: row !important;
  }
  .bc{
    margin: 0 !important;
  }

}
@media (max-width: 475px) {
   .animation p{ 
    margin: 0 0 0 -9em;
    width: fit-content; 
  }

 
}
            /* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}
/* a:hover{
    transform: scale(1.1);

}
i:hover{
    transform: rotate(360deg);
} */
i:hover{
            transition: 1.0s;
  -webkit-transition: 1.0s;
  -moz-transition: 1.0s;
  -ms-transition: 1.0s;
  -o-transition: 1.0s;
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  transform: rotate(360deg);
        }
        .progress:hover .progress-bar ,    .heading-section:hover ,  .aaa:hover ,a:hover{
            -ms-transform: scale(0.5); /* IE 9 */
  -webkit-transform: scale(0.5); /* Safari 3-8 */
  transform: scale(1.1); 
                }

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

.logo-4 a h3 {
            color: #e74c3c;
            font-family: 'Cinzel', serif;
            font-weight: 300;
            font-size: 30px;
            line-height: 1.3;
        }

        .logo-4 a h3 span {
            background: ;
            color: #e74c3c;
            display: inline-block;
            line-height: 1.8;
            padding: 0px;
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
            opacity: 0.5;
            margin-left: -34px;
        }

        .logo-holder {
            text-align: center;
        }

        .logo-holder a {
            text-decoration: none !important;
            display: inline-block;
        }


.Btn {
  width: 50px;
  height: 50px;
  border: none;
  border-radius: 50%;
  background-color: rgb(27, 27, 27);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  position: relative;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.11);
}

.svgIcon {
  fill: rgb(214, 178, 255);
}

.icon2 {
  width: 18px;
  height: 5px;
  border-bottom: 2px solid rgb(182, 143, 255);
  border-left: 2px solid rgb(182, 143, 255);
  border-right: 2px solid rgb(182, 143, 255);
}

.tooltip {
  position: absolute;
  right: -105px;
  opacity: 0;
  background-color: rgb(12, 12, 12);
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition-duration: .2s;
  pointer-events: none;
  letter-spacing: 0.5px;
}

.tooltip::before {
  position: absolute;
  content: "";
  width: 10px;
  height: 10px;
  background-color: rgb(12, 12, 12);
  background-size: 1000%;
  background-position: center;
  transform: rotate(45deg);
  left: -5%;
  transition-duration: .3s;
}

.Btn:hover .tooltip {
  opacity: 1;
  transition-duration: .3s;
}

.Btn:hover {
  background-color: rgb(150, 94, 255);
  transition-duration: .3s;
}

.Btn:hover .icon2 {
  border-bottom: 2px solid rgb(235, 235, 235);
  border-left: 2px solid rgb(235, 235, 235);
  border-right: 2px solid rgb(235, 235, 235);
}

.Btn:hover .svgIcon {
  fill: rgb(255, 255, 255);
  animation: slide-in-top 0.6s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

@keyframes slide-in-top {
  0% {
    transform: translateY(-10px);
    opacity: 0;
  }

  100% {
    transform: translateY(0px);
    opacity: 1;
  }
}

.tip {
  position: absolute;
  height: 33px;
  width: 109px;
  font-size: medium;
  left: 76rem;
  opacity: 0;
  background-color: rgb(12, 12, 12);
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition-duration: .2s;
  pointer-events: none;
  letter-spacing: 0.5px;
}


.tip::before {
  position: absolute;
  content: "";
  width: 10px;
  height: 10px;
  background-color: rgb(12, 12, 12);
  background-size: 1000%;
  background-position: center;
  transform: rotate(45deg);
  right: -5%;
  transition-duration: .3s;
}

.social-links:hover .tip {
  opacity: 1 !important;
  transition-duration: .3s !important;
}
/* -------------------'loader'-------------------- */


#loader{
    width: 100vw;
    height: 100vh;
    position: fixed;
    background-color: #e8e8e8;
    z-index: 99999999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.spinner {
 width: 50px;
 height: 50px;
 animation: spinner-y0fdc1 2s infinite ease;
 transform-style: preserve-3d;
}

.spinner > div {
 background-color: rgba(0,77,255,0.2);
 height: 100%;
 position: absolute;
 width: 100%;
 border: 2px solid #004dff;
}

.spinner div:nth-of-type(1) {
 transform: translateZ(-22px) rotateY(180deg);
}

.spinner div:nth-of-type(2) {
 transform: rotateY(-270deg) translateX(50%);
 transform-origin: top right;
}

.spinner div:nth-of-type(3) {
 transform: rotateY(270deg) translateX(-50%);
 transform-origin: center left;
}

.spinner div:nth-of-type(4) {
 transform: rotateX(90deg) translateY(-50%);
 transform-origin: top center;
}

.spinner div:nth-of-type(5) {
 transform: rotateX(-90deg) translateY(50%);
 transform-origin: bottom center;
}

.spinner div:nth-of-type(6) {
 transform: translateZ(22px);
}

@keyframes spinner-y0fdc1 {
 0% {
  transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
 }

 50% {
  transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
 }

 100% {
  transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
 }
}

/* Logo-7 */
.logo-7 {
    margin-top: 1rem;
    display: inline-block;
}
.logo-7 i {
    font-size: 60px;
    display: inline-block;
    float: left;
    margin-right: 5px;
    color: #34495e;
}
.logo-7 .left {
    float: left;
    margin-left: 10px;
    text-align: left;
}
.logo-7 a {
    color: #545454;
}
.logo-7 .left h3 {
    font-family: 'Muli', sans-serif;
    font-weight: 300;
    font-size: 25px;
    text-transform: uppercase;
    color: #e74c3c;
}
.logo-7 .left p {
    text-align: right;
    font-size: 14px;
    color: #919191;
    font-style: italic;
    border-top: 1px dashed #919191;
    letter-spacing: 2px;
    padding-top: 3px;
    font-family: 'Lobster', cursive;
}

        </style>
    </head>

   <!-- <body> -->

    <body onload=" document.getElementById('loader').style.display='none'">

    
<section id="loader">
    <div class="spinner">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    </div>
</section>
        <!-- background png -->
        <img src="pngwing.com.png" alt="" style="object-fit: cover; position: absolute; width: -webkit-fill-available; background-size: cover; height: 130vh;" />

        <header class="primary-header">
            <nav class="navbar container">
                <!-- <h1 class="logo">
                    <span>A</span>
                    <span>N</span>
                    <span>K</span>
                    <span>I</span>
                    <span>T</span>
                </h1> -->

                <!-- <a href="#" class="logo" >HELLO.</a> -->

                <div class="logo-holder logo-7">
                <a href="#">
                  <i class="fas fa-book-open"></i>
                  <div class="left">
                    <h3>Ankit Rahore</h3>
                    <p>webdevloper...!</p>
                  </div>
                </a>
              </div>


                <ul class="nav-list">
                    <li>
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="nav-link">About me</a>
                    </li>
                    <!-- <li>
                    <a href="#" class="nav-link">Projects</a>
                </li> -->
                    <li>
                        <a href="#resume" class="nav-link">Resume</a>
                    </li>
                    <li>
                        <a href="#contact" class="nav-link">Contact Us</a>
                    </li>
                </ul>
                <!-- <a href="#" class="button">Book now</a> -->
                <div class="profile1">
                    <button onclick="myfunction()"><img src="23.png" alt="profile" /></button>
                    <!-- <div><?php echo $_SESSION['username']?></div>  -->
                </div>
            </nav>
        </header>

        <section>
            <div id="asad" class="animation">
                <p>
                    Hello! Frends
                    <span>
                        WELCOME
                    </span>
                    to my portfolio website.
                </p>
            </div>

            <div id="modal">
                <div class="frame">
                    <div class="center">
                        <div class="profile">
                            <div class="image">
                                <div class="circle-1"></div>
                                <div class="circle-2"></div>
                                <img src="PicsArt_12-06-01.16.25.jpg" width="70" height="70" alt="Ankit " />
                            </div>

                            <div class="name">Ankit Rathore</div>
                            <div class="job">Coder and Webdeveloper</div>

                            <div class="actions">
                                <button class="btn">Follow</button>
                                <button class="btn">Message</button>
                            </div>
                        </div>

                        <div class="stats">
                            <div class="box">
                                <span class="value">523</span>
                                <span class="parameter">Posts</span>
                            </div>
                            <div class="box">
                                <span class="value">1387</span>
                                <span class="parameter">Likes</span>
                            </div>
                            <div class="box">
                                <span class="value">146</span>
                                <span class="parameter">Follower</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="wall"
                style="
                    background-image: url('Untitled design (1).jpg');
                    background-size: cover;
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                    align-content: space-between;
                    flex-wrap: nowrap;
                    align-items: center;
                "
            >
                <div style="margin-left: 58%;">
                    <span>
                        <!-- <h1 style="font-size: -webkit-xxx-large;"> <div class="logo-holder mt-1 logo-4">
                <a href="#">
                    <h3>Ankit <span>Rathore</span></h3>
                </a>
            </div></h1> -->
                       <div class="logo-holder mt-1 logo-4">
                <a href="#">
                <h1 style="font-size: -webkit-xxx-large; ">Ankit <span style=" color: #e74c3c;">Rathore</span></h1>
                </a>
            </div>
                        <p>I'm <span style="font-size: medium; color: #e74c3c;" class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer">Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true">|</span></p>
                    </span>
                </div>

                <div style="margin-right: 1rem;">
                    <div class="social-links" style="display: flex; flex-direction: column;">
                        
                        <a href="https://www.facebook.com/profile.php?id=100056130937805" class="a facebook"><span class="tip">Facebook</span><i class=" bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/_ra.th.or_/" class="a instagram"><span class="tip">Instagram</span><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.snapchat.com/add/kingofdark2297?share_id=aVg3QYn5Hrw&amp;locale=en-US" class="a google-plus"><span class="tip">Snapchat</span><i class="bx bxl-snapchat"></i></a>
                        <a href="https://www.linkedin.com/in/%C3%A0%C5%84k%C3%AD%C5%A5-%C5%95%C3%A1%C5%A5h%C3%B8%C5%95%C3%A9-417ab4280/" class="a linkedin"><span class="tip">Linkedin</span><i class="bx bxl-linkedin"></i></a>
                        <a href="https://github.com/Ankitrathore2006" class="a twitter"><span class="tip">Github</span><i class="bx bxl-github"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= About Section ======= -->
        <section id="about" class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">#<strong style="color: #173b6c;">About</strong></h2>
                    </div>
                </div>

                <div class="row">
                    <div class=" back col-lg-4" data-aos="fade-right">
                        <div class="back-content">
                        <img src="C.jpg" class="img-fluid" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Web Designer &amp; Web Developer.</h3>
                        <p class="fst-italic">
                            I am a student of Computer Science Engineering , I am a Full Stack Web Developer and good cooder.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>25 Aug 2004</span></li>
                                    <!-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> -->
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91 917 499 8662</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>gwalior, India</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>1234 siya bueaty parlour gadhaipura, gwalior 474004</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php
                                                    $from = new DateTime('2004-08-25');
                                                    $to   = new DateTime('today');
                                                    echo $from->diff($to)->y;
                                                    ?></span></li>
                                      <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>running</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>swedeshrathore54950@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Strong problem-solving skills and ability to analyze complex systems to propose innovative solutions. Familiarity with software development methodologies, version control, and software testing techniques.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Skills</h2>
                    <p>
                        Strong analytical and problem-solving skills, with the ability to identify and resolve complex technical issues efficiently, understanding of techniques and tools for optimizing website performance, including
                        caching, asset optimization, and code minification.
                    </p>
                </div>

                <div class="row skills-content">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">C <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Java <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">WordPress <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">SQL <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Bootstrap <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Skills Section -->

        <section id="resume" style="display: flex; align-content: center; justify-content: center; align-items: center;">
            <div style="margin-top: 6rem;" class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">#<strong style="color: #173b6c;">Resume</strong></h2>
                    </div>
                </div>
                                <div style="
                    /* backdrop-filter: blur(22px) saturate(200%); */
                    -webkit-backdrop-filter: blur(22px) saturate(200%);
                    background-color: rgba(255, 255, 255, 0.3);
                    border-radius: 12px;
                    border: 1px solid rgba(209, 213, 219, 0.3);
                "><img class="resume" src="resume_00001.jpg" alt="resume" style="/* mix-blend-mode: darken; */width: -webkit-fill-available;mix-blend-mode: multiply; padding: 10px;
    border: 1px solid rgba(209, 213, 219, 0.3);"></div>


                <div style="/* float: left; */ position: relative; left: 65rem; bottom: 65px;">
                    <a href="resume.pdf" download><button class="Btn">
   <svg class="svgIcon" viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path></svg>
   <span class="icon2"></span>
   <span class="tooltip">Download</span>
</button></a>
                </div>
            </div>
        </section>


         <!--  project Section -->
        <section id="projects" class="skills section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Projects</h2>
                </div>
                <div class="col" style="
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    align-content: space-between;
">
                    
                    <?php include 'projects.php';?>
                </div>
                
                        <!-- <div style="height: auto !important; MARGIN-TOP: 2rem;" class="progress">
                            <span style="font-size: initial !important;" class="skill">SUPERMARKET BILLING SYSTEM WITH ADMIN PANEL <i class="val">2022</i></span>
                            <div style="height: 4px !important;" class="progress-bar-wrap"></div>
                            <div>
                                <p style="font-size: initial !important;">
                               
                                • Implemented a user-friendly interface for cashiers to scan products, calculate totals, and generate receipts.<br><br>
                                • Designed an admin panel for store managers to manage product inventory, pricing, and generate sales reports.<br><br>
                                • Technologies used: PHP, HTML, CSS, JavaScript, MySQL.
                                </p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            
        </section>
        <!-- End project Section -->

        <section id="contact">
            <?php include 'con1.php';?>
        </section>
        <div class="footer-basic">
            <!-- <div class="waviy">
                <span style="--i: 1;">T</span>
                <span style="--i: 2;">h</span>
                <span style="--i: 3;">a</span>
                <span style="--i: 4;">n</span>
                <span style="--i: 5;">k</span>
                &ensp;
                <span style="--i: 6;">y</span>
                <span style="--i: 7;">o</span>
                <span style="--i: 8;">u</span>
            </div> -->

            <?php include 'footer.php';?>

            <a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>
        </div>

        <script src="script.js"></script>
<script>
// for loader
let myfun(){
    document.getElementById("loader").style.opacity="0";
    // loader.style.opacity="0";
}

    // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
        <!-- Vendor JS Files -->
        <script src="vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="vendor/aos/aos.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/glightbox/js/glightbox.min.js"></script>
        <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="vendor/swiper/swiper-bundle.min.js"></script>
        <script src="vendor/typed.js/typed.umd.js"></script>
        <script src="vendor/waypoints/noframework.waypoints.js"></script>
        <script src="vendor/php-email-form/validate.js"></script>
        <script src="vendor/js/main.js"></script>
    </body>
</html>
