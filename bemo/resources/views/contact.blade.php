<html>
<head>

	<meta name="robots" content="noindex" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
	<script
    src="https://code.jquery.com/jquery-3.3.1.js">
	</script>
</head>
<body>

	<div class="header">
	<div class="bg"></div>
	<a href="index.html"><img src="images/{{$data->logo}}" id="title_logo">
	<nav>
		<ul>
			<li><a class="active" href="{{'contact'}}">Contact Us</a></li>
			<li><a href="#">CDA Interview Questions</a></li>
			<li><a href="#">How To Prepare</a></li>
  			<li><a  href="{{'main'}}">Main</a></li>
		</ul>
	</nav>
	</div>
	

	<div id="container">
		<img src="images/contact-us.png" id="hero_image">
	</div>
	<h3>BeMo Academic Consulting Inc.</h3>
	<p><u>Toll Free:</u> 1-855-900-BeMo (2366)</p>
	<p><u>Email</u>: info@bemoacademicconsulting.com</p>

	<div id="form_container">

		<form action="/mail" method="POST" id="contact_form">
		@csrf
			Name: *<br><br>
			<input type="text" required name="name" id="name"><br><br>
			Email address: *<br><br>
			<input type="email" required name="email" id="email"><br><br>
            How can we help you: *<br><br>
			<input type="text" id="area" required name="msg"><br><br>
			<button type="submit">Submit</button>  
			<button type="button" id="reset">Reset</button>

			</form>
			
			<h5><u>Note:</u> If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy & paste the email address)</h5>
		
	</div>
	<footer>
		<div id="footer">
			©2013-2016 BeMo Academic Consulting Inc. All rights reserved <span><a class="para_links" href="#">Disclaimer & Privacy Policy </a> <a class="para_links" href="#">Contact Us</a></span>

			<a class="footer_links" href="#">Twitter</a></span>
			<a class="footer_links" href="#">Facebook</a> <span>

		</div>
	</footer>

	    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
    <script> 
         $(document).ready(function(){ 
            $(window).scroll(function(){ 
            	$('.header').fadeIn();
                $('.header').css("opacity", 1- $(window).scrollTop()/90000) ;
            }) 

			$("#reset").click(function(){
				$("#name").val("");
				$("#email").val("");
				$("#area").val("");
			})
        }) 
    </script> 
</body>
</html>