<?php>
if (isset($_POST['name']) &&  isset($_POST['email']) && isset($_POST['message'])){
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
 $fname = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  echo 'kindly Provide Valid Email';
 } else {
  $body = $name."\n".$email."\n".$message;

 if(mail('priyamalekar999@gmail.com', 'NGT Response ', $body , 'From:Response@nevergiveupthoughts.com ')){
   echo 'Thanks for your contacting.';
  } else {
   echo 'There is a problem in sending mail.';
  }
 }
 
}
	else {
		echo 'All Fields are required.';
	}
?>

<html>

		<body>	
<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->


									<section class="6u 12u(narrower)">
                                <a href="" id="logo">
                                 <a href=""></a>
								<h2><b><u>Contact</u></b></h2>
								<form action="" method="POST">
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text"  required="" name="name" id="name" placeholder="Name" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="email"  required="" name="email" id="email" placeholder="Email" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" required="" id="message" placeholder="Message" rows="5"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Send Message" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
								</form>

						</div>
					</div>
				</section>
				</body>
</html>