<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="PHP Login App bd-index-custom-example">
        <title>Don Racine bookings </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
	
    </head>
	
    <body class="layout-default">
	<div style="background-image:'user_profile.png';">
	
        <nav id="navbar" class="navbar has-shadow is-spaced">
            <div class="container">
            <div class="content">
                <h1>Don Racine Bookings </h1>
                <?php
				
                    if (isset($_SESSION['username'])) {
						
                ?>
                        <p>
                            Logged in as <?php echo $_SESSION['username'] ?> 
							
							
                        </p>
                        
                        <p><a href="/?super">Admin Only</a> | <a href="/calendar.php">Make Booking</a> |<a href="/?logout">Log Out</a></p>
                <?php 
                    } else {
                ?>
                        <p>Not logged in</p>
                        <p><a href="/?login">Log In</a> | <a href="/?forgot">Forgot Password</a> | <a href="/?register">Register</a></p>
                <?php
                    }
                ?>
          
           
			<p class=text-justify">
				Amid the hustle and bustle of modern day living, the biggest luxury you can afford someone is time. 
				Here in Don Rcaine, Personal Shopping that is what we deliver. We cater to women and men of all ages and 
				all budgets with our complimentary shopping appointments lasting approximately 70 minutes. 

				Upon booking an appointment, you can enjoy a private shopping appointment, where our expert personal shoppers will assist 
				you in your styling needs. Whether you are searching for a smart-casual weekend look, a seasonal update, a key occasionwear 
				piece, a brand new work look or possibly a new fashion forward active wear collection, we have everything covered.

				When booking an appointment, it’s always helpful to have an idea of what you want to achieve from the session. 
				Cultivating personal style comes down to what you feel best wearing. Ask yourself, what are you shopping for, 
				what do you need? What colour palette are you drawn to? What are your expectations? What you can expect from the 
				Arnotts Personal Shopping team is a comfortable, tailored, private shopping experience. We guarantee you will leave 
				feeling confident and special!
			</p>
			 </div>
			   </div>
        </nav>
