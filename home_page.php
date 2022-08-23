<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to Airlines
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body style="background-color: #6A5ACD;">
		<img   class="logo" src="images/vit.png" style="border-radius:150px;"> 
		<h1 id="title" style="color:white;text-outline: 2px 2px #ff0000;">
			VIT Airways
		</h1>
		<div>
			<ul >
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
<li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i> Check PNR </a></li>

				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">

			<div class="welcome_text">
				<h1 style=" background: black; 
    color: tan;
    font-weight: 600;
    margin: 2rem 3rem 0;
    mix-blend-mode: overlay;
    padding: 5px 15px;
    text-align: center;">Welcome to VIT AIRLINES !</h1>
									<video autoplay muted loop id="myVideo" style="position:absolute;top:0;left:0;object-fit:cover;Height: 100%;width: 100%;pointer-events:none;">
					  <source src="jet.mp4" type="video/mp4">
					</video>
					
			<div class="news">

							    <marquee direction="up" height="100%">
							   <h4 style="color:black;">How to Book Tickets  </h4> 
							    <p style="color: black;"> Step 1: Sign Up.<br>
							Step 2: Then Login with your credetials (ie. Username and password).<br>
							Step 3: Enter Station between which you want to travel and date of journey<br>
							Step 4: You have select No. Of passangers and Class of Birth ( Economy or Business) .<br>
							Step 5: Select preferrable flight :<br>
							                          a)Make payemnt<br>
							                          b)After payment you got PNR Number<br>
							                          c) Print Ticket<br>
							                          d)You can check also PNR Status Through PNR Check on Home Page<br>

							    <hr>
							  
							   </marquee>
			   <a href="morenews.html">more news...</a>

            </div>

        </div>
			<!-- <img src="images/air1.png" width=100%> -->

		</div>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->

	</body>
</html>