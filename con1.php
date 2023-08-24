<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
<style>
	.col-md-5:after,
.img:before {
  position: absolute;
  transition: all 0.2s;
  -webkit-transition: all 0.2s;
}

.col-md-5:after {
  content: '';
  opacity: 0;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.1);
  width: 100%;
  height: 100%;
}

.img:before {
  .img: attr(data-content);
  top: 60%;
  z-index: 1;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  padding: 2% 3%;
  border: solid #000000 1px;
  background-color: #ffffff;
}

.col-md-5:hover:after {
  opacity: 2;
}
.img:hover {
  opacity: 2;
}

.card {
  position: relative;
  /* width: 99%;
  height: 99%; */
  border-radius: 14px;
  z-index: 1111;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  /* box-shadow: 20px 20px 60px #bebebe, -20px -20px 60px #ffffff; */
  ;
}

.bg {
  position: absolute;
  top: 5px;
  left: 5px;
  width: 98%;
  height: 98%;
  z-index: 2;
  /* background: rgba(255, 255, 255, .95); */
  backdrop-filter: blur(24px);
  border-radius: 10px;
  overflow: hidden;
  outline: 2px solid white;
}

.blob {
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 50%;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #ff0000;
  opacity: 1;
  filter: blur(12px);
  animation: blob-bounce 5s infinite ease;
}

@keyframes blob-bounce {
  0% {
    transform: translate(-100%, -100%) translate3d(0, 0, 0);
  }

  25% {
    transform: translate(-100%, -100%) translate3d(100%, 0, 0);
  }

  50% {
    transform: translate(-100%, -100%) translate3d(100%, 100%, 0);
  }

  75% {
    transform: translate(-100%, -100%) translate3d(0, 100%, 0);
  }

  100% {
    transform: translate(-100%, -100%) translate3d(0, 0, 0);
  }
}


</style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">#Get in <strong style="color: #173b6c;"> Touch</strong></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row mb-5">
							
							
							
			          </div>
					</div>
					
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4 round" style="
    border-radius: 15px;
">
									<h3 class="mb-4" >Contact Us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST"  id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="subject">Mobile no.</label>
													<input type="number" class="form-control" name="subject" id="subject" placeholder="Mobile">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary" style="padding: 4px 14px !important;">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="card col-md-5 d-flex align-items-stretch">
								<div class=" bg info-wrap p-5 img" style="background-image: url(images/DSCN3935-01-01.jpg);">
								</div>
								<div class="blob"></div>    
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

