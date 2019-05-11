<!DOCTYPE html>

<head>
<meta charset="utf-8" />

<meta name="description" content="Located in Hayward, Wisconsin...Home of the original homemade fudge and the world famous turtles. We offer a large selection of both homemade and olde time favorites, located in Hayward, Wisconsin. " />  
<meta name="keywords" content="original, famous, selection, candy, homemade, homemade candies, Tremblay's, Hayward, Hayward WI, best candy, fudge, taffy, brittle, cashew, world, famous turtles, turtles, caramel, vanilla, dark, chocolate, chocolate, peanut, butter, wrapped, ">
<title>Welcome to Tremblay's Sweet Shop</title>

<meta name="viewport" content="width=device-width">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script src="js/responsiveslides.min.js"></script>

<script>
	$(document).ready(function () {
					var $str = "Ftstesting:Testing!123456789123";
					var $enc = window.btoa($str);
					var $ccnumber = <?php echo $_POST['cardnumber']; ?>;
					var $expdate = <?php echo $_POST['expdate']; ?>;
					var $amount = <?php echo $_POST['amt']; ?>;
					console.log("yes"+$enc);
					$.ajax({  
						url: "https://fts.cardconnect.com:6443/cardconnect/rest/auth",
						headers: {"Authorization" : "Basic "+ $enc ,
								  "Content-Type":"application/json" },
						type: 'PUT',
						data: JSON.stringify({ "merchid": "800000000803", "amount": "0", "expiry": $expdate, "account": $ccnumber }),
					}).then(function(data) {
						console.log(data);
						console.log(data.respstat)
					   $('.respstat').append(data.respstat);
					});
	});
	/* 		//Toggle for width display
			var showWidth = 1;
			
			if(showWidth == 1) {
				$(document).ready(function() {
					$(window).resize(function() {
						var width = $(window).width();
						document.getElementById('output_width').innerHTML="Window Width:"+width.toString();					
					});				
				});			
			}	 */		
</script>

<link href="css/main.css" rel="stylesheet" type="text/css" />


<style type="text/css">
body {
	background-color: #FFFFFF;
	background-image: url(images/hbackground.png);
	background-repeat: no-repeat;
	background-attachment: fixed;
}
a {
	font-family: Arial, Helvetica, sans-serif;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	font-family: Arial, Helvetica, sans-serif;
}
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
}
</style>




</head>


<body>
<div id="output_width"></div>

<div id="pagecontainer">
	<header class="mainheader">   
	  <a href="index.html"><img id="logo" src="images/logo.png" alt="Tremblay's Sweet Shop logo" /></a> 
       <div id="callUs"><p>Call us today to place an order! <br> 715-634-2785 or  1-800 40-FUDGE  <br> Mail orders are shipped promptly. </p></div>  
	   
      <nav> 
		<label for="show-menu" class="show-menu"><img src="images/menu-icon.png" alt="Show Menu button" /></label>
		<input type="checkbox" id="show-menu" name="button">
			<ul id="menu">
				<li><a href="index.html">home</a></li>
				<li><a href="homemadecandies.html">homemade candies</a></li>
				<li><a href="oldetymecandies.html">olde-tyme candies</a></li>
				<li><a class="active" href="ourstory.html">our story</a></li>
				<li><a href="specialevents.html">special events</a></li>
				<li><a href="contact.html">contact us</a></li>
			</ul>
      </nav>   
        
   </header>

  


<div id="content">

<!---------------------------- SECTION - History --------------------------------->
 
  <div class="history">
	<div class="hccandylabel stroke">ORDER CONFIRMATION</div>
  
	<?php print_r($_POST); ?>
	
		
           <div class="column">
				<h5>Thank you, <?php echo $_POST["firstname"]; ?>, your order has been received. You will receive an email shortly with order details. </h5>

				
				
				</h5>
				<p class="respstat"><strong>Status: </strong></p>
           </div>
		
		
		
		
				
				
		
		
	
	
</div>
	
	
	
  

  
  	<section class="call">
				<div class="calltext"><p class="space">Call us today at 715-634-2785 or 1-800-40-FUDGE to place an order! Mail orders are shipped promply</p></div>
  				<div class="callUs"><img class="space" src="images/callUs.png" alt="Call us today at 715-634-2785 or 1-800 40-FUDGE to place an order! Mail orders are shipped promptly." /></div>
  	</section>  		
  		
    
  </div> <!--end CONTENT div -->
  
    <footer>
  			<div class="footerlogo"><img src="images/footerlogo.png" /></div>
  			<nav class="footer-nav">            
            	<ul>
         			<li><a href="index.html">Home <span> | </span></a></li>
            		<li><a href="homemadecandies.html">Homemade Candies <span> | </span></a></li>
            		<li><a href="oldetymecandies.html">Olde-Tyme Candies <span> | </span></a></li>
                    <li><a href="history.html">History<span> | </span></a></li>
            		<li><a href="specialevents.html">Special Events <span> | </span></a></li>
            		<li><a href="contact.html">Contact Us</a></li>
		 		</ul>               
            </nav>
             <div class="address"><p>Tremblay's Sweet Shop - 10569 Main Street, Hayward, WI 54843 <span> | </span>Phone - 715-634-2785</p></div>
  
  			 <div class="email-link"><p>Website by<a href="mailto: mtpittner@gmail.com"> mtpittner@gmail.com</a>. &copy; 2017 - 2018 - Tremblay's Sweet Shop. All rights reserved.</p></div>
        
	</footer> 
    
</div> <!--end CONTAINER div -->



</body>
</html>
