<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- goole fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
  <!-- fonts -->
  <!-- fontawsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
  <!-- animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <!-- font awsome -->
  <link rel="stylesheet" href="css/all.css">
  <!-- font awsome -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- bootstrap css start -->
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
  <!-- bootstrap css end -->
  <!-- custom css start -->
  <link rel="stylesheet" href="css/style.css">
  <!-- custom css end -->
  <!-- responsive media css start -->
  <link rel="stylesheet" href="css/media.css">
  <!-- responsive media css end -->

  <title>Services</title>
</head>
<body>
<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='saruarhossennazmul0@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo ""<script>
             alert('message sent succesfully'); 
             window.history.go(-1);
     </script>"";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>


<!-- Contact form successfully submitted. Thank you, I will get back to you soon! -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- gallery show and slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<!-- gallery show and slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<!-- slick slider for partner -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script src="js/script.js"></script>
<script>
window.onscroll = () => {
  $(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".header").addClass("active1");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".header").removeClass("active1");
        }
    });
});

// header 
</script>
</body>
</html>




